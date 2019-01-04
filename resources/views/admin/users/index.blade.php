

@extends('layouts.admin')

@section('content')

<h1>Admin Users Page Working </h1>


    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Is Active</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
        </thead>

        @if($users)
            @foreach($users as $user )
                <tr>
                    <td>{{$user->id}}</td>
                    <td><img height="50" src="images/{{$user->photo ? $user->photo->file : 'User has No Photo '}}" alt=""></td>
                    <td><a href="{{route('admin.users.edit',$user->id)}}"> {{$user->name}}</a></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                     {{--Printing Foreign Key Constraints--}}
                    {{--<td>{{$user->role->name}}</td>--}}
                    <td>{{$user->is_active == 1 ? 'Active': 'Not Active'}}</td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach

        @endif

    </table>

@stop