<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class PortalController extends Controller
{
    //

    public function index(){

        $data = [];

        // return response()->json($data);

        return view('portal/order_ticket', compact('data'));
    }

    public function ticket_store(Request $request){

        // return response()->json($request->all());

        // return response()->json(substr(md5(microtime()), 0, 8));

        $unique_id = strtoupper(substr(md5(microtime()), 0, 8));
 
        $tiket = new Ticket;
 
        $tiket->unique_id = $unique_id;
        $tiket->id_card_number = $request->id_card_number;
        $tiket->name = $request->name;
        $tiket->address = $request->address;
        $tiket->status = 0;
 
        $tiket->save();

        $data = $tiket;

        return view('print/ticket_print', compact('data'));

        // return back()->with('success','Anda berhasil memesan tiket kode unik anda adalah <b> '.$unique_id.' </b> ');
    }
}
