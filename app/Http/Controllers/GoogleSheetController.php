<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;

class GoogleSheetController extends Controller
{
    public function getDataFromSheet(){
        $cacheKey = 'google_sheet_data';
        $cacheDuration = now()->addHours(24); // Cache data selama 24 jam
        
        return Cache::remember($cacheKey, $cacheDuration, function () {
            $rows = Sheets::spreadsheet(env('SHEET_ID', ''))->sheet('team')->get();
            $header = $rows->pull(0);
            $values = Sheets::collection($header, $rows);
            return $values;
        });
    }

    public function getDataFromSheetGallery(){
        $rows = Sheets::spreadsheet(env('SHEET_ID', ''))->sheet('gallery')->get();
        $header = $rows->pull(0);
        
        
        $values = Sheets::collection($header, $rows);


        return $values;
    }

}
