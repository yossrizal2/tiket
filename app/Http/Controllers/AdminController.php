<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class AdminController extends Controller
{
    //

    public function ticket(){
        $data = Ticket::all();

        return view('main/ticket', compact('data'));
    }

    public function ticket_edit($id){
        $data = Ticket::find($id);

        return view('main/ticket_edit', compact('data'));
    }

    public function ticket_delete($id){
        $data = Ticket::find($id);
 
        $data->delete();

        return back()->with('success', 'Data successfully deleted.');
    }

    public function ticket_update(Request $request){

        // return response()->json($request->all());

        $tiket = Ticket::where('id', $request->id)->first();
        
        $tiket->id_card_number = $request->id_card_number;
        $tiket->name = $request->name;
        $tiket->address = $request->address;
        

        $tiket->save();
        
        // return response()->json($data);

        return redirect('main/admin/ticket')->with('success','Tiket berhasil diperbarui.');
    }
}
