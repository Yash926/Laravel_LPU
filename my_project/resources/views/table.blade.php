<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Multiplication Table</h2>
        <table>
            <tr>
                <th colspan="2">Table of {{ $number }}</th>
            </tr>
            @for($i = 1; $i <= 10; $i++)
                <tr>
                    <td>{{ $number }} × {{ $i }}</td>
                    <td>{{ $number * $i }}</td>
                </tr>
            @endfor
        </table>
</body>
</html>