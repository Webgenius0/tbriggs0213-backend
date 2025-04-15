<?php

namespace App\Http\Controllers\Api\Contact;
use Google\Rpc\Help;

use App\Helpers\Helper;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Api\Contact\ContactResource;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:12|unique:contacts,phone',

        ]);

        $contact = Contact::create($request->all());

        if (!$contact) {
            return Helper::jsonResponse(
                false,
                'Contact creation failed',
                500,
                []
            );
        }

        return Helper::jsonResponse(
            true,
            'Contact created successfully',
            201,
            new ContactResource($contact)
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
