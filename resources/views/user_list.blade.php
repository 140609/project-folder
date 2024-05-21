<!-- resources/views/user_list.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
</head>
<body>
    <h2>User List</h2>
    <table id="userTable">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <!-- User data will be loaded dynamically using DataTables -->
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#userTable').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('users.data') }}",
                "columns": [
                    { "data": "first_name" },
                    { "data": "last_name" },
                    { "data": "email" }
                ]
            });
        });
    </script>
</body>
</html>

