<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
 
class Login extends Component
{   
    public $email, $pass;
 
    public function render() 
    {
        return view('livewire.auth.login');
    }

    protected $messages = [
        'required' => 'Este campo es obligatorio.',
        'email' => 'Formato de correo no invalido.',
    ];

    public function updatedEmail(){
        $this->validate([
            'email' => 'required|email'
        ]);
    }

    public function updatedPass(){
        $this->validate([
            'pass' => 'required'
        ]);
    }
}
