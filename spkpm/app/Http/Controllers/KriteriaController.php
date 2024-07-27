<?php

namespace App\Http\Controllers;

use App\Models\PmFaktor;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index() 
    {
        $kriteria = PmFaktor::with('aspek')->orderBy('id_aspek', 'asc')->get();
        $pageName = 'Kriteria Penilaian';
        return view('kriteria', compact('kriteria', 'pageName'));
    }
}
