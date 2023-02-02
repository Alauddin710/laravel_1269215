<?php

namespace App\Http\Controllers;

use App\Models\phone;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::find(1);
        // dd($user);
        echo $user->name;
        echo "<br>";
        // echo $user->phoneTable->phone;
        echo "<br>";
        echo $user->phoneTable[0]->phone;
        echo "<br>";
        echo $user->phoneTable[1]->phone;
    }

    public function phoneData()
    {
        $phone = phone::find(1);
        echo $phone->id;
        echo "<br>";
        echo $phone->user->name;
    }
}
