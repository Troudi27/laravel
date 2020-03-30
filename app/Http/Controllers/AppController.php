<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view ('welcome');
    }


    public function about()
    {
        $author='TRoudi';
        //return view ('about')->with('author',$author);
        //or
        //return view ('about',['author' => $author]);
        //or
        return view ('about', compact('author'));


    }

    public function team()
    {
       /* $members=[
            [   'name' => 'a7med', 'age' => 20,'email' => 'test@test.tn'],
            [   'name' => 'houssem','age' => 20,'email' => 'test@test.tn'],
            [   'name' => 'haithem', 'age' => 20,'email' => 'test@test.tn']
        ];*/

        $members = Member::all();

        //return view ('about')->with('author',$author);
        //or
        return view ('team',['members' => $members]);
        //or
        //return view ('team', compact('members'));


    }
}
