<x-layout>
    <p>Welcome Home Page</p>
    @foreach ($data2 as $m)
        {{$m}}
    @endforeach

    @foreach ($data2 as $m => $n)
    {{$m}}-{{$n}}
    @endforeach

    <table border="1px ">
    @foreach ($data2 as $m => $n)
   
        <tr>
            <td>{{$m}}</td>
            <td>{{$n}}</td>
        </tr>
    
    @endforeach
</table>
    

</x-layout>