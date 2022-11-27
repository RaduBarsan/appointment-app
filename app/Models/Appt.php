<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Appt extends Model
{
public function get($data = FALSE) {
	if ($data) {
				$query = DB::table('appt')->where('data', '=', "$data")->get('pos');
				}
		  else {
				$query = DB::table('appt')->where('data', '>=', date("Y-m-d"))->orderBy('data')->get();
				}
	return $query;
}
public function insert ($nume, $cnp, $data, $pos) {
				DB::insert('insert into appt (nume, cnp, data, pos) values (?, ?, ?, ?)', ["$nume", $cnp, "$data", $pos]);
}

}
