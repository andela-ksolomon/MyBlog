@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">Feeds</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div> -->

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
            @if(count($posts))
            @foreach ($posts as $post)
            <div class="[ panel panel-default ] panel-google-plus">
                <div class="dropdown">
                    <span class="dropdown-toggle" type="button" data-toggle="dropdown">
                        <span class="[ glyphicon glyphicon-chevron-down ]"></span>
                    </span>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                    </ul>
                </div>

                <div class="panel-google-plus-tags">
                    <ul>
                        <li>#Millennials</li>
                        <li>#Generation</li>
                    </ul>
                </div>
                
                <div class="panel-heading">
                    <img class="[ img-circle pull-left ]" src="https://lh3.googleusercontent.com/-CxXg7_7ylq4/AAAAAAAAAAI/AAAAAAAAAQ8/LhCIKQC5Aq4/s46-c-k-no/photo.jpg" alt="Mouse0270" />
                    <h3>Robert McIntosh</h3>
                    <h5><span>Shared publicly</span> - <span>Jun 27, 2014</span> </h5>
                </div>
                <div class="panel-body">
                    <p>{{ substr($post->content, 0, 200) }}</p>
                </div>
                <div class="panel-footer">
                    <button type="button" class="[ btn btn-default ]">+1</button>
                    <button type="button" class="[ btn btn-default ]">
                        <span class="[ glyphicon glyphicon-share-alt ]"></span>
                    </button>
                    <div class="input-placeholder">Add a comment...</div>
                </div>
                <div class="panel-google-plus-comment">
                    <img class="img-circle" src="https://lh3.googleusercontent.com/uFp_tsTJboUY7kue5XAsGA=s46" alt="User Image" />
                    <div class="panel-google-plus-textarea">
                        <textarea rows="4"></textarea>
                        <button type="submit" class="[ btn btn-success disabled ]">Post comment</button>
                        <button type="reset" class="[ btn btn-default ]">Cancel</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            @endforeach
            @else
                <div class="panel panel-default">
                <!-- <div class="panel-heading">Dashboard</div> -->

                    <div class="panel-body">
                        No posts is available
                    </div>
                </div>
           @endif
        </div>
    </div>
</div>
@endsection
