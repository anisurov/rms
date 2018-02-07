	<!-- top bar div Starts here -->
            <div class="top-bar">
                <div class="container">
                    <div class="float-left">
                        <p><i class=" fa fa-phone"></i>Call : 01700000000</p>
                    </div>
                    <div class="float-right">
                        <ul class="cart">
						@guest
			    <nav class="main-nav">
			   <ul>
                            <li><a class="register-overlayLink" href="{{ route('register') }}">Sign Up</a> </li><li> <a class="overlayLink" href="{{ route('login') }}">Sign in</a> </li>
			</ul>
			</nav>
						@else
                            <li class="dropdown">
								Hi,
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->user_name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
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
                            </li>
                            <li><i class="fa fa-shopping-cart"></i>(0) items in cart | ($0.00)</li>
						@endguest
                        </ul>
                    </div>
                </div>
            </div>
            <!-- top bar div Ends here -->
            <!-- header div Starts here -->
            <header class="header1">
                <div class="container">
                    <a href="#" id="logo"></a>
                    <nav id="main-menu">
                        <ul>
                            <li class="menu-item current-page-item"><a href="/">Home</a>

                            </li>
                            <li class="menu-item"><a href="{{route('allMenu')}}">Menu</a>
                                <ul class="sub-menu">
									@foreach(App\Menu::all() as $category)
								<li class="menu-item"><a href="{{route('menu',$category->category_id)}}">	{{$category->category_name}}</a></li>
									@endforeach
                                </ul>
								
                            </li>
						
							<li class="menu-item"><a href="shop-three-col.html">Event Booking</a>
							</li>
							<li class="menu-item"><a>Add Menu</a>
							<ul class="sub-menu">
							<li class="menu-item"><a href="{{ url('/addcategorys') }}">Add New Category</a></li>
							<li class="menu-item"><a href="{{ url('/uploads') }}">Add New Menu Item</a></li>
							</ul>
							</li>
							
							<li class="menu-item"><a href="{{ url('/tableReserve') }}">Table Reservetion</a></li>
							
							<li class="menu-item"><a href="shop-three-col.html">Online Food Order</a></li>

                            <li class="menu-item"><a href="about.html">About Ussss</a></li>
                          							
							<li class="menu-item"><a href="shop-three-col.html">Contact Us</a></li>
 
                        </ul>
                    </nav>
                </div>
                <div class="header-bottom"></div>
            </header>
            <!-- header div Ends here -->
            <!-- Banner Starts -->
