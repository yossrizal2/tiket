<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class ReportController extends Controller
{
    //

    public function report(){
        $data = Ticket::all();

        return view('main/report', compact('data'));
    }
}
