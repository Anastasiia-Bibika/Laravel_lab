<form action="{{route('abonents.store')}}" method="post">

    @csrf

    <label for="number">Number</label>
    <input required name = "number"/>
    <br/>
    <label for="home_adress">Home_Adress</label>
    <input required name = "home_adress"/>
    <br/>
    <label for="owner">Owner</label>
    <input required name = "owner"/>
    <br/>
    <label for="status_score">Status_Score</label>
    <input required name = "status_score"/>
    <br/>
    <br/>

    <button type="submit">Create</button>
</form>
