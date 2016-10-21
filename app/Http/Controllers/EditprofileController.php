<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\User;
use App\pokemon;

class EditprofileController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function editprofile()
    {	$pokemon = pokemon::all();
    	$user = User::find(Auth::user()->id);    
        return view('editprofile',["user" => $user, "pokemons"=>$pokemon]);
    }
    public function saveeditprofile(Request $input){
    	$user = User::find(Auth::user()->id);
    	$user->name = $input["name"];
        //$user->email = $input['email'];
	$user->hometown = $input['hometown'];
	$user->pokemon_id = $input['pokemon_id'];
    	$user->save();
	 	
    	return redirect('/edit-profile');
    }
}
