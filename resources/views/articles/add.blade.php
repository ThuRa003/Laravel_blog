@extends("layouts.app")

@section("content")

<div class="container" style="max-width: 800px">
    @if ($errors->all())
    
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
            {{$err}}
            @endforeach
        </div>
    
        
    @endif
<form method="POST">
    @csrf
    <input type="text" name="title" class="form-control mb-2" placeholder="Title">
    <textarea name="body" class="form-control mb-2" placeholder="Body" ></textarea>
    <select name="category_id" class="form-select mb-2">
        <option value="1">News</option>
        <option value="2">Tech</option>
    </select>
    <button class="btn btn-primary">Add Article</button>
</form>
</div>
@endsection