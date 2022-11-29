<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use Alaouy\Youtube\Facades\Youtube;
use Vedmant\FeedReader\Facades\FeedReader;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $newEvents = Post::where('status',1)
                        ->where('category_id',1)
                        ->limit(3)
                        ->orderBy('created_at', 'asc')
                        ->get();
        return view('home.index',['newEvents' => $newEvents]);
    }

    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }
}
