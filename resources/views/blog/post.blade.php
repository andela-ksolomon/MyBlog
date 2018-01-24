@extends('layouts.master')
@section('content')
<div class="col-md-9 main">
		<!--banner-section-->
		<div class="banner-section">
		   <h3 class="tittle"><i class="glyphicon glyphicon-file"></i> {{ $post->title }}</h3>
			<div class="single">
			   <!-- <img src="images/3.jpg" class="img-responsive" alt="" /> -->
			    <div class="b-bottom">
			      <!-- <h5 class="top"><a href="#">What turn out consetetur sadipscing elit</a></h5> -->
				   <p class="sub">{{ $post->content }}</p>
			      <!-- <p>On Aug 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p> -->

				</div>
			 </div>
			  <div class="single-bottom">
          <span>
            @foreach($post->tags as $tag)
            <b>
              <i>
            &#8226; {{ $tag->name}}
            <i>
            </b>
            @endforeach
          </span>
								<div class="single-middle">
                  <a href="{{ route('blog.post.like', ['id' => $post->id]) }}" class="">
                    <i class="glyphicon glyphicon-thumbs-up like">
                    </i>
                  </a>
                  &#8226;
                  {{ count($post->likes) }} likes
								<ul class="social-share pull-right">
									<li><span>SHARE</span></li>
									<li><a href="#"><i> </i></a></li>
									<li><a href="#"><i class="tin"> </i></a></li>
									<li><a href="#"><i class="message"> </i></a></li>
								</ul>
									{{--<button type="button" class="btn btn-default btn-sm">--}}
										{{--<span class="glyphicon glyphicon-thumbs-up"></span>--}}
									{{--</button>--}}
								<div class="clearfix"> </div>
						   </div>

					    </div>
						<div class="response">
					<h4>Responses</h4>
					<!-- <div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#">
								<img class="media-object" src="images/sin1.jpg" alt=""/>
							</a>
							<h5><a href="#">Username</a></h5>
						</div>
						<div class="media-body response-text-right">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available,
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<ul>
								<li>Sep 21, 2015</li>
								<li><a href="single.html">Reply</a></li>
							</ul>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img class="media-object" src="images/sin2.jpg" alt=""/>
									</a>
									<h5><a href="#">Username</a></h5>
								</div>
								<div class="media-body response-text-right">
									<p>No Comment yet</p>
									<ul>
										<li>July 17, 2015</li>
										<li><a href="single.html">Reply</a></li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div> -->
          <h5 class="text-center">No comment yet</h5>
				</div>
				<div class="coment-form">
					<h4>Leave your comment</h4>
					<form>
						<input type="text" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email (will not be published)*';}" required="">
						<input type="text" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="">
						<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
						<input type="submit" value="Submit Comment" >
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
			<!--//banner-->
			<!--//banner-section-->
			<div class="clearfix"> </div>
    </div>
@endsection
