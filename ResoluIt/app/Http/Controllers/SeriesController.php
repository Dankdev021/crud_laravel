<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index (Request $request) {
        $series = Serie::all();

        $title = 'Series';

        return View('Index', ['series' => $series, 'title' => $title]);
    }

    public function create() {
        return View('create');
    }

    public function store (Request $request) {
        $nomeSerie = $request->input('nome');

        if (DB::insert('INSERT INTO series (nome) VALUE (?)', [$nomeSerie])){
            return 'ok';
        }
    }
}
