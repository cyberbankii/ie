<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Option;

class OptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $options = Option::where('api_id', '=', $id)->get();

        return response()->json(['options' => $options]);
    }
}
