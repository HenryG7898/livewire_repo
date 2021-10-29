<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;
class Dashboard extends Component
{
//    public $post;

    use WithPagination;
    public $data;
    public $First_nm;
    public $studs;
    public function render()
    {

        return view('livewire.dashboard', [
            'studs' => Student::paginate(3),
        ]);
    }

    public function mount(){
        $studs = Student::all();
        $this->studs = $studs;
//        dd($stud);
    }

    public function editStudent(Student $item){
        $stud =  Student::find($item);
//        $data = $stud->find($item);
//        $this->First_nm = $stud->First_nm;
//        dd($id);
        return redirect('updatestudent',compact('stud'));

    }
}
