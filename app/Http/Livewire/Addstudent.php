<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class Addstudent extends Component
{
    public $First_nm, $Last_nm, $DOB;
    public function render()
    {
        return view('livewire.addstudent');
    }

    protected $rules = [
        'First_nm' => 'required',
        'Last_nm' => 'required',
        'DOB' => 'required',
    ];

    public function store(){
        $this->validate();

        Student::create([
            'First_nm' => $this->First_nm,
            'Last_nm' => $this->Last_nm,
            'DOB' => $this->DOB,
        ]);
        session()->flash('message','Student has added successful');
    }
}
