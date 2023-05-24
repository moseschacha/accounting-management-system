<?php

namespace App\Http\Controllers;

use App\Models\Payable;
use Illuminate\Http\Request;

class PayablesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all payables from the database
        $payables = Payable::all();
        
        // Pass the payables data to the view
        return view('payables.index', compact('payables')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Display the create payables form
        return view('payables.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the form data
    $validatedData = $request->validate([
        'vendor_name' => 'required', // Add this line to require the vendor_name field
        'vendor_address' => 'required',
        'vendor_phone_number' => 'required',
        'vendor_invoice' => 'required',
        'due_date' => 'required',
        'payment_terms' => 'required',
    ]);

    // Create a new Payable instance and fill it with the validated form data
    $payable = new Payable();
    $payable->fill($validatedData);
    $payable->save();

    return redirect('/payables');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Retrieve the specified payable from the database and display it
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Display the edit form for the specified payable
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the form data and update the specified payable in the database
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Delete the specified payable from the database
    }
}
