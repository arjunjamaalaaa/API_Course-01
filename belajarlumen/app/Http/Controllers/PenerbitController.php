<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    
    public function getPenerbit()
    {
        $penerbit = Penerbit::all();

        return response()->json($penerbit,200);
    }

}
