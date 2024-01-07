<?php

namespace App\Livewire\Home\Jobs;
use LivewireUI\Modal\ModalComponent;

use Livewire\Component;

class LoginModal extends ModalComponent
{
    public $alert;
    public $is_login = true;
    public $email;
    public $password;
    public $remeber_me;
    protected function getListeners()
    {
        return [
            // 'delete_monitor' => 'deleteMonitor',
            // 'update_monitor' => 'updateMonitor',
            // 'select_province' => 'selectProvince',
            'login_first' => 'mustLogin',
           
        ];
    }

    public function mustLogin(){
        $this->is_login =  false;
        $this->alert="Must Login First";
        // $this->js("alert('Post saved!')"); 
    
        
        // $this->js("$('#login').find('.alert').removeClass('d-none')"); 
        $this->js("$('#login').find('.alert').text('".$this->alert."')"); 

        $this->js("$('#modal_open').click()"); 
        // dd($this->is_login, $this->alert);


       
    }
    public function update_login(){
     
        $this->js("$('#login').find('.alert').text('')"); 
        $this->reset();
        $this->render();
    }

    public function authenticate(){
        
    }
    public function mount()
    {
        $this->alert;
        $this->is_login = true;
 
        // $this->email = Auth::user()->email;
    }
    public function render()
    {
        return view('livewire.home.jobs.login-modal');
    }

    public function hydrate()
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }
}
