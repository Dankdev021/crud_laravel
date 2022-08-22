<?php

namespace App\Http\Controllers;

use App\Models\Serie;
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
        Serie::create($request->all());

            return redirect('/series');
    }

    public function destroy (Request $request) {
        Serie::destroy($request->serie);
        return redirect('/series');
    }
}
