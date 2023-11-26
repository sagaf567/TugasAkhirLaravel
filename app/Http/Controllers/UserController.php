<?php

namespace App\Http\Controllers;

//import Model "Admin"
use App\Models\Admin;

//return type view
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

//return type redirectRespon
use Illuminate\Http\RedirectResponse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function index(): View
    {
        //get admins
        $admins = Admin::latest()->paginate(5);

        //render view with admins
        return view('admins.user.index', compact('admins'));
    }
    public function show(string $id): View
{
//get post by ID
$admins = Admin::findOrFail($id);
//render view with post

return view('admins.user.show', compact('admins'));
}
}