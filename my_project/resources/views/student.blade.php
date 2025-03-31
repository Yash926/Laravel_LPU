<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Students from my Database</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->Id }}</td>
                <td>{{ $student->Name }}</td>
                <td>{{ $student->Age }}</td>
                <td>{{ $student->Email }}</td>
            </tr>
            @endforeach
            <tr>
                 <td> Age Sum :{{$student->sum('age')}}
            </tr>
    </table>
</body>
</html>