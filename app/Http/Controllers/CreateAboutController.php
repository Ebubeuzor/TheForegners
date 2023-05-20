<?php

namespace App\Http\Controllers;

use App\Models\CreateAbout;
use Illuminate\Http\Request;

class CreateAboutController extends Controller
{
    
    public function store(Request $request)
    {
        $inputs = $request->validate([
            'image' => ['required', 'file'],
            'content' => ['required', 'string','max:255'],
        ]);

        
        $file = $request->file('image');
        $imageName = $file->getClientOriginalName();
        $file->move('images/create_about',$imageName);

        $createAbout = new CreateAbout();
        $createAbout->image = 'images/create_about' . $imageName;
        $createAbout->content = $request['content'];

        if ($createAbout->save()) {
            return redirect('/admin/dashboard');
        }else {
            return back();
        }
    }

    
    public function edit($id)
    {

        $about = CreateAbout::findOrFail($id);
        
        return view('admin.edit-about',[
            'about' => $about
        ]);
    }

    public function update($id, Request $request)
    {

        $request->validate([
            'image' => ['required', 'file'],
            'content' => ['required', 'string','max:255'],
        ]);

        $createAbout = CreateAbout::findOrFail($id);
        if (request('image')) {
            $file = $request->file('image');
            $imageName = $file->getClientOriginalName();
            $file->move('images/create_news',$imageName);
            $createAbout->image = 'images/create_event' . $imageName;
        }

        $createAbout->content = $request['content'];

        if ($createAbout->update()) {
            return redirect('/admin/dashboard');
        }else {
            return back();
        }
    }

    public function delete($id)
    {
        $about = CreateAbout::findOrFail($id);
        $about->delete();
        return back();
    }
}
