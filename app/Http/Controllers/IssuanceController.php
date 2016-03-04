<?php

namespace App\Http\Controllers;

use App\Issuance;
use DB;

class IssuanceController extends Controller
{

    /**
     * Config middleware
     */
    public function __constractor()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // Get the issuance records with common names
        $issuances = Issuance::with(['owner', 'creator'])->orderBy('timeover_index');

        return response()->json($issuances);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return 'create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        return 'store';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        return 'destroy';
    }

    /**
     * Show certificate status of self
     * 
     * @return Response
     */
    public function self()
    {
        return 'self';
    }

    /**
     * Create or update self's certificate
     * 
     * @return Response
     */
    public function commit()
    {
        return 'commit';
    }
}
