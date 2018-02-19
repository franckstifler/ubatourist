<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class schoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $school = \App\School::findOrfail($id);
        $school->departments;
        return view('school.index', compact('school'));
    }
}
