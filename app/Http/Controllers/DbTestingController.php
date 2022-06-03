<?php

namespace App\Http\Controllers;

use App\Models\DbTesting;
use Illuminate\Http\Request;

class DbTestingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dbTesting = DbTesting::find(1);

        // dd($dbTesting);

        return view('feed.post', compact('dbTesting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DbTesting  $dbTesting
     * @return \Illuminate\Http\Response
     */
    public function show(DbTesting $dbTesting)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DbTesting  $dbTesting
     * @return \Illuminate\Http\Response
     */
    public function edit(DbTesting $dbTesting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DbTesting  $dbTesting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DbTesting $dbTesting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DbTesting  $dbTesting
     * @return \Illuminate\Http\Response
     */
    public function destroy(DbTesting $dbTesting)
    {
        //
    }
}
