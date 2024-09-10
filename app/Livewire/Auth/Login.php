<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
#[Layout('layouts.auth')]
class Login extends Component
{

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required')]
    public $password = '';

    public $remember = false;

    public function login()
    {
        $this->validate();
        //check login
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            return redirect()->intended(route('dashboard'));
        } else {
            session()->flash('error', 'Invalid email or password');
        }

    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
