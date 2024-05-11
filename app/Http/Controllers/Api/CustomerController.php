<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function register(Request $request)
    {
        $request->validate([
            'telegram_id' => 'required|string|unique:customers,telegram_id',
            'username' => 'string|unique:customers,username',
        ]);

        $user = Customer::firstOrCreate([
            'telegram_id' => $request->telegram_id,
            'username' => $request->username,
        ]);

        return response()->json(['user' => $user], 201);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}
