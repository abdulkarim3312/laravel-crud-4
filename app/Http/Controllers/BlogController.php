<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;

use function Spatie\Ignition\ErrorPage\title;

class BlogController extends Controller
{
    public $blog;

    public function index()
    {
        return view('blog.index');
    }

    public function add()
    {
        return view('blog.add');
    }

    public function manage()
    {
        return view('blog.manage');
    }

    public function create(Request $request)
    {
//        $this->blog                 = new Blog();
//        $this->blog->title          = $request->title;
//        $this->blog->author         = $request->author;
//        $this->blog->description    = $request->description;
//        $this->blog->image          = $request->image;
//        $this->blog->save();

        DB::table('blogs')->insert([
                 'title'        => $request->title,
                 'author'       => $request->author,
                 'description'  => $request->description,
                 'image'        => $request->image,
        ]);
        return redirect('/add-blog')->with('message', 'Blog info created successfully.');
    }
}
