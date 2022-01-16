<?php

namespace App\Http\Controllers;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Session;

class MenuController extends Controller
{
    public function index()
    {
        $alls = Food::paginate(9);
        Paginator::useBootstrap();
        return view("menu", compact("alls"));
    }
}
