<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index (Request $request) {
        $series = [
            'Peaky Blinders',
            'Stranger Things',
            'Game of Thrones'
        ];

        $title = 'Series';

        return View('Index', ['series' => $series, 'title' => $title]);
    }

    public function create() {
        return View('create');
    }
}
