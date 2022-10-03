<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index() {
        //fetching data using these methods

        //rawdog SQL Queries 
        // $users = DB::select('select * from users');
        // dd($users);

        //Query Builder
        $users = DB::table('users')->select(['name','email'])->whereNotNull('email')->orderBy('name')->get();
        dd($users);
        //Eloquent ORM

    }
}