<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
#[Layout('layouts.auth')]
class ForgetPassword extends Component
{
    public function render()
    {
        return view('livewire.auth.forget-password')
                ->title(__('auth.forget_password'));
    }
}
