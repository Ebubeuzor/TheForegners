<?php

namespace App\Http\Controllers;

use App\Models\CreateNews;
use Illuminate\Http\Request;

class CreateNewsController extends Controller
{
     
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string','max:255'],
            'category' => 'required|in:Music,Fashion,Sports,Events',
            'header' => ['required', 'string','max:255'],
            'image' => ['required', 'file'],
            'content' => ['required', 'string','max:255'],
        ]);

        
        $file = $request->file('image');
        $imageName = $file->getClientOriginalName();
        $file->move('images/create_news',$imageName);

        $createNews = new CreateNews();
        $createNews->title = $request['title'];
        $createNews->category = $request['category'];
        $createNews->header = $request['header'];
        $createNews->image = 'images/create_event' . $imageName;
        $createNews->content = $request['content'];

        if ($createNews->save()) {
            return redirect('/admin/dashboard');
        }else {
            return back();
        }
    }

    public function index()
    {
        $cnews = CreateNews::all();
        $randomRow = CreateNews::inRandomOrder()->first();
        return view('pages.news',[
            'cnews' => $cnews,
            'randomRow' => $randomRow
        ]);
    }

    public function edit($id)
    {

        $news = CreateNews::findOrFail($id);
        
        return view('admin.edit-news',[
            'news' => $news
        ]);
    }

    public function update($id, Request $request)
    {

        $request->validate([
            'title' => ['required', 'string','max:255'],
            'category' => 'required|in:Music,Fashion,Sports,Events',
            'header' => ['required', 'string','max:255'],
            'image' => ['file'],
            'content' => ['required', 'string','max:255'],
        ]);

        $createNews = CreateNews::findOrFail($id);
        if (request('image')) {
            $file = $request->file('image');
            $imageName = $file->getClientOriginalName();
            $file->move('images/create_news',$imageName);
            $createNews->image = 'images/create_event' . $imageName;
        }

        $createNews->title = $request['title'];
        $createNews->category = $request['category'];
        $createNews->header = $request['header'];
        $createNews->content = $request['content'];

        if ($createNews->update()) {
            return redirect('/admin/dashboard');
        }else {
            return back();
        }
    }

    public function delete($id)
    {
        $news = CreateNews::findOrFail($id);
        $news->delete();
        return back();
    }
}
