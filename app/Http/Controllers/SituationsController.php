<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api;
use App\Situation;

class SituationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $situations = Situation::all();
        return view('situations.index')->withSituations($situations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apis = Api::where('cause_id', '=', 1)->get();
        return view('situations.create')->withApis($apis);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $situation = Situation::create([
                    'name' => $request->name,
                    'api_id' => $request->api
                  ]);
        $situation->options()->sync($request->options);
        return redirect('/situations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $situation = Situation::find($id);
        $apis = Api::all();
        return view('situations.edit')->withSituation($situation)
                                     ->withApis($apis);
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
        $situation = Situation::find($id);
        $situation->name = $request->name;
        $situation->api_id = $request->api;
        $situation->save();

        $situation->options()->sync($request->options);

        return redirect('/situations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $situation = Situation::find($id);
        $situation->delete();

        return redirect('/situations');
    }
}
