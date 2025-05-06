<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LkController;
use App\Models\Game;
use App\Models\Project;
use App\Models\News;
use App\Models\Announce;
use App\Core\Tools\CheckText;

$dataArray = [
    ".01." => "января",
    ".02." => "февраля",
    ".03." => "марта",
    ".04." => "апреля",
    ".05." => "мая",
    ".06." => "июня",
    ".07." => "июля",
    ".08." => "августа",
    ".09." => "сентября",
    ".10." => "октября",
    ".11." => "ноября",
    ".12." => "декабря"
];

Auth::routes();

Route::get('/', function () {
    return view('main');
})->name('home');

Route::prefix('lk')->group(function () {
    Route::get('/', [LkController::class, 'index'])->name('lk.home');
    Route::get('/my-project', [LkController::class, 'myProject'])->name('lk.myProject');
    Route::get('/my-project/{id}/edit', [LkController::class, 'myProjectEdit'])->name('lk.myProject.edit');
    Route::get('/my-project/create', [LkController::class, 'myProjectCreate'])->name('lk.myProject.create');
    Route::post('/my-project/', [LkController::class, 'myProjectStore'])->name('lk.myProject.store');
});

Route::get('/category/', function () {
    return view('project.category-all');
})->name('category');

Route::get('/category/{slug}', function ($slug) {
    return view('project.category')->with([
        'data' => Game::where('slug', $slug)->first(),
    ]);
})->name('category-game');

Route::get('/project_id/{id}', function ($id) {
    $data = Project::CheckAndAddViewed($id);
    if (empty($data)) {
        return view('404.404')->with(['url' => $id]);
    }
    return view('project.project-index')->with(['data' => $data]);
})->name('project-view');

Route::get('/project_id/{id}/vote', function ($id) {
    $data = Project::CheckAndAddViewed($id);
    if (empty($data)) {
        return view('404.404')->with(['url' => $id]);
    }
    return view('project.project-vote')->with(['data' => $data]);
})->name('project-vote');

Route::get('/link/{id}', function ($id) {
    $data = Project::find($id);
    if (!empty($data)) {
        $data->link_out++;
        $data->save();
        return redirect()->away(CheckText::containsUrl($data->site_url));
    }
    return back();
})->name('redirect-link');

Route::get('/advices/', function () {
    return view('advices');
})->name('advices');

Route::get('news', function () {
    $data = News::paginate(15);
    return view('news.list')->with(['data' => $data]);
})->name('news');

Route::get('/news_id/{id}', function ($id) {
    $data = News::find($id);
    if (empty($data)) {
        return view('404.404')->with(['url' => $id]);
    }
    $data->viewed++;
    $data->save();
    return view('news.show')->with(['data' => $data]);
})->name('news_show');

Route::get('review', function () {
    $data = News::paginate(15);
    return view('review.list')->with(['data' => $data]);
})->name('review');

Route::get('/announces/{url}', function ($url) {
    $game = Game::where('to_url', $url)->first();
    if (empty($game)) {
        $game = Game::where('to_url', 'lineage-2')->first();
    }
    $data = Announce::where('game_id', $game->id)->get();
    $left = $right = [];

    foreach ($data as $d) {
        if ($d->date >= time()) {
            $left[] = $d;
        } else {
            $right[] = $d;
        }
    }

    return view('announces.list')->with([
        'left' => $left,
        'right' => $right,
        'game' => $game,
        'url' => $url
    ]);
})->name('announces');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
