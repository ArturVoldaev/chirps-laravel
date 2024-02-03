<div>
    <div>
        <form method="POST" action="{{route('list.store')}}">
            @csrf
            <div>
                <input type="text" name="title" placeholder="client name">
                <button type="submit">click to send form</button>
            </div>
        </form>
    </div>
    <ul>
        @foreach( $data as $ar )
        <li style="display: flex; align-items: center;">
            @foreach($ar as $el => $value)
            @if ($el == "title")
            <h2>{{$value}}</h2>
            @endif
            @if ($el == "id")
            <div style="display: flex;">
                <h3>{{ $value }}</h3>
                <form method="POST" action="{{route('list.destroy', $value) }}">
                    @csrf
                    @method('delete')
                    <button type="submit">delete button</button>
                </form>
                <form method="PUT" action="{{route('list.edit', $value) }}">
                    @csrf
                   
                    <button type="submit">EDIT button</button>
                </form>
            </div>
            @endif
            @endforeach
        </li>
        @endforeach
    </ul>
</div>