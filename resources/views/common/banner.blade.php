<div class="banner-section">
  		   <!-- <h3 class="tittle">General <i class="glyphicon glyphicon-picture"></i></h3> -->
			<!-- <div class="banner">
                 <div  class="callbacks_container">
					<ul class="rslides" id="slider4">
					       <li>
							  <img src="{{ URL::to('images/1.jpg') }}" class="img-responsive" alt="" />

							</li>
							<li>
								 <img src="{{ URL::to('images/2.jpg') }}" class="img-responsive" alt="" />


							</li>
							<li>
							 <img src="{{ URL::to('images/3.jpg') }}" class="img-responsive" alt="" />


							</li>
							<li>
							 <img src="{{ URL::to('images/3.jpg') }}" class="img-responsive" alt="" />


							</li>
						</ul>
					</div>
          <script src="{{ URL::to('js/responsiveslides.min.js') }}"></script>
        			 <script>
        			    // You can also use "$(window).load(function() {"
        			    $(function () {
        			      // Slideshow 4
        			      $("#slider4").responsiveSlides({
        			        auto: true,
        			        pager:true,
        			        nav:true,
        			        speed: 500,
        			        namespace: "callbacks",
        			        before: function () {
        			          $('.events').append("<li>before event fired.</li>");
        			        },
        			        after: function () {
        			          $('.events').append("<li>after event fired.</li>");
        			        }
        			      });

        			    });
        			  </script>
        <div class="clearfix"> </div> -->
			    <!-- <div class="b-bottom">
			      <h5 class="top"><a href="single.html">What turn out consetetur sadipscing elit</a></h5>
			      <p>On Aug 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
				  </div> -->
			 <!-- </div> -->
       <div class="top-news">
			   <h3 class="tittle">Articles <i class="glyphicon glyphicon-cog"></i></h3>
				<div class="top-inner">
          @if(count($posts))
          @foreach ($posts as $post)
          <div class="col-md-6 top-text">
             <a href="{{ route('blog.post', [ 'id' => $post->id ]) }}"><img src="images/pic2.jpg" class="img-responsive post-image" alt=""></a>
                  <div class="ser">
                <h5 class="top"><a href="{{ route('blog.post', [ 'id' => $post->id ]) }}">{{ $post->title }}</a></h5>
              <p>{{ substr($post->content, 0, 200) }}</p>
              <span>
                @foreach($post->tags as $tag)
                <b>
                  <i>
                &#8226; {{ $tag->name}}
                <i>
                </b>
                @endforeach
              </span>
                <p>On Jun 27
                  <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a>
                  <a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a>
                  <a class="span_link" href="{{ route('blog.post.like', ['id' => $post->id]) }}">
                    <span class="glyphicon glyphicon-thumbs-up"></span>{{ count($post->likes) }} </a
                  <a class="span_link" href="{{ route('blog.post', [ 'id' => $post->id ]) }}"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
              </div>
           </div>
           @endforeach
           @else
           <div class="well">
             <h5>No post is available</h5>
           </div>
           @endif
           <br />
					 <div class="clearfix"> </div>
				 </div>
         <hr />
	            </div>
					<!--//top-news-->
		     </div>
