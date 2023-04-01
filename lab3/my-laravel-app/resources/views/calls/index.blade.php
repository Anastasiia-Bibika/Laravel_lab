@vite(['resources/css/app.css','resources/js/app.js'])
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
                    <button type="submit" class=" mx-2  px-4 py-1 text-sm text-purple-600 font-semibold border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<a href="{{route('calls.create')}}" class="m-10 rounded-lg px-4 border-4 border-indigo-500/100">Create</a>

