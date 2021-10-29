<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class Editstudent extends Component
{
    public $data;
    public $stud;
    public function render()
    {
        return view('livewire.editstudent');
    }

    public function mount(){
//        $data = Student::all('id',$item);
//        $this->First_nm = $item->First_nm;
    }

    public function update(){

        Student::update([

        ]);
    }
}
