<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::latest()->get();
        return view('admin.profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'email'       => 'nullable|email',
            'phone'       => 'nullable|string|max:50',
            'location'    => 'nullable|string|max:255',
            'cv_file'     => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('profiles', 'public');
        }

        if ($request->hasFile('cv_file')) {
            $data['cv_file'] = $request->file('cv_file')->store('cv', 'public');
        }

        Profile::create($data);

        return redirect()->route('profiles.index')->with('success', 'Profile created');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        return view('admin.profiles.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'email'       => 'nullable|email',
            'phone'       => 'nullable|string|max:50',
            'location'    => 'nullable|string|max:255',
            'cv_file'     => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ]);

        if ($request->hasFile('image')) {
            if ($profile->image) {
                Storage::disk('public')->delete($profile->image);
            }
            $data['image'] = $request->file('image')->store('profiles', 'public');
        }

        if ($request->hasFile('cv_file')) {

            if ($profile->cv_file) {
                Storage::disk('public')->delete($profile->cv_file);
            }

            $file = $request->file('cv_file');

            $fileName = $file->getClientOriginalName(); // avoid duplicate name issues

            $data['cv_file'] = $file->storeAs('cv', $fileName, 'public');
        }

        $profile->update($data);

        return redirect()->route('profiles.index')->with('success', 'Profile updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        if ($profile->image) {
            Storage::disk('public')->delete($profile->image);
        }
        if ($profile->cv_file) {
            Storage::disk('public')->delete($profile->cv_file);
        }

        $profile->delete();

        return back()->with('success', 'Deleted');
    }
}
