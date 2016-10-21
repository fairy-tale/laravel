<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\User;
use App\pokemon;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function editpokemon()
    {	    $pokemons = pokemon::all();
            return view('admin', ['pokemons' => $pokemons]);
    }
    public function addpokemon(Request $request){	
	    $validator = Validator::make($request->all(), [
		'name' => 'required|max:255',
	    ]);

	    if ($validator->fails()) {
		return redirect('/admin')
		    ->withInput()
		    ->withErrors($validator);
	    }
	    $pokemons = pokemon::all();
	    $duplicate = $pokemons->where('name', '=', $request->name)->first();

	   if (is_null($duplicate)) {
	    $last_pokemon = $pokemons->last();
	    $pokemon_id = $last_pokemon->id + 1;
	    $pokemon = new pokemon;
	    $pokemon->name = $request->name;
	    $pokemon->save();
	    
	   } 
	   return redirect('/admin');
    }
}
