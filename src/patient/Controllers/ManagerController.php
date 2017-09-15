<?php

namespace Leonardo\PatientManager\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    //
    public function index(){

        return 'ssss';
    }

    public function create()
    {
        return view('patient::create');
    }

    public function store(Request $request){
        dd($request->all());
    }
}
