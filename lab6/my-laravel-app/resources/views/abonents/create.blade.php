@vite(['resources/css/app.css','resources/js/app.js'])
<form action="{{route('abonents.store')}}" method="post" class="border-2 object-center border-indigo-500/100 divide-y divide-blue-200">
    @include('abonents.errors')
    @csrf
    <label for="number" class="mx-5 ">Number</label>
    <input required name = "number" class="outline outline-2  outline-offset-2"/>
    @error('number')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <label for="home_adress" class="mx-5 ">Home_Adress</label>
    <input required name = "home_adress" class="outline outline-2  outline-offset-2"/>
    @error('home_adress')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <label for="owner" class="mx-5 py-5" >Owner</label>
    <input required name = "owner" class="outline outline-2  outline-offset-2"/>
    @error('owner')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <label for="status_score" class="mx-5 py-5">Status_Score</label>
    <input required name = "status_score" class="outline outline-2  outline-offset-2"/>
    @error('status_score')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <br/>

    <button type="submit" class="px-4 py-1 text-sm text-purple-600 font-semibold shadow-md">Create</button>
</form>
