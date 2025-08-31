<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ], [
                'email.required' => 'Email address is required',
                'email.email' => 'Please enter a valid email address',
                'password.required' => 'Password is required',
            ]);

            $credentials = $request->only('email', 'password');
            
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                
                if (Auth::user()->is_admin) {
                    return redirect()->route('admin.dashboard')
                        ->with('success', 'Welcome to dashboard! You have successfully logged in.');
                }
                
                Auth::logout();
                return redirect()->back()
                    ->with('error', 'You do not have permission to access the admin area.');
            }

            return redirect()->back()
                ->with('error', 'Invalid login credentials. Please try again.')
                ->withInput($request->except('password'));

        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput($request->except('password'));
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'An error occurred while logging in. Please try again.')
                ->withInput($request->except('password'));
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('admin.login')
            ->with('success', 'You have been successfully logged out.');
    }
}
