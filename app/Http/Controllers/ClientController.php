<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function create() {
        return view('client-form');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'company_logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('company_logo')) {
            $fileName = time().'.'.$request->company_logo->extension();  
            $request->company_logo->move(public_path('uploads'), $fileName);
            $validatedData['company_logo'] = $fileName;
        }

        // Save the client data to the database
        // Client::create($validatedData);

        return redirect()->route('clients.add')->with('status', 'Client created successfully!');
    }
}
