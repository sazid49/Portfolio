<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $data['skills'] = Skill::query()->select('name', 'icon', 'level', 'order')->orderBy('order', 'asc')->get();
        $data['projects'] = Project::query()->with('tags')->get();
        $data['experiences'] = Experience::query()->select(['title', 'company', 'subtitle', 'duration', 'description'])->orderBy('id', 'desc')->get();
        $data['testimonials'] = Testimonial::query()->select(['name', 'designation', 'company', 'message', 'avatar', 'rating'])->orderBy('id', 'desc')->get();
        $data['profile'] = Profile::latest()->first();
        return view('frontend.home', $data);
    }
}
