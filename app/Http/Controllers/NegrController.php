<?php

namespace App\Http\Controllers;

use App\Models\Negr;
use Illuminate\Http\Request;

class NegrController extends Controller
{
    public function index(){
        return Negr::all();
    }
}
