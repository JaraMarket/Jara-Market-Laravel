<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\customerSignupRequest;
use App\Models\API\Customer;
use Hash


class CustomerController extends Controller
{
    public function Customer_signUp(customerSignupRequest $request)
    {

// Create the user
$user = Customer::create([
    'name' => $request->name,
    'email' => $request->email,
    'password' => Hash::make($request->password),
]);

// Return success response
return response()->json([
    'message' => 'User registered successfully.',
    'user' => $user
], 201);

    }
}
