<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class LogController extends Controller
{
    public function show($id){

        $book = Book :: FindOrFail($id);
        return view ("log.show", compact('book'));
    }
}
