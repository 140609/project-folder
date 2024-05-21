<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentTable extends Component
{
    public $students;

    public function mount()
    {
        $this->students = Student::with('subjects')->get();
    }

    public function render()
    {
        return view('livewire.student-table', ['students' => $this->students]);
    }
}

