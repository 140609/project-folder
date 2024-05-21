<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentForm extends Component
{
    public $name, $email, $phone, $college_name, $enrollment_id, $photo;
    public $subjects = [];
    public $total = 0;
    public $percentage = 0;
    public $grade = 'F';

    protected $rules = [
        'name' => 'required|regex:/^[a-zA-Z\s]+$/',
        'email' => 'required|email|unique:students,email',
        'phone' => 'required|regex:/^\d{3} \d{3} \d{4}$/',
        'college_name' => 'required',
        'enrollment_id' => 'required|unique:students,enrollment_id',
        'subjects.*.name' => 'required',
        'subjects.*.marks_obtained' => 'required|integer|min:0|max:100',
    ];

    public function addSubject()
    {
        $this->subjects[] = ['name' => '', 'marks_obtained' => 0];
    }

    public function calculateTotalAndPercentage()
    {
        $this->total = array_sum(array_column($this->subjects, 'marks_obtained'));
        $this->percentage = $this->total / count($this->subjects);
        $this->grade = $this->calculateGrade($this->percentage);
    }

    public function calculateGrade($percentage)
    {
        if ($percentage >= 90) {
            return 'A+';
        } elseif ($percentage >= 80) {
            return 'A';
        } elseif ($percentage >= 70) {
            return 'B+';
        } elseif ($percentage >= 60) {
            return 'B';
        } elseif ($percentage >= 50) {
            return 'C';
        } else {
            return 'F';
        }
    }

    public function submit()
    {
        $this->validate();
        $this->calculateTotalAndPercentage();

        $student = Student::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'college_name' => $this->college_name,
            'enrollment_id' => $this->enrollment_id,
            'total' => $this->total,
            'percentage' => $this->percentage,
            'grade' => $this->grade,
        ]);

        foreach ($this->subjects as $subject) {
            $student->subjects()->create($subject);
        }

        session()->flash('message', 'Student added successfully.');
    }

    public function render()
    {
        return view('livewire.student-form');
    }
}

