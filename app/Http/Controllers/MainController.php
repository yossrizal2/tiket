<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use App\Models\Ticket;
use Auth;

class MainController extends Controller
{
    //

    public function dashboard(){
        $data = [];

        return view('main/dashboard', compact('data'));
    }

    public function change_password(){

        $data = [];
        $data = User::find(11);

        // return response()->json($data);
        // return $data->toJson(JSON_PRETTY_PRINT);

        return view('main/change_password', compact('data'));
    }

    public function change_password_update(Request $request){

        $this->validate($request, [
			'password' => 'min:6|required|same:confirm-password',
		]);

        $data = [];
        // $flight = Portfolio::find(1);
        $data = User::find(Auth::id());

        // return response()->json(Hash::check($request->{'old-password'}, $data->password));

        if(Hash::check($request->{'old-password'}, $data->password)){
            $data->password = Hash::make($request->password);
            $data->save();
        } else {
            return back()->with('error', 'Password Lama Salah');
        }
        
        return redirect('main/change-password')->with('success','Password Succesfully Changed!');
    }
}
