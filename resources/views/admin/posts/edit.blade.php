@extends('layouts.admin')

@section('content')


<form method="post" action="{{route('admin.posts.update',$post->id)}}">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="title" class="form-label" placeholder="Title" value="{{old('title')}}">Titolo</label>
      <input type="text" name="title" placeholderclass="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div></div>
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Content</label>
      <textarea class="form-control" id="content" name="content"cols="30" rows="10">{{old('content')}}</textarea>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" name="published" class="form-check-input" id="published" {{old('published') ? 'checked': ''}}>
      <label class="form-check-label" for="published">Pubblicato</label>
    </div>
    <div class="mb-3">
      <label for="category_id">Category</label>
      <select name="category_id" class="form-control" id="category_id">
        <option value="">Select Category</option>
      @foreach ($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

