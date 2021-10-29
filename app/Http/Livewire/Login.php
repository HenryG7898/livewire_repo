<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Auth;
//use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Login extends Component
{
//    public $vaild;
    public $email, $password;

    public function render()
    {
        return view('livewire.login');
    }

    public function onLogin(){

        $vaild = $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
//        return 'hello';
        if(Auth::attempt([
                 'email' => $this->email,
                 'password' => $this->password
            ])){
            session()->flash('message','Logged in successfully');
        }else{
            session()->flash('error','Login failed');
        }

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
