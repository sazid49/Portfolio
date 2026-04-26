<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('tags')->latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $project = Project::create($request->only(['title', 'description', 'icon']));

        // Tags (comma separated input)
        if ($request->tags) {
            foreach (explode(',', $request->tags) as $tag) {
                $project->tags()->create([
                    'tag' => trim($tag)
                ]);
            }
        }

        return redirect()->route('projects.index');
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
    public function edit(Project $project)
    {
        $tags = $project->tags->pluck('tag')->implode(',');
        return view('admin.projects.edit', compact('project', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $project->update($request->only(['title', 'description', 'icon']));

        // Update tags
        $project->tags()->delete();

        if ($request->tags) {
            foreach (explode(',', $request->tags) as $tag) {
                $project->tags()->create([
                    'tag' => trim($tag)
                ]);
            }
        }

        return redirect()->route('projects.index')->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return back()->with('success', 'Deleted');
    }
}
