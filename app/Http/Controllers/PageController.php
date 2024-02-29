<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Welcome';
    }

    public function about()
    {
        return 'Name :  Athriya Genferin
        <br> NIM : 2241720075';
    }

    public function articles($id)
    {
        return "Article Page with ID $id";
    }
}
