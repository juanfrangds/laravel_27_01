<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StorageControll extends Controller
{
    public function index()
    {
      return \View::make('new');
    }
}
