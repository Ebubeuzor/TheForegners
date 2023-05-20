<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();

        return view('admin.users',[ 'users' => $users ]);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'instagram_url' => ['required', 'string', 'max:255'],
            'dobDay' => ['required', 'numeric', 'between:1,30'],
            'dobMonth' => ['required', 'numeric', 'between:1,12'],
        ]);

        $dob = $request['dobDay'] . "/" . $request['dobMonth']  . "/" . $request['dobYear'];

        $users = new User();

        $users->name = $request['name'];
        $users->email = $request['email'];
        $users->instagram_url = $request['instagram_url'];
        $users->{'date-of-birth'} = $dob;

        if ($users->save()) {
            return redirect('/');
        }else {
            return back();
        }
    }



    public function update(User $user)
    {
        request()->validate([
            'username' => ['required' , 'string' , 'max:255', 'alpha_dash'],
            'name' => ['required','string','max:255'],
            'email' =>['required','email','max:255'],
            'userAvatar' => ['file'],
            'password' => ['min:6','max:255','confirmed']
        ]);

        $user->create([

        ]);

        return back();
    }

    public function destroy(User $user)
    {
        $user->delete();

        session()->flash('deleted-user',"User has been deleted");

        return back();
    }
}
