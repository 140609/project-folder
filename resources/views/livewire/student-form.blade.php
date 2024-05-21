<div>
    <form wire:submit.prevent="submit">
        <div>
            <label for="name">Name</label>
            <input type="text" wire:model="name" id="name">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" wire:model="email" id="email">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="phone">Phone</label>
            <input type="text" wire:model="phone" id="phone">
            @error('phone') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="college_name">College Name</label>
            <input type="text" wire:model="college_name" id="college_name">
            @error('college_name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="enrollment_id">Enrollment ID</label>
            <input type="text" wire:model="enrollment_id" id="enrollment_id">
            @error('enrollment_id') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="photo">Photo</label>
            <input type="file" wire:model="photo" id="photo">
        </div>

        @foreach ($subjects as $index => $subject)
            <div>
                <label for="subject_name_{{ $index }}">Subject Name</label>
                <input type="text" wire:model="subjects.{{ $index }}.name" id="subject_name_{{ $index }}">
                @error('subjects.' . $index . '.name') <span class="error">{{ $message }}</span> @enderror

                <label for="subject_marks_{{ $index }}">Marks Obtained</label>
                <input type="text" wire:model="subjects.{{ $index }}.marks_obtained" id="subject_marks_{{ $index }}">
                @error('subjects.' . $index . '.marks_obtained') <span class="error">{{ $message }}</span> @enderror
            </div>
        @endforeach

        <button type="button" wire:click="addSubject">Add Subject</button>

        <div>
            <label for="total">Total</label>
            <input type="text" wire:model="total" id="total" readonly>
        </div>
        <div>
            <label for="percentage">Percentage</label>
            <input type="text" wire:model="percentage" id="percentage" readonly>
        </div>
        <div>
            <label for="grade">Grade</label>
            <input type="text" wire:model="grade" id="grade" readonly>
        </div>

        <button type="submit">Submit</button>
    </form>

    @if (session()->has('message'))
        <div>{{ session('message') }}</div>
    @endif
</div>
