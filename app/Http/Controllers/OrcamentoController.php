<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class OrcamentoController extends Controller
{
    public function Index() {
        return Inertia::render('Orcamento', []);
    }
}
