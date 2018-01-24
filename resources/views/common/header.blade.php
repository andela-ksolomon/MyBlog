<div class="h-top" id="home">
		   <div class="top-header">
				  <ul class="cl-effect-16 top-nag">
            <li><a class="active" href="{{ route('index') }}" data-hover="HOME">Home</a></li>
						<li><a href="{{ route('event.index') }}" data-hover="Articles">Articles</a></li>
						<li><a href="{{ route('gallery.index') }}" data-hover="Gallery">Gallery</a></li>
            <li><a href="{{ route('other.contact') }}" data-hover="CONTACT">Contact</a></li>
						<li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
						<li><a href="{{ route('admin.index') }}" data-hover="admin">Admin Panel</a></li>
						<li>
							<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
									Logout
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
							</form>
					</li>
					</ul>
					<div class="search-box">
					    <div class="b-search">
								<form>
										<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
										<input type="submit" value="">
								</form>
							</div>
						</div>

					<div class="clearfix"></div>
				</div>
       </div>
