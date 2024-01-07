<?php

namespace App\Livewire\Home\Jobs;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateForm extends Component
{

    public $title;
    public $skills;
    public $est_time;
    public $pay_rate;
    public $job_description;

    protected $rules = [
        'title' => 'required|string',
        'skills' => 'required|string',
        'est_time' => 'required|string',
        'pay_rate' => 'required|string',
        'job_description' => 'required|string',
     
    ];

    public function createJob(){

        $data =[
            'title'=>$this->title,
            'skills'=>$this->skills,
            'est_time'=>$this->est_time,
            'pay_rate'=>$this->pay_rate,
            'job_description'=>$this->job_description,
        ];
        // $this->middleware('auth');
        if (Auth::check()) {
            $this->validate();
        } else {
            $this->dispatch('login_first');
        }
        
     

      
    }
    public function render()
    {
        return view('livewire.home.jobs.create-form');
    }

     

    public function hydrate()
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }
}
