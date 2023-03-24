<table>
    <tr><th>Number_call</th><th>Duration</th><th>Pay</th><th>Implementation_time</th><th>Abonent_id</th></tr>
    @foreach($calls as $call_item)
        <tr>
            <td>{{$call_item->number_call}}</td>
            <td>{{$call_item->duration}}</td>
            <td>{{$call_item->pay}}</td>
            <td>{{$call_item->implementation_time}}</td>
            <td>{{$call_item->abonent_id}}</td>
            <td><a href="{{route('calls.edit',$call_item->id)}}">Edit</a></td>
            <td>
                <form action="{{route('calls.destroy',$call_item->id)}}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<a href="{{route('calls.create')}}">Create</a>

