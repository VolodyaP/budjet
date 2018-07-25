<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BudjetController extends Controller
{
    public function index() {
        return view('budjet');
    }
}
