<?php

namespace App\Http\Controllers;

use App\Models\Waitlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WaitListController extends Controller
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
        if (!Auth::check()) {
            return view('waitlist.login');
        }

        $waitlistItems = $request->vacancyId;
        $userId = Auth::id();
        $allWaitlistItemsPerUser  = WaitList::where('user_id', $userId)
            ->where('vacancy_id', $waitlistItems)
            ->get();

        if (count($allWaitlistItemsPerUser ) === 0) {
            $waitlistItem = new WaitList();
            $waitlistItem->vacancy_id = $waitlistItems;
            $waitlistItem->user_id = $userId;
            $waitlistItem->save();
            return view('waitlist.success');
        } else {
            return view('waitlist.already-registered');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(WaitList $waitlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WaitList $waitlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WaitList $waitlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WaitList $waitlist)
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
