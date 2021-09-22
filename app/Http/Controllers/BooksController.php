<?php

namespace App\Http\Controllers;

class BooksController
{

    public function index()
    {
        return 'every books';
    }
    public function definedBooks($id)
    {
        return "Detail about this books $id";
    }
}
