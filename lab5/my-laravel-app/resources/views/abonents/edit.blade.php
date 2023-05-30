@vite(['resources/css/app.css','resources/js/app.js'])
<form action="{{route('abonents.update',$abonent)}}" method="post">
    @include('abonents.errors')
    @csrf
    {{ method_field('PUT') }}
    <label for="number" class="m-2 text-xl font-medium text-black">Number</label>
    <input required name = "number" value="{{$abonent->number}}"/>
    @error('number')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <label for="home_adress" class="m-2 text-xl font-medium text-black">Home_Adress</label>
    <input required name = "home_adress" value="{{$abonent->home_adress}}"/>
    @error('home_adress')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <label for="owner" class="m-2 text-xl font-medium text-black">Owner</label>
    <input required name = "owner" value="{{$abonent->owner}}"/>
    @error('owner')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <label for="status_score" class="m-2 text-xl font-medium text-black">Status_Score</label>
    <input required name = "status_score" value="{{$abonent->status_score}}"/>
    @error('status_score')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <br/>

    <button type="submit" class=" mx-2  px-4 py-1 text-sm text-purple-600 font-semibold border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Edit</button>
</form>
