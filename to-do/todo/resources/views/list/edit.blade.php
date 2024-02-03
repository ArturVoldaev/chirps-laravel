<div>
    <form method="POST" action="{{route('list.update', $data['id'])}}">
    @csrf
    @method('PUT')
        <div>
            <input type="text" name="title" placeholder="client name">
            <button type="submit">click to send form</button>
        </div>
    </form>

    <h2>Old title is {{$data['title']}}</h2>
</div>