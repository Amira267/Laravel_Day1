@extends('posts/navbar')


@section('title')
Create New post
@endsection

@section('content')

<form action="{{route('post.store')}}" method="POST">
    @csrf
    @method('POST')
    <label for="title">Title :</label><br>
    <input type="text" id="title" name="title" ><br><br>
    <label for="body">Body :</label><br>
    <input type="text" id="body" name="body" ><br><br>
    <select class="form-control" id="selectUser" name="user_selected" required focus>
        <option value="" disabled selected>Please select user</option>
        <option >amira</option>
    </select>
    <input type="submit" value="Add Post">
    </form>

@endsection
