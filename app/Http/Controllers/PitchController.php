<?php

namespace App\Http\Controllers;

use App\School;
use App\SportHostelRestaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PitchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infrastructures = SportHostelRestaurant::paginate(5);

        foreach($infrastructures as $infrastructure) {
//            $infrastructure->image = Storage::get($infrastructure->image);
        }

        return view('pitch.index', compact('infrastructures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('school.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imgPath = $request->file('image')->store('public');
        $inf = new SportHostelRestaurant;
        $inf->name = $request->input('name');
        $inf->type = $request->input('type');
        $inf->location = $request->input('location', 'Main Campus');
        $inf->image = $imgPath;
        $inf->save();
        return redirect('/pitches')->with('success', 'Structure saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $school= School::where('id', $id)->get()[0];
//      $school = School::findById('id')->get();
      return view('school.show', compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
