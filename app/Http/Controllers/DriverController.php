<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Driver;
use App\User;

use Auth;
use Input;
use Redirect;
use Log;
use Session;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User();
        $drivers = User::with('driver')->find($user->id)->driver;        
        return view('driver.index', compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('driver.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //$this->validate($request, $this->rules); 
        $input = Input::all();
        $input['user_id'] = Auth::User()->id;
        Driver::create( $input );

        Session::flash('flash_message', 'Driver created successfully!');
 
        return Redirect::route('driver.index')->with('Driver created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  Driver $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        return view('driver.show', compact('driver'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Driver $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        return view('driver.edit', compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Driver $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        $input = array_except(Input::all(), '_method');
        $driver->update($input);

        Session::flash('flash_message', 'Driver updated successfully!');
 
        return Redirect::route('driver.index')->with('message', 'Driver updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Driver $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        $driver->delete();

        Session::flash('flash_message', 'Driver deleted successfully!');

        return Redirect::route('driver.index')->with('message', 'Driver deleted.');
    }
}
