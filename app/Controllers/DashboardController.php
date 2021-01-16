<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{

public function index(){
    $title = 'Dashboard'; 
    return view('master/dashboard', compact('title') );
}

}
