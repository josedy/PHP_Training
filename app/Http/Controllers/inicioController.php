<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inicioController extends Controller
{
    public function inicio() {
        return view("home", ['title' => 'PHP Training']);
    }

    public function getValues() {
    	$data = \DB::table('users')
                ->select('*')
                ->get();

        return $data;
    }
    public function setValues(Request $request) {
    	\DB::table('users')->insert(
    		['name' => $request->name, 'email' => $request->email, 'phone' => $request->phone, 'password' => '1234', 'remember_token' => 'token', 'created_at' => NOW(), 'updated_at' => NOW()]
    	);
    	return "User successfully inserted";
    }
}
