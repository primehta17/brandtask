<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::all();
        return view('profile', ['profiles' => $profiles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {
        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'pin' => 'required|string|max:20',
        ];

        // Validation messages
        $messages = [
            'email.unique' => 'The email address has already been taken.',
        ];

        // Validate the request
        $validatedData = $request->validate($rules, $messages);

        // Create a new profile with validated data
        $profile = new Profile;
        $profile->name = $validatedData['name'];
        $profile->email = $validatedData['email'];
        $profile->phone = $validatedData['phone'];
        $profile->address = $validatedData['address'];
        $profile->country = $validatedData['country'];
        $profile->state = $validatedData['state'];
        $profile->city = $validatedData['city'];
        $profile->pin = $validatedData['pin'];
        $profile->save();

        return redirect(route('indexprofile'))->with('status', 'User Profile Created !!');
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
