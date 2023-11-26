<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use function Laravel\Prompts\password;

class LoginController extends Controller
{
    // Display the login form
    public function index()
    {
        return view('auth.login'); // Create the login form view
    }

    // Handle the login process
    public function login(Request $request)
    {
        // Validate the login data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // Attempt to log the user in
        if (Auth::attempt( $data )) {
            // Authentication was successful
            return redirect()->route('admins.index')->with('success','Berhasil Login'); // Redirect to the intended page
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success','Kamu Berhasil Logout');
    }
    public function register(){
        return view('auth.register');
    }
    public function register_proses(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ]);

    $data['name'] = $request->nama;
    $data['email'] = $request->email;
    $data['password'] = Hash::make($request->password);

    User::create($data); // Use create method to add the user to the database

    $login = [
        'email' => $request->email,
        'password' => $request->password
    ];

    // Attempt to log the user in
    if (Auth::attempt($login)) {
        // Authentication was successful
        return redirect()->route('admins.index')->with('success', 'Berhasil Login');
    } else {
        return redirect()->route('login')->with('failed', 'Email atau Password Salah');
    }
}

}