<form action="{{route('abonents.update',$abonent)}}" method="post">

    @csrf
    {{ method_field('PUT') }}
    <label for="number">Number</label>
    <input required name = "number" value="{{$abonent->number}}"/>
    <br/>
    <label for="home_adress">Home_Adress</label>
    <input required name = "home_adress" value="{{$abonent->home_adress}}"/>
    <br/>
    <label for="owner">Owner</label>
    <input required name = "owner" value="{{$abonent->owner}}"/>
    <br/>
    <label for="status_score">Status_Score</label>
    <input required name = "status_score" value="{{$abonent->status_score}}"/>
    <br/>
    <br/>

    <button type="submit">Edit</button>
</form>
