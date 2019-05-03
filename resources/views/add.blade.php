@extends("layout.layout")

@section("content")
    <h2>Add new Item</h2>
    <div id="todo-table">
        <form method="post" action="/todo">
            @csrf
            <input id="'form input" type="text" name="title" placeholder="Title" required>
            <input id="'form input" type="text" name="content" placeholder="Content" required>
            <button type="submit">Add item</button>
        </form>
    </div>
@endsection
