	<!-- top bar div Starts here -->
            <div class="top-bar">
                <div class="container">
                    <div class="float-left">
                        <p><i class=" fa fa-phone"></i>Call : 01700000000</p>
                    </div>
                    <div class="float-right">
                        <ul class="cart">

                            <li><i class="fa fa-shopping-cart"></i><a href="{{ url('/cart') }}">({{ sizeof(Cart::content()) }}) items in cart</a></li>

						@guest


                            <li><a class="register-overlayLink" href="{{ route('register') }}">Sign Up</a> </li><li> <a class="overlayLink" href="{{ route('login') }}">Sign in</a> </li>



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
                   @auth
                    @if(Auth::user()->is_admin==1)
                    <ul>
                            <li class="menu-item {{Request::is('/') ? "current-page-item" : "" }}"><a href="/">Home</a>

                            </li>

                     <li class="menu-item {{Request::is(route('rating')) ? "current-page-item" : "" }}"><a href="{{route('rating')}}">Update Rating</a>

                            </li>

							<li class="menu-item {{Request::is('reservation') ? "current-page-item" : "" }}">
								<a href="{{url('/reservation')}}">Event Booking
									<span class="label label-danger">{{App\Event::where('status',0)->count()}}</span>
								</a>
							</li>
							<li class="menu-item {{Request::is('table_reservation') ? "current-page-item" : "" }}">
								<a href="{{ url('/table_reservation') }}">Table Booking
									<span class="label label-danger">{{App\Table::where('status',0)->count()}}</span>
								</a>
							</li>

							<li class="menu-item {{Request::is('onlineorder') ? "current-page-item" : "" }}">
								<a href="{{ url('/onlineorder') }}">Online order

								</a>
							</li>

							<li class="menu-item"><a href="#">Category</a>
							<ul class="sub-menu">
								<li class="menu-item {{Request::is('addcategorys') ? "current-page-item" : "" }}"><a href="{{ url('/addcategorys') }}">Add New Category</a></li>
								<li class="menu-item"><a href="{{url('allcategorys')}}">Update Category</a>
                                    </li>
							</ul>
							</li>

							<li class="menu-item"><a href="#">Menu Item</a>
							<ul class="sub-menu">
								<li class="menu-item"><a href="{{ url('/uploads') }}">Add New Menu Item</a></li>
								<li class="menu-item"><a href="{{route('allMenu2')}}">Update menu</a>
                                    </li>
							</ul>
							</li>

							<li class="menu-item"><a href="shop-three-col.html">User Info</a>
							<ul class="sub-menu">
								<li class="menu-item"><a href="{{ url('/users') }}">View User</a>
									</li>
                                    
							</ul>
							</li>

                            <li class="menu-item"><a href="shop-three-col.html">Branch</a>
							<ul class="sub-menu">
								<li class="menu-item"><a href="{{ url('/addbranch') }}">Add Branch</a>
								</li>

                                <li class="menu-item"><a href="{{ url('/showallbranch') }}">Update Branch</a>
								</li> 
							</ul>
							</li>

                            <li class="menu-item"><a href="{{ url('#') }}">Delivery Boy</a>
								<ul>
                                <li class="menu-item"><a href="{{ url('/delivery') }}">Add Delivery Boy</a>
                                <li class="menu-item"><a href="{{ url('/delivery4') }}">Delivery Boy List</a>
                                </ul>
                                
                                	</li>

                        </ul>
                        @elseif(Auth::user()->is_admin==0)
                        <ul>
                            <li class="menu-item  {{Request::is('/') ? "current-page-item" : "" }}"><a href="/">Home</a>

                            </li>
                            <li class="menu-item {{Request::is('menu') ? "current-page-item" : "" }}"><a href="{{route('allMenu')}}">Menu</a>
                                <ul class="sub-menu">
									@foreach(App\Menu::all() as $category)
								<li class="menu-item"><a href="{{route('menu',$category->category_id)}}">	{{$category->category_name}}</a></li>
									@endforeach
                                </ul>

                            </li>


							<li class="menu-item {{Request::is('eventReserve') ? "current-page-item" : "" }}"><a href="">Event Booking</a>
							<ul class="sub-menu">
								<li class="menu-item "><a href="{{ url('/eventReserve') }}">Event Reservetion</a></li>
								<li class="menu-item"><a href="{{ url('/reservation2') }}">Reserved Event List</a>
                                    </li>
							</ul>
							</li>

								<li class="menu-item"><a href="">Table Booking</a>
							<ul class="sub-menu">
								<li class="menu-item "><a href="{{ url('/tableReserve') }}">Table Reservetion</a></li>
								<li class="menu-item"><a href="{{ url('/table_reservation2') }}">Reserved Table List</a>
                                    </li>
							</ul>
							</li>


							<li class="menu-item {{Request::is('cart') ? "current-page-item" : "" }}"><a href="{{url('cart')}}">Online Food Order</a></li>

                            <li class="menu-item"><a href="about.html">About Us</a></li>

							<li class="menu-item"><a href="shop-three-col.html">Contact Us</a></li>
                            <li class="menu-item"><a href="{{ url('/userprofile') }}">User Profile</a></li>

                            <li class="menu-item"><a type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" style="float:none">Select Branch</a>
                                <ul class=sub-menu>
                       	            @foreach(App\Branch::all() as $branch)
								    <li class="menu-item"><a href="{{route('branch',$branch->branch_id)}}">	{{$branch->branch_name}}</a></li>
									@endforeach
                                </ul>
                            <li>

                        </ul>

                        @else
                        <ul>
                            <li class="menu-item  {{Request::is('/') ? "current-page-item" : "" }}"><a href="/">Home</a>
                            </li>

                            <li class="menu-item"><a href="about.html">Payment</a>
                            <ul>
                            <li class="menu-item"><a href="{{ url('/restaurentpayment') }}">Restaurent Payment</a></li>
                            <li class="menu-item"><a href="{{ url('/preorderpayment1') }}">Preorder Payment</a></li>
                            </ul>
                            </li>

                            <li class="menu-item"><a href="about.html">About Us</a></li>

							<li class="menu-item"><a href="shop-three-col.html">Contact Us</a></li>

                        </ul>

                      @endif
                      @else
                        <ul>
                            <li class="menu-item  {{Request::is('/') ? "current-page-item" : "" }}"><a href="/">Home</a>

                            </li>
                            <li class="menu-item {{Request::is('menu') ? "current-page-item" : "" }}"><a href="{{route('allMenu')}}">Menu</a>
                                <ul class="sub-menu">
									@foreach(App\Menu::all() as $category)
								<li class="menu-item"><a href="{{route('menu',$category->category_id)}}">	{{$category->category_name}}</a></li>
									@endforeach
                                </ul>

                            </li>
                            <li class="menu-item {{Request::is('eventReserve') ? "current-page-item" : "" }}"><a href="">Event Booking</a>
                            <ul class="sub-menu">
                              <li class="menu-item "><a href="{{ url('/eventReserve') }}">Event Reservetion</a></li>
                              <li class="menu-item"><a href="{{ url('/reservation2') }}">Reserved Event List</a>
                                                  </li>
                            </ul>
                            </li>

                              <li class="menu-item"><a href="">Table Booking</a>
                            <ul class="sub-menu">
                              <li class="menu-item "><a href="{{ url('/tableReserve') }}">Table Reservetion</a></li>
                              <li class="menu-item"><a href="{{ url('/table_reservation2') }}">Reserved Table List</a>
                                                  </li>
                            </ul>
                            </li>
							<li class="menu-item {{Request::is('cart') ? "current-page-item" : "" }}"><a href="{{url('cart')}}">Online Food Order</a></li>

                            <li class="menu-item"><a href="about.html">About Us</a></li>

							<li class="menu-item"><a href="shop-three-col.html">Contact Us</a></li>

                        </ul>

                      @endauth
                    </nav>
                </div>
                <div class="header-bottom"></div>
            </header>
            <!-- header div Ends here -->
            <!-- Banner Starts -->
