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

    public function check_ticket(Request $request){
        $data = Ticket::where('unique_id', $request->unique_id)->first();

        // return response()->json($data);

        if (!isset($data->unique_id)) return back()->with('error', 'Kode Tiket Salah atau Tidak Ada.');
        if ($data->unique_id == null) return back()->with('error', 'Kode Tiket Salah atau Tidak Ada.');
        if ($data->status == 1) return back()->with('error', 'Maaf! Kode Tiket kedaluwarsa dan sudah digunakan.');

        $data->status = 1;
        $data->save();

        return view('main/check_ticket', compact('data'));
    }
}
