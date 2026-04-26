<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $data['skills'] = Skill::query()->select('name', 'icon', 'level', 'order')->orderBy('order', 'asc')->get();
        return view('home', $data);
    }
}
