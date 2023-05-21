@vite(['resources/css/app.css','resources/js/app.js'])
<table>
    <tr><th>Number</th><th>Home_Adress</th><th>Owner</th><th>Status_Score</th></tr>
    @foreach($abonents as $abonent)
        <tr>
            <td>{{$abonent->number}}</td>
            <td>{{$abonent->home_adress}}</td>
            <td>{{$abonent->owner}}</td>
            <td>{{$abonent->status_score}}</td>
            <td><a href="{{route('abonents.edit',$abonent->id)}}">Edit</a></td>
            <td>
                <form action="{{route('abonents.destroy',$abonent->id)}}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="px-4 py-1 text-sm text-purple-600 font-semibold">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<a href="{{route('abonents.create')}}" class="m-10 rounded-lg px-4 border-4 border-indigo-500/100">Create</a>
