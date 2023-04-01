@vite(['resources/css/app.css','resources/js/app.js'])
<form action="{{route('calls.update',$call)}}" method="post">
    @include('calls.errors')
    @csrf
    {{ method_field('PUT') }}
    <label for="number_call" class="m-2 text-xl font-medium text-black">Number_Call</label>
    <input required name = "number_call" value="{{$call->number_call}}"/>
    @error('number_call')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <label for="duration" class="m-2 text-xl font-medium text-black">Duration</label>
    <input required name = "duration" value="{{$call->duration}}"/>
    @error('duration')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <label for="pay" class="m-2 text-xl font-medium text-black">Pay</label>
    <input required name = "pay" value="{{$call->pay}}"/>
    @error('pay')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <label for="implementation_time" class="m-2 text-xl font-medium text-black">Implementation_Time</label>
    <input required name = "implementation_time" value="{{$call->implementation_time}}"/>
    @error('implementation_time')
    <div>
        {{$message}}
    </div>
    @enderror
    <br/>
    <label for="abonent_id" class="m-2 text-xl font-medium text-black">Abonent</label>
    @error('abonent_id')
    <div>
        {{$message}}
    </div>
    @enderror
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

    <button type="submit" class=" mx-2  px-4 py-1 text-sm text-purple-600 font-semibold border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Edit</button>
</form>
