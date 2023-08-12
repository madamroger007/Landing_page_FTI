<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;

class GoogleSheetController extends Controller
{
    public function getDataFromSheet()
    {
        $rows = Sheets::spreadsheet(env('SHEET_ID', ''))
            ->sheet('team')
            ->get();
        $header = $rows->pull(0);
        return Sheets::collection($header, $rows);
    }

    public function getDataFromSheetGallery()
    {
        $rows = Sheets::spreadsheet(env('SHEET_ID', ''))
            ->sheet('gallery')
            ->get();
        $header = $rows->pull(0);
        $values = Sheets::collection($header, $rows);

        foreach ($values as $row) {
            $gambarValues = explode(',', $row['gambar']);

            $gallery[] = $this->formatGalleryRow($row);
        }
        return $gallery;
    }

    public function getDataByslugFromSheetGallery($gallery)
    {
        $rows = Sheets::spreadsheet(env('SHEET_ID', ''))
            ->sheet('gallery')
            ->get();
        $header = $rows->pull(0);
        $values = Sheets::collection($header, $rows);

        foreach ($values as $row) {
            if ($row['slug'] === $gallery) {
                return $this->formatGalleryRow($row);
            }
        }
        return null;
    }

    private function formatGalleryRow($row)
    {
        $gambarValues = explode(',', $row['gambar']);

        return [
            'judul' => $row['judul'],
            'subjudul' => $row['subjudul'],
            'deskripsi' => $row['deskripsi'],
            'kategori' => $row['kategori'],
            'waktu' => $row['waktu'],
            'lokasi' => $row['lokasi'],
            'gambar1' => $gambarValues[0] ?? null,
            'gambar2' => $gambarValues[1] ?? null,
            'gambar3' => $gambarValues[2] ?? null,
            'gambar4' => $gambarValues[3] ?? null,
            'slug' => $row['slug'],
        ];
    }
}
