@extends("layout.layout")

@section("content")
        @if(isset($added))
            <script>alert("item Added")</script>
            @endif
    <h2>Show new Item</h2>
    <ul>
    @forelse($todos as $todo)
    <li><h1>{{$todo->id}}</h1>  <pre>Title: {{$todo->title}} /  <span>Contnet : {{$todo->content}}</span></pre></li>
    @empty
    <h2 style="color: red">nothing to show</h2>
    @endforelse
    </ul>
@endsection
