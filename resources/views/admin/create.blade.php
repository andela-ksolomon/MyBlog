@extends('layouts.master')
@section('content')
  <div class="contact">
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm">
          <legend><a href=""><i class="glyphicon glyphicon-globe"></i></a> Create a New Post</legend>
          <form action="{{ route('admin.create') }}" method="post" class="form" role="form">
          <input class="form-control" name="title" placeholder="Enter title" type="text" />
          <hr />
          <textarea name="content" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Article body"></textarea>
          {{ csrf_field() }}
          <hr />
          @foreach($tags as $tag)
          <div class="checkbox">
            <label>
              <input type="checkbox" name="tags[]" value="{{ $tag->id }}">
              {{ $tag->name }}
            </label>
          </div>
          @endforeach
          <button class="btn btn-lg btn-primary btn-block" type="submit">
              Create Post</button>
          </form>
      </div>
  </div>
 @endsection
