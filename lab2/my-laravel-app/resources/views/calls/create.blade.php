<form action="{{route('calls.store')}}" method="post">

    @csrf
    <label for="number_call">Number_call</label>
    <input required name="number_call"/>
    <br/>
    <label for="duration">Duration</label>
    <input required name="duration"/>
    <br/>
    <label for="pay">Pay</label>
    <input required name="pay"/>
    <br/>
    <label for="implementation_time">Implementation time</label>
    <input required name="implementation_time"/>
    <br/>
    <label for="abonent_id">Abonent</label>
    <select name="abonent_id">
        <option value="0">please select Abonent</option>
        @foreach($abonent_list as $abonent_item)
            <option value="{{$abonent_item->id}}">{{$abonent_item->owner}}</option>
        @endforeach
    </select>
    <br/>
    <br/>
    <button type="submit">Create</button>
</form>
