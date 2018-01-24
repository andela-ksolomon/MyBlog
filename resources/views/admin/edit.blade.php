@extends('layouts.master')
@section('content')
  @include('common.errors')
  <div class="contact">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
          <legend><a href=""><i class="glyphicon glyphicon-globe"></i></a> Edit Post</legend>
          <form action="{{ route('admin.update') }}" method="post" class="form" role="form">
          <input class="form-control" name="title" placeholder="Enter title" type="text" value="{{ $post->title }}"/>
          <hr />
          {{ csrf_field() }}
          <input type="hidden" name="id" value="{{ $post->id }}">
          <textarea name="content" id="message" class="form-control" rows="9" cols="25" required="required">{{ $post->content }}</textarea>
          <hr />
          @foreach($tags as $tag)
          <div class="checkbox">
            <label>
              <input type="checkbox" name="tags[]"
              value="{{ $tag->id }}" {{ $post->tags->contains($tag->id) ? 'checked' : ''}}>
              {{ $tag->name }}
            </label>
          </div>
          @endforeach
          <button class="btn btn-lg btn-primary btn-block" type="submit">
              Submit</button>
          </form>
      </div>
  </div>
 @endsection
