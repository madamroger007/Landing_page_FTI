<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;

class GoogleSheetController extends Controller
{
    public function getDataFromSheet(){
        $rows = Sheets::spreadsheet(env('SHEET_ID', ''))->sheet('team')->get();
        $header = $rows->pull(0);
        $values = Sheets::collection($header, $rows);
        return $values;
    }

}
