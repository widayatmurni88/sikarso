<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OfficeSettings as Office;

class officeSettings extends Controller
{
    //get dashboard office
    public function getDashboardOffice(){
        $office = Office::all();

        return response()->json(compact('office'), 200);
    } 
}
