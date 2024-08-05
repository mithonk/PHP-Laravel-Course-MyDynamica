<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href= "{{asset('css/style.css')}}" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <table border="1" width="100%">
        <tr height="100" style="background-color: #cbc;">
            <td colspan="2">Header</td>
        </tr>
        <tr height="400">
            <td width="20%">
                <x-nav />
            </td>
            <td>
                <!-- {{request()->is('/')}} -->
                <!-- {{request()->host('')}} -->
                <!-- {{true}} -->

                {{-- {{request()->host('')}} --}}
                <br />
                {{-- {{request()->httpHost('')}} --}}
                <br />
                {{-- {{request()->schemeAndHttpHost('')}} --}}
                {{$slot}}
            </td>
        </tr>
        <tr height="100" style="background-color: #ccc;">
            <td colspan="2">Footer</td>
        </tr>
    </table>
</body>

</html>