<form action="{{route('calls.update',$call)}}" method="post">

    @csrf
    {{ method_field('PUT') }}
    <label for="number_call">Number_Call</label>
    <input required name = "number_call" value="{{$call->number_call}}"/>
    <br/>
    <label for="duration">Duration</label>
    <input required name = "duration" value="{{$call->duration}}"/>
    <br/>
    <label for="pay">Pay</label>
    <input required name = "pay" value="{{$call->pay}}"/>
    <br/>
    <label for="implementation_time">Implementation_Time</label>
    <input required name = "implementation_time" value="{{$call->implementation_time}}"/>
    <br/>
    <label for="abonent_id">Abonent</label>
    <select name="abonent_id">
        <option value="0">Please select abonent</option>
        @foreach($abonent_list as $abonent_item)
            <option
                @if($abonent_item->id == $call->abonent_id)
                    selected
                @endif
                value="{{$abonent_item->id}}"
            >{{$abonent_item->owner}}</option>
        @endforeach
    </select>
    <br/>
    <br/>

    <button type="submit">Edit</button>
</form>
