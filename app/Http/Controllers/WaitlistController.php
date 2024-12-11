<?php

namespace App\Http\Controllers;

use App\Models\Waitlist;
use Illuminate\Http\Request;

class WaitlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $waitlistItems = $request->vacancyId;
        $userId = $request->user()->id;
        $allWaitlistItemsPerUser = Waitlist::where('user_id', $userId)->where('vacancy_id', $waitlistItems)->get();

        if (count($allWaitlistItemsPerUser) === 0 && $userId) {
            $waitlistItem = new Waitlist();
            $waitlistItem->vacancy_id = $waitlistItems;
            $waitlistItem->user_id = $userId;
            $waitlistItem->save();
            return view('waitlist.success');
        } else if (!$userId) {
            return view('waitlist.login');
        } else if (count($allWaitlistItemsPerUser) !== 0) {
            return view('waitlist.already-registered');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Waitlist $waitlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Waitlist $waitlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Waitlist $waitlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Waitlist $waitlist)
    {
        //
    }

    public function succes()
    {
        return view('waitlist.success');
    }

    public function login()
    {
        return view('waitlist.login');
    }

    public function alreadyregistered()
    {
        return view('waitlist.already-registered');
    }
}
