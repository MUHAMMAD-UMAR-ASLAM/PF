<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    //
    public function test() {
        return view('testpage');
        }

        public function test2() {
            $alltest = \App\Models\Test::all();
            return response($alltest);
            }
}
