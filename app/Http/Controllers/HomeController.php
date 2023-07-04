<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Certificate;
use App\Models\Hobby;
use App\Models\Social;
use App\Models\User;
use App\Models\Pricelist;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::where('email', 'yossrizalr@gmail.com')->first();

        // return response()->json($user);

        $data = Portfolio::where('user_id', $user->id)->first();
        $experience = Experience::all()->where('user_id', $user->id)->sortByDesc('start_date');
        $certificate = Certificate::all()->where('user_id', $user->id)->sortByDesc('start_date');
        $project = Project::all()->where('user_id', $user->id)->sortByDesc('start_date');
        $hobby = Hobby::all()->where('user_id', $user->id)->sortByDesc('start_date');
        $social_media = Social::all()->where('user_id', $user->id)->sortByDesc('start_date');
        $pricelist = Pricelist::all()->where('user_id', $user->id)->sortBy('start_price');

        // return response()->json($data);

        return view('index', compact('data','experience','certificate','project','hobby','social_media','pricelist'));
        // return view('home');
    }
}
