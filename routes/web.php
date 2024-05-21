<?php

use App\Http\Livewire\StudentForm;
use App\Http\Livewire\StudentTable;

Route::get('/students', StudentTable::class)->name('students.index');
Route::get('/students/create', StudentForm::class)->name('students.create');
