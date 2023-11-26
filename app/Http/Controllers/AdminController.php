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
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * index
     * 
     * @return View
     */
    public function index(): View
    {
        //get admins
        $admins = Admin::latest()->paginate(15);

        //render view with admins
        return view('admins.index', compact('admins'));
    }

    /** * create * * @return View */
    public function create(): View
    {
        return view('admins.create');
    }
    /** * store * * @param mixed $request * @return RedirectResponse */
    public function store(Request $request): RedirectResponse
    {

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);
        //upload image 
        $image = $request->file('image');
        $image->storeAs('public/admins', $image->hashName());
        //create Admin 
        Admin::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content
        ]);
        //redirect to index
        return redirect()->route('admins.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
/**
* show
*
* @param mixed $id
* @return View
*/
public function show(string $id): View
{
//get post by ID
$admins = Admin::findOrFail($id);
//render view with post

return view('admins.show', compact('admins'));
}
/**
* edit
*
* @param mixed $id
* @return View
*/
public function edit(string $id): View
{
//get post by ID
$post = Admin::findOrFail($id);
//render view with post
return view('admins.edit', compact('post'));
}
/**
* update
*
* @param mixed $request
* @param mixed $id
* @return RedirectResponse
*/
public function update(Request $request, $id): RedirectResponse
{
    //validate form
    $this->validate($request, [
    'image' => 'image|mimes:jpeg,jpg,png|max:2048',
    'title' => 'required|min:5',
    'content' => 'required|min:10'
    ]);
    //get post by ID
    $post = Admin::findOrFail($id);
    //check if image is uploaded
    if ($request->hasFile('image')) {
    //upload new image
    $image = $request->file('image');
    $image->storeAs('public/admins', $image->hashName());
    //delete old image
    Storage::delete('public/admins/'.$post->image);
    //update post with new image
    $post->update([
    'image' => $image->hashName(),
    'title' => $request->title,
    'content' => $request->content
    ]);
    } else {
    //update post without image
    $post->update([
    'title' => $request->title,
    'content' => $request->content
    ]);
    }
    //redirect to index
    return redirect()->route('admins.index')->with(['success' => 'Data 
    Berhasil Diubah!']);
    }
    /**
* destroy
*
* @param mixed $post
* @return void
*/
public function destroy($id): RedirectResponse
{
//get post by ID
$post = Admin::findOrFail($id);
//delete image
Storage::delete('public/admins/'. $post->image);
//delete post
$post->delete();
//redirect to index
return redirect()->route('admins.index')->with(['success' => 'Data 
Berhasil Dihapus!']);

    }

    public function search(Request $request) {
        $search = $request->search;

        $admins = DB::table('admins')
        ->where('title','like',"%".$search."%")
        ->paginate();

        return view('admins.index',compact('admins'));
    }
    
}
    