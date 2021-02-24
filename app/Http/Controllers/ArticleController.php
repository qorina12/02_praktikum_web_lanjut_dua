<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function artikel($id){
        echo "Halaman Artikel dengan Id ".$id;
    }
}