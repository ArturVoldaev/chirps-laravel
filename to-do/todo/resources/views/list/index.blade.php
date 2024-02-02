<div>
    <form method="POST" action="{{route('list.store')}}">
        @csrf
        <input type="text" name="title" placeholder="client name">
        <button type="submit">click to send form</button>
        @foreach( $data as $ar )

        <ul>
            @foreach($ar as $el => $value)
            @if ($value == 1)
            fuck
            @endif
            @if ($el == "title")
            <h1>{{ $value }}</h1>
            @endif
            
            

            @endforeach
        </ul>


        @endforeach
    </form>
</div>