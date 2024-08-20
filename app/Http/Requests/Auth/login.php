<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $user_type = $request->input('user_type');

        if (empty($email) || empty($password)) {
            return response()->json(['message' => 'All fields are required'], 400);
        } elseif ($email == '') {
            return response()->json(['message' => 'Email field is required'], 400);
        } elseif ($password == '') {
            return response()->json(['message' => 'Password field is required'], 400);
        }

        // Validate credentials based on user_type
        if ($user_type == 'user') {
            $user = DB::table('essential_direct_user_data')
                        ->where('email', $email)
                        ->where('password', sha1($password))
                        ->where('is_verified', 1)
                        ->first();

            if ($user) {
                Session::put('id', $user->id);
                Session::put('email', $user->email);
                Session::put('name', $user->name);
                Session::put('location', $user->bank_details);
                Session::put('phone', $user->phone_number);
                Session::put('date', $user->created_at);
                Session::put('image', public_path($user->image_path));

                return response()->json(['message' => 'Login successful'], 200);
            } else {
                return response()->json(['message' => 'Incorrect login details'], 400);
            }
        } elseif ($user_type == 'business') {
            $business = DB::table('essential_direct_business_models')
                            ->where('business_email', $email)
                            ->where('business_password', sha1($password))
                            ->where('verified', 1)
                            ->first();

            if ($business) {
                Session::put('business_id', $business->id);
                Session::put('business_email', $business->business_email);
                Session::put('business_name', $business->full_name);
                Session::put('business_date', $business->date);
                Session::put('business_image', public_path($business->image_path));
                Session::put('business_contact', $business->phone_number);
                Session::put('business_address', $business->address);

                return response()->json(['message' => 'Login successful'], 200);
            } else {
                return response()->json(['message' => 'Incorrect login details'], 400);
            }
        }

        return response()->json(['message' => 'Invalid user_type'], 400);
    }
}
?>