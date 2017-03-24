<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Api;
use App\Action;

class ActionsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actions = Action::all();
        return view('actions.index')->withActions($actions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apis = Api::where('api_id', '=', 2)->get();
        return view('actions.create')->withApis($apis);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $action = Action::create([
                    'name' => $request->name,
                    'api_id' => $request->api
                  ]);
        $action->options()->sync($request->options);
        return redirect('/actions');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = Action::find($id);
        $apis = Api::all();
        return view('actions.edit')->withAction($action)
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
        $action = Action::find($id);
        $action->name = $request->name;
        $action->api_id = $request->api;
        $action->save();

        $action->options()->sync($request->options);

        return redirect('/actions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $action = Action::find($id);
        $action->delete();

        return redirect('/actions');
    }
}
