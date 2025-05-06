<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectStore;
use App\Models\Game;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LkController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('lk.home');
    }

    public function myProject()
    {
        $projects = Project::where('user_id', '=', Auth::user()->id)->orderBy('title', 'DESC')->get();

        return view('lk.myProject')->with(compact('projects'));
    }

    public function myProjectCreate()
    {
        $games = Game::where('in_rating', '=', 1)->orderBy('name', 'ASC')->get();

        return view('lk.myProjectCreate')->with(compact('games'));
    }

    public function myProjectStore(ProjectStore $request)
    {
        $project = new Project();
        $project->title = $request->title;
        $project->user_id = Auth::user()->id;
        $project->game_id = $request->game_id;
        $project->text = $request->text;

        $project->site_url = $request->site_url;
        $project->vk_url = $request->vk_url;
        $project->fb_url = $request->fb_url;
        $project->twit_url = $request->twit_url;
        $project->youtube_url = $request->youtube_url;
        $project->save();
        if ($project->id) {
            $directory = 'projects/' . $project->id;
            mkdir($directory, 0700);
        }

        return redirect()->route('lk.myProject');
    }

    public function myProjectEdit($id)
    {
        $project = Project::findOrFail($id);

        $games = Game::where('in_rating', '=', 1)->orderBy('name', 'ASC')->get();
        return view('lk.myProjectEdit')->with(compact('games', 'project'));
    }
}
