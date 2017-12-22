<?php

namespace App\Http\Controllers;

use App\UserParticipant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

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
     * @param  \App\UserParticipant  $participant
     * @return \Illuminate\Http\Response
     */
    public function show(UserParticipant $participant)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserParticipant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserParticipant $participant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserParticipant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserParticipant $participant)
    {
        //
    }
}
