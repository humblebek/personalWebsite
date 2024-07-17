<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Project;
use App\Models\Quote;
use App\Models\Resume;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Statistic;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function index()
    {
        $skill = Skill::all();
        $statistic = Statistic::all();
        $quote = Quote::all();
        $resume = Resume::all();
        $about = About::all();
        $service = Service::all();
        $project = Project::all();
        return view('welcome',compact('about','resume','quote','skill','service','project','statistic'));
    }

}
