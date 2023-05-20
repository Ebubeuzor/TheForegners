<?php

namespace App\Http\Controllers;

use App\Models\CreateEvent;
use Illuminate\Http\Request;

class CreateEventController extends Controller
{
    
    public function store(Request $request)
    {
        $request->validate([
            'header' => ['required', 'string','max:255'],
            'category' => 'required|in:Music,Fashion,Sports,Events',
            'image' => ['required', 'file'],
            'content' => ['required', 'string','max:255'],
        ]);

        
        $file = $request->file('image');
        $imageName = $file->getClientOriginalName();
        $file->move('images/create_event',$imageName);

        $createEvent = new CreateEvent();
        $createEvent->header = $request['header'];
        $createEvent->category = $request['category'];
        $createEvent->image = 'images/create_event' . $imageName;
        $createEvent->content = $request['content'];

        if ($createEvent->save()) {
            return redirect('/admin/dashboard');
        }else {
            return back();
        }
    }

    public function index()
    {
        $events = CreateEvent::all();
        return view('pages.tickets',['events' => $events]);
    }

    
    
    public function edit($id)
    {

        $event = CreateEvent::findOrFail($id);
        
        return view('admin.edit-events',[
            'event' => $event
        ]);
    }

    public function update($id, Request $request)
    {

        $request->validate([
            'header' => ['required', 'string','max:255'],
            'category' => 'required|in:Music,Fashion,Sports,Events',
            'image' => ['file'],
            'content' => ['required', 'string','max:255'],
        ]);

        $createevent = CreateEvent::findOrFail($id);
        if (request('image')) {
            $file = $request->file('image');
            $imageName = $file->getClientOriginalName();
            $file->move('images/create_news',$imageName);
            $createevent->image = 'images/create_event' . $imageName;
        }

        $createevent->header = $request['header'];
        $createevent->category = $request['category'];
        $createevent->content = $request['content'];

        if ($createevent->update()) {
            return redirect('/admin/dashboard');
        }else {
            return back();
        }
    }

    public function delete($id)
    {
        $event = CreateEvent::findOrFail($id);
        $event->delete();
        return back();
    }
}
