<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function getIndex() {
        return view('backend.layout.page.dashboard.index');
    }
}