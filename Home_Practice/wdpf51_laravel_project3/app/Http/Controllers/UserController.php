<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::find(1);
        //dd($users);
        echo $users->name;
        // echo "<br>";
        // echo $users->phoneTable->phone;
        // echo "<br>";
        // echo $users->phoneTable->created_at;
        echo "<br>";
        echo $users->phoneTable[0]->phone;
        echo "<br>";
        echo $users->phoneTable[1]->phone;
    }
    public function phoneData()
    {
        $phone =  Phone::find(1);
        echo "Phone Id:" . $phone->id;
        echo "<br>";
        echo $phone->user->name;
    }
}
