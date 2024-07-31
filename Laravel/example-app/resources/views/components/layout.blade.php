<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

                {{request()->host('')}}
                <br />
                {{request()->httpHost('')}}
                <br />
                {{request()->schemeAndHttpHost('')}}
                {{$slot}}
            </td>
        </tr>
        <tr height="100" style="background-color: #ccc;">
            <td colspan="2">Footer</td>
        </tr>
    </table>
</body>

</html>