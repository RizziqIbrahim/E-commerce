<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class ContactController extends Controller
{
    public function index()
    {
         $relateds = Food::orderBy("created_at", "desc")->paginate(4);
        return view("user.contact", compact("relateds"));
    }
}
