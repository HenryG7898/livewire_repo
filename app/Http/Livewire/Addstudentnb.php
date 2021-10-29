<?php

namespace App\Http\Livewire;

use App\Models\Phone_number;
use App\Models\Student;
use Livewire\Component;

class Addstudentnb extends Component
{

    public $student_id, $Phone_nb;

    protected $rules = [
        'student_id' => 'required',
        'Phone_nb' => 'required',
    ];

    public function mount(){
        $studs = Student::all();
        $this->studs = $studs;
    }

    public function addstudentnb(){
        $this->validate();

        Phone_number::create([
            'student_id' => $this->student_id,
            'phone_nb' => $this->Phone_nb,

        ]);
        session()->flash('message','Student Phone Number has added successful');
    }

    public function render()
    {
        return view('livewire.addstudentnb');
    }
}
