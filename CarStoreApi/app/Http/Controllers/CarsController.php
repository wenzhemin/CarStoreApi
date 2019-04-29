<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index() {
        return 'INDEX';
    }

    public function getAll() {
        return 'GET ALL';
    }

}
