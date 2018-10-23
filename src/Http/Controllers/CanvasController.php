<?php

namespace Canvas\Http\Controllers;

use Illuminate\View\View;

class CanvasController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return View
     */
    public function index(): View
    {
        return view('canvas::canvas.dashboard.index');
    }
}