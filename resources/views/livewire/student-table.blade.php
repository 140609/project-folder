<div>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>College Name</th>
                <th>Total</th>
                <th>Percentage</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $index => $student)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->college_name }}</td>
                    <td>{{ $student->total }}</td>
                    <td>{{ $student->percentage }}%</td>
                    <td>{{ $student->grade }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
