<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class CheckController extends Controller
{
    //
    public function check(){
        $data = Ticket::all();

        return view('main/check', compact('data'));
    }

    public function check_in($id){
        $data = Ticket::find('unique_id', $id)->first();

        if ($data->uniquq_id == null) return back()->with('error', 'Kode Tiket Salah atau Tidak Ada.');

        return view('main/check_in', compact('data'));
    }
}
