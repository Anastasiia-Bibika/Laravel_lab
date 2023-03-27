@vite(['resources/css/app.css',
'resources/js/app.js'])
<table  class="border-spacing-px border-collapse">
    <tr><th>Brand</th><th>Country</th><th>Number</th><th>Email</th></tr>
    @foreach($makers as $maker)
        <tr>
            <td>{{$maker->brand}}</td>
            <td>{{$maker->country}}</td>
            <td>{{$maker->number}}</td>
            <td>{{$maker->email}}</td>
            <td>
                <form action="{{route('makers.destroy',$maker->id)}}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
