@extends('layouts.master')
@section('content')
<div class="contact">
  @if(Session::has('info'))
          <div class="row">
              <div class="col-md-12">
                  <p class="alert alert-info">{{ Session::get('info') }}</p>
              </div>
          </div>
      @endif
  <div class="well"><span style="font-size: 18px">Welcome</span><a href="{{ route('admin.create') }}"><button type="button" class="btn btn-danger pull-right" name="button">Create a New Post</button></a></div>
@if(count($posts))
  @foreach($posts as $post)
  <div class="well">{{ $post->title }}
    <a href="{{ route('admin.edit', ['id' => $post->id ]) }}">
      <button type="button" class="btn btn-success pull-right" name="button">Edit Post</button>
    </a>
    <a href="{{ route('admin.delete', ['id' => $post->id ]) }}">
      <button type="button" class="btn btn-danger pull-right" name="button">Delete Post</button>
    </a>
  </div>
  @endforeach
  @else
  <div class="well">
    <h5>No post is available</h5>
  </div>
  @endif
</div>
@endsection
