<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table,
        tr,
        th {
            border: 2px solid;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1>welcome Student Index</h1>

    <!-- <pre>
    {{$students}}
    </pre> -->

    <!-- {{$students}} -->

    <!-- @foreach ($students as $student)
    {{$students}}
    <br>

    @endforeach -->
    <!-- 
    @foreach ($students as $student)
    {{$student}}
    <br>

    @endforeach -->


    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Created Date</th>
            <th>Updated Date</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <th>{{$student->id}}</th>
            <th>{{$student->first_name}}</th>
            <th>{{$student->last_name}}</th>
            <th>{{$student->created_at}}</th>
            <th>{{$student->updated_at}}</th>
        </tr>
        @endforeach
    </table>


    <!-- @foreach ($students as $student)

    {{$student->id}}
    {{$student->first_name}}
    {{$student->last_name}}
    {{$student->created_at}}
    {{$student->updated_at}}
    <br>

    @endforeach -->

</body>

</html>