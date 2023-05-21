@vite(['resources/css/app.css','resources/js/app.js'])
<div class="w-3/4">
<form action="{{route('calls.store')}}" method="post" class="border-2 object-center border-indigo-500/100 divide-y divide-blue-200" >
    @include('calls.errors')
    @csrf
    <label for="number_call" class="mx-5 my-8 ">Number_call</label>
    <input required name="number_call" class="outline outline-2  outline-offset-2 my-8"/>
    <br/>
    <label for="duration" class="mx-5 my-8 py-5">Duration</label>
    <input required name="duration" class="outline outline-2  outline-offset-2 my-8"/>
    <br/>
    <label for="pay" class="mx-5 py-5 my-8">Pay</label>
    <input required name="pay" class="outline outline-2  outline-offset-2 my-8"/>
    <br/>
    <label for="implementation_time" class="mx-5 py-5 my-8">Implementation time</label>
    <input required name="implementation_time" class="outline outline-2  outline-offset-2"/>
    <br/>
    <label for="abonent_id" class="mx-5 py-5">Abonent</label>
    <select name="abonent_id">
        <option value="0">please select Abonent</option>
        @foreach($abonent_list as $abonent_item)
            <option value="{{$abonent_item->id}}">{{$abonent_item->owner}}</option>
        @endforeach
    </select>
    <br/>
    <br/>
    <button type="submit" class="px-4 py-1 text-sm text-purple-600 font-semibold shadow-md">Create</button>
</form>
</div>
