@extends('layouts.admin')

@section('content')

<h1>Posts</h1>

    <table border="0" class="table">
        <thead>
        <tr>
            <th>Photo</th>
            <th>Id</th>
            <th>User Name</th>
            <th>Category Id</th>
            <th>Photo Id</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created At</th>
            <th>Updated At</th>

        </tr>
        </thead>

        @if($posts)
            @foreach($posts as $post)
        <tr>
            <td><img height="50" src="images/{{$post->photo ? $post->photo->file:"Image Not Found"}} " alt=""></td>
            <td>{{$post->id}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->category_id}}</td>
{{--            <td><img height="50" src="images/{{$user->photo ? $user->photo->file : 'User has No Photo '}}" alt=""></td>--}}
            {{--<td><img height="50" src="images/{{$post->photo ? $post->photo->file:"Image Not Found"}} " alt=""></td>--}}
            <td>{{$post->photo_id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>
{{--            <td>{{$post->user->name }}</td>--}}
        </tr>
            @endforeach
            @endif
    </table>

@endsection()