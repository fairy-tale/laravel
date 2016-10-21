<?php

use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
	public function run()
	{
		DB::table('movies')->delete();
		$movies = array(
		["id"=>1, "celeb_id"=>1, "name"=>"The Hunger", "created_at"=>new DateTime, "updated_at"=>new DateTime],
		["id"=>2, "celeb_id"=>1, "name"=>"The Hunger2", "created_at"=>new DateTime, "updated_at"=>new DateTime],
		["id"=>3, "celeb_id"=>2, "name"=>"The Hunger3", "created_at"=>new DateTime, "updated_at"=>new DateTime],
		["id"=>4, "celeb_id"=>3, "name"=>"The Hunger4", "created_at"=>new DateTime, "updated_at"=>new DateTime],
		["id"=>5, "celeb_id"=>3, "name"=>"The Hunger5", "created_at"=>new DateTime, "updated_at"=>new DateTime]
		);
		DB::table('movies')->insert($movies);
	}
}
