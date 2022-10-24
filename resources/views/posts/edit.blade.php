@extends('posts/navbar')

@section('title')
Create New post
@endsection

@section('content')

<form action="{{route('post.update',$post[$id - 1]['id'])}}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Title :</label><br>
    <input type="text" id="title" name="title" value="{{$post[$id - 1]['title']}}"><br><br>
    <label for="body">Body :</label><br>
    <input type="text" id="body" name="body" value="{{$post[$id - 1]['body']}}"><br><br>
    <input type="submit" value="Edit">
    </form>

@endsection
