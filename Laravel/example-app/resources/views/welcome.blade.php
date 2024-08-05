<x-layout>
    <h1>Welcome Home Page</h1>
    <h1 class="name1">Mithursan</h1>
    <h1 id="name2">Mithursan</h1>
    <h1 style="color: red">Mithursan</h1>

    <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>

    <button type="button" class="btn btn-primary">Click Here</button>
    
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