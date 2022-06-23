@extends('layouts.admin')

@section('content')
<a href="{{route('admin.posts.create')}}" class="btn btn-primary">Crea Nuovo Post</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Creation date</th>
        <th scope="col">Modifica</th>

      </tr>
    </thead>
    <tbody>
      @foreach($posts as $post)
      <tr>
        
        <td><a href="{{route('admin.posts.show',$post->id)}}">{{$post->id}}</a></td>
        <td><a href="{{route('admin.posts.show',$post->id)}}">{{$post->title}}</a></td>
        <td>{{$post->created_at}}</td>
        <td><a href="{{route('admin.posts.edit',$post->id)}}" class="btn btn-primary">Modifica</a></td>
        <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <td> <button type="submit" class="btn btn-danger">Cancella</button></td>
        </form>
      </tr>
      @endforeach
      
    </tbody>
  </table>
@endsection
