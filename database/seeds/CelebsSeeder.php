<?php

use Illuminate\Database\Seeder;

class CelebsSeeder extends Seeder
{
	public function run()
	{
		DB::table('celebs')->delete();
		$celebs = array(
		["id"=>1, "name"=>"JEN", "created_at"=>new DateTime, "updated_at"=>new DateTime],
		["id"=>2, "name"=>"WIL", "created_at"=>new DateTime, "updated_at"=>new DateTime],
		["id"=>3, "name"=>"mat", "created_at"=>new DateTime, "updated_at"=>new DateTime]
		);
		DB::table('celebs')->insert($celebs);
	}
}
