
@extends('layouts.app')
@section('content')
<div class="home2-ribbon">
                <div class="container">
<?php
$pass=1234567;
$hashed =password_hash($pass, PASSWORD_DEFAULT);
$hashed2 = password_hash("asmuslerdorf", PASSWORD_DEFAULT);
$hash = '$2y$10$xFSrc3MXIXkb6yMr0qcU4O9.Ru9.OQ9fdJ44zSzU/pPVC5QM6r0BW';
$p=1235;
if (password_verify($p, $hashed)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

?>
                    <p class="theme-ribbon ribbon"> Welcome </p>
                </div>
                <?php
                $time = date('h');
                echo $time;
                ?>
            </div>
            <div class="banner2">
                <div class="container">
                    <div class="rev_slider_wrapper">
                        <div class="rev_slider">
                            <ul>
                                <li data-transition="random" data-slotamount="7" data-masterspeed="300">
                                    <img src="images/revolution/barbeque.jpg"  alt="slider-bg">
                                    <div class="tp-caption gray_bigger lft"
                                        data-x="200" 
                                        data-y="66" 					 
                                        data-speed="1000" 
                                        data-start="1000" 
                                        data-easing="easeOutExpo">Order with Ekhuni Chai
                                    </div>
                                    
                                    <div class="tp-caption pac_subtitle sfr"
                                        data-x="370" 
                                        data-y="108"
                                        data-speed="1000" 
                                        data-start="1500" 
                                        data-easing="easeOutExpo">we deliver in time				 					 
                                    </div>
                                </li>
                                <li data-transition="flyin" data-slotamount="1" data-masterspeed="300">
                        <img src="images/revolution/boneka-breakfast.jpg" alt="dishes" >
     <div class="caption transparent-box sfb"
                                 data-x="0"
                                 data-y="430"
                                 data-speed="300"
                                 data-start="2000"
                                 data-easing="easeOutBack"></div>
                                  
                        <div class="caption big_gray sfl"
                             data-x="20"
                             data-y="445"
                             data-speed="300"
                             data-start="3000"
                             data-easing="easeOutExpo">Best Served Dishes</div>
    
                      <div class="caption gray_content sfb"
                             data-x="20"
                             data-y="485"
                             data-speed="800"
                             data-start="3500"
                             data-easing="easeOutExpo"></div>
    
                             
              
                             
                               
              </li>
                                <li data-transition="random" data-slotamount="7" data-masterspeed="300">
                                    <img src="images/revolution/3.jpg"  alt="slider-bg">
                                    <div class="tp-caption custom_title2 lfb"
                                        data-x="50" 
                                        data-y="346" 					 
                                        data-speed="1000" 
                                        data-start="1500" 
                                        data-easing="easeOutExpo">Celebrate your event
                                    </div>
                                
                                    <div class="tp-caption custom_subtitle2 lft"
                                        data-x="50" 
                                        data-y="400" 					 
                                        data-speed="1000" 
                                        data-start="2000" 
                                        data-easing="easeOutExpo">with Ekhuni Chai	 					 
                                    </div>
   
                                
                                </li>
                                
                                <li data-transition="random" data-slotamount="7" data-masterspeed="300">
                                    <img src="images/revolution/4.jpg"  alt="slider-bg">
									 <div class="caption transparent-box sfb"
                                 data-x="0"
                                 data-y="430"
                                 data-speed="300"
                                 data-start="2000"
                                 data-easing="easeOutBack"></div>
                                    <div class="tp-caption custom_title3 lft"
                                        data-x="20" 
                                        data-y="400" 					 
                                        data-speed="1000" 
                                        data-start="1000" 
                                        data-easing="easeOutExpo">Welcome Everybody
                                    </div>
                                    
                                    <div class="tp-caption custom_subtitle sfr"
                                        data-x="20" 
                                        data-y="460"
                                        data-speed="1000" 
                                        data-start="1500" 
                                        data-easing="easeOutExpo">Most populer Restaurant's of Chittagong
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="bottom-arrow"></div>
                </div>
                <div class="banner-container">
                    <div class="shadow3"></div>
                </div>
            </div><!-- Banner Ends -->       
            
            <div class="main-container">
                <div class="container">
                    <section id="primary" class="content-full-width">
					<div class="big-ribbon" style="margin-left:100px">
                            <div class="ribbon-content aligncenter">
                                <h3><b>Ekhuni Chai </b> - A Restaurant Website</h3>
                            </div>
                        </div>
                        <h2 class="block-title aligncenter" style="margin-left:40px">Our Services 3 Column</h2>
                        <div class="dt-sc-one-third column first">
                            <article class="services">
                                <div class="border">
                                    <div class="content-bg aligncenter">
                                        <span class="ico-dish"></span>
                                        <h2>Awesome Dishes</h2>
                                        <span class="sub-title">Special menu everyday</span>
                                        
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="dt-sc-one-third column">
                            <article class="services">
                                <div class="border">
                                    <div class="content-bg aligncenter">
                                        <span class="ico-food"></span>
                                        <h2>Healthy Food</h2>
                                        <span class="sub-title">Hygiene goes all the way</span>
                                        
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="dt-sc-one-third column">
                            <article class="services">
                                <div class="border">
                                    <div class="content-bg aligncenter">
                                        <span class="ico-hospitality"></span>
                                        <h2>Good Hospitality</h2>
                                        <span class="sub-title">Trained Personals</span>
                                        
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="margin60"></div>
                        <section class="border intro-text type4">
                            <div class="content-bg">
                                <div class="column dt-sc-three-fourth first">
                                    <h2><b>Ekhuni Chai</b> is a great website for your Restaurant reservation, Event organisation,Food ordering. <br /> Come let’s enjoy these <b>awesome features</b> for Our Website.</h2>
                                </div>
                                
                            </div>
                        </section>
                        <div class="margin50"></div>
                    </section>
                    
                    <h2 class="block-title">Recent Blog</h2>
                    <div class="dt-sc-one-half column first">
                        <div class="blog-post">
                            <div class="dt-sc-one-half column first">
                                <div class="entry-thumb">
                                    <a href="#">
                                        <div class="border">
                                            <span class="top-right"></span>
                                            <img title="" alt="" src="images/setm1.jpg">
                                            <span class="bottom-left"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="dt-sc-one-half column">
                                <div class="entry-datail">
                                    <h2><a href="#">A Thought about being Vegan</a></h2>
                                    <p>Roin a bibendum nibh. Nunc fermentum sit amet mi nec consequat. Praesent porttitor nulla sit amet dui lobortis...</p>
                                    <ul class="entry-meta">
                                            <li><span class="fa fa-calendar"></span>21 Aug 2013 </li>
                                        <li><span class="fa fa-user"></span><a href="#">Admin</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dt-sc-one-half column">
                        <div class="blog-post">
                            <div class="dt-sc-one-half column first">
                                <div class="entry-thumb">
                                    <a href="#">
                                        <div class="border">
                                            <span class="top-right"></span>
                                            <img title="" alt="" src="images/setm2.jpg">
                                            <span class="bottom-left"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="dt-sc-one-half column">
                                <div class="entry-datail">
                                    <h2><a href="#">Tastes like Chicken - A Test Drive with Veggie</a></h2>
                                    <p>Roin a bibendum nibh. Nunc fermentum sit amet mi nec consequat. Praesent porttitor nulla sit amet dui lobortis...</p>
                                    <ul class="entry-meta">
                                        <li><span class="fa fa-calendar"></span>21 Aug 2013 </li>
                                        <li><span class="fa fa-user"></span><a href="#">Admin</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="margin20"></div>
                    <div class="hr">
                        <span class="driver"></span>
                    </div>
                    <div class="margin40"></div>
                    <div class="dt-sc-one-half column first">
                        <h3 class="block-title">Services</h3>
                        <div class="dt-sc-tabs-container">
                            <ul class="dt-sc-tabs-frame">
                                <li><a href="#" class="current">Club Events</a></li>
                                <li><a href="#">Wedding Orders</a></li>
                                <li><a href="#">Parties</a></li>
                            </ul>
                            <div class="dt-sc-tabs-frame-content" style="display:block;">
                                <p><b>Richard McClintock,</b> a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>
                                <div class="margin20"></div>
                                <p><b>Roin a bibendum nibh.</b> Nunc fermentum sit amet mi nec consequat. Praesent porttitor nulla sit amet dui lobortis. Nunc fermentum sit amet mi nec consequat. Praesent porttitor nulla sit amet dui lobortis, id venenatis nibh accumsan.</p>
                            </div>
                            <div class="dt-sc-tabs-frame-content" style="display:none;">
                                <p>Aliquam euismod feugiat est, congue elementum <b>justo condimentum</b> sit amet. Nullam vitae risus ut velit condimentum egestas vitae eget enim. Vivamus cursus, sem sed tristique posuere, libero tellus dictum nisl, nec rhoncus odio odio et orci.</p>
                                <br />
                                <p> Ut placerat aliquam elit, id egestas sem. Sed tristique eu libero et malesuada. <b>Pellentesque</b> non pharetra dui. Aliquam vel augue eu augue ornare ullamcorper. Nam imperdiet imperdiet magna, faucibus ultrices tortor viverra congue.</p>
                            </div>
                            <div class="dt-sc-tabs-frame-content" style="display:none;">
                                <p>Nunc euismod nibh sit amet justo porta, at blandit metus bibendum. Nunc pharetra justo sed nulla imperdiet, quis adipiscing turpis bibendum. Nulla venenatis vehicula augue. Praesent vulputate ipsum vel consectetur tincidunt. Aliquam egestas, velit <b>malesuada sagittis</b> iaculis, tortor erat vestibulum velit, eu malesuada metus lorem. </p>
                                <p>Ut suscipit, lorem quis bibendum placerat, sem arcu rutrum arcu, non <b>consequat dolor</b> ligula quis urna. Ut lectus nisi, commodo id aliquam ac, posuere in lacus. Integer a nisl sapien. </p>
							</div>
                        </div>
                    </div>
                    <div class="dt-sc-one-half column">
                        <h3 class="block-title">Today’s Offer</h3>
                        <div class="offer">
                            <div class="dt-sc-one-fifth column first">
                                <div class="entry-thumb">
                                    <a href="#">
                                        <figure>
                                            <img src="images/menu/download.jpg" alt="" title="" />
                                            <div class="image-mask"></div>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="dt-sc-four-fifth column">
                                <div class="entry-detail">
                                    <h3> 3 Glass combo</h3>
                                    <p>Sit amet mi nec consequat. Praesent porttitor nulla sit amet dui lobortis</p>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="offer">
                            <div class="dt-sc-one-fifth column first">
                                <div class="entry-thumb">
                                    <a href="#">
                                        <figure>
                                            <img src="images/menu/Basmati_Logo.jpg" alt="" title="" />
                                            <div class="image-mask"></div>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="dt-sc-four-fifth column">
                                <div class="entry-detail">
                                    <h3>Butterfly Pea Softdrink</h3>
                                    <p>Sit amet mi nec consequat. Praesent porttitor nulla sit amet dui lobortis</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="offer last">
                            <div class="dt-sc-one-fifth column first">
                                <div class="entry-thumb">
                                    <a href="#">
                                        <figure>
                                            <img src="images/menu/images1.jpg" alt="" title="" />
                                            <div class="image-mask"></div>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                            <div class="dt-sc-four-fifth column">
                                <div class="entry-detail">
                                    <h3>Strawberry Delight</h3>
                                    <p>Sit amet mi nec consequat. Praesent porttitor nulla sit amet dui lobortis</p>
                              
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="margin50"></div>
                    <h2 class="block-title">Special Events</h2>
                    <div class="dt-sc-tabs-vertical-container">
                        <ul class="dt-sc-tabs-vertical-frame dt-sc-one-fourth column first">
                            <li class="current"><a href="#"> Weddings<span></span> </a></li>
                            <li><a href="#"> Birthday Party <span></span></a></li>
                            <li><a href="#"> Office Party <span></span></a></li>
                            <li><a href="#"> Special Cakes <span></span></a></li>
                        </ul>
                        <div class="dt-sc-tabs-vertical-frame-content dt-sc-two-third column">
                            <h3> Wedding Specials </h3>
                            <p><i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</i></p>
                            <div class="margin20"></div>
                            <div class="dt-sc-one-half column first">
                                <img src="images/strowberry.png" alt="" title="" class="alignleft" />
                                <h2>Romanian Strawberry </h2>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>
                            </div>
                            <div class="dt-sc-one-half column">
                                <img src="images/cupcake.png" alt="" title="" class="alignleft" />
                                <h2>Cupcake Delight</h2>
                                <p>It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures.</p>
                            </div>
                        </div>
                        <div class="dt-sc-tabs-vertical-frame-content dt-sc-two-third column">
                            <h3> Powerful Admin Panel </h3>
                            <p> <i> Morbi vel elit magna, at laoreet eros. Nullam non lectus fringilla nisl tincidunt pellentesque. Vivamus odio velit, laoreet ac molestie nec, sodales at quam. Nullam pellentesque tristique tristique. </i> </p>
                            <p> <img src="images/choco-stick.png" alt="" title="" class="alignright" /> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas at justo sit amet lacus gravida adipiscing. Suspendisse lacinia accumsan lacus. Morbi sed nulla augue.</p>
                            <p>Ut posuere suscipit augue. Phasellus quis tempor nisl, ut condimentum metus. Pellentesque nec laoreet neque. Fusce facilisis nibh id libero vehicula consectetur sit amet in justo. </p>
                        </div>
                        <div class="dt-sc-tabs-vertical-frame-content dt-sc-two-third column">
							<h3> Best Inbuilt features </h3>
                            <p> <i>Pellentesque augue lacus, porta vel ultricies vitae, ullamcorper eget purus. Aliquam risus mauris, suscipit eget scelerisque in, dapibus at mauris. </i></p>
                            <p><img src="images/feast.png" alt="" title="" class="alignright" /> Suspendisse lacinia accumsan lacus. Morbi sed nulla augue. Ut posuere suscipit augue. Phasellus quis tempor nisl, ut condimentum metus. Pellentesque nec laoreet neque. Fusce facilisis nibh id libero vehicula consectetur sit amet in justo. <p> Cras placerat nisi felis, in semper urna sollicitudin nec. Sed hendrerit blandit tortor, quis porta arcu dignissim sit amet. Nulla id laoreet orci, vel pulvinar quam. </p>
                        </div>
                        <div class="dt-sc-tabs-vertical-frame-content dt-sc-two-third column">
                            <h3> Romanian Strawberry </h3>
                            <p> <i>Pellentesque augue lacus, porta vel ultricies vitae, ullamcorper eget purus. Aliquam risus mauris, suscipit eget scelerisque in, dapibus at mauris.</i> </p>
                            <p> <img src="images/cupcake.png" alt="" title="" class="alignright" /> Duis posuere turpis vitae leo molestie eleifend. Phasellus quis malesuada urna. Mauris et mauris ut felis pretium lacinia</p>
                            <p> Duis molestie sapien enim, quis aliquam magna placerat in. Vivamus porta consectetur lorem, ut tristique arcu pulvinar in. Pellentesque id quam non tortor faucibus posuere. Duis blandit nibh a velit lacinia, a ullamcorper turpis fermentum. </p>
                        </div>
                    </div>
                    
                    <div class="margin60"></div>
                    <h2 class="block-title">Featured Menu</h2>
                    <div class="caroufred_menus">
                        <div class="menu dt-sc-one-half">
                            <div class="dt-sc-one-third column first">
                                <div class="entry-thumb">
                                    <a href="#">
                                        <span class="border rotate">
                                        </span>
                                        <div class="border">
                                            <span class="top-right"></span>
                                            <img src="images/menu/menu-img1.jpg" alt="" title="" />
                                            <span class="code">Code:TOMFRY</span>
                                            <span class="bottom-left"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="dt-sc-two-third column">
                                <div class="entry-detail">
                                    <h3><a href="#">Tomato Special Fry - 1 Plate</a></h3>
                                    <span class="price">$25.00</span>
                                    <p>Roin a bibendum nibh. Nunc fermentum sit amet mi nec consequat. Praesent porttitor nulla sit amet dui lobortis...</p>
                                </div>
                            </div>
                        </div>
                        <div class="menu dt-sc-one-half">
                            <div class="dt-sc-one-third column first">
                                <div class="entry-thumb">
                                    <a href="#">
                                        <span class="border rotate">
                                        </span>
                                        <div class="border">
                                            <span class="top-right"></span>
                                            <img src="images/menu/menu-img2.jpg" alt="" title="" />
                                            <span class="code">Code:TOMFRY</span>
                                            <span class="bottom-left"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="dt-sc-two-third column">
                                <div class="entry-detail">
                                    <h3><a href="#">Fish and Salmon Eggs</a></h3>
                                    <span class="price">$25.00</span>
                                    <p>Roin a bibendum nibh. Nunc fermentum sit amet mi nec consequat. Praesent porttitor nulla sit amet dui lobortis...</p>
                                </div>
                            </div>
                        </div>
                        <div class="dt-sc-one-half menu">
                            <div class="dt-sc-one-third column first">
                                <div class="entry-thumb">
                                    <a href="#">
                                        <span class="border rotate">
                                        </span>
                                        <div class="border">
                                            <span class="top-right"></span>
                                            <img src="images/menu/menu-img3.jpg" alt="" title="" />
                                            <span class="code">Code:TOMFRY</span>
                                            <span class="bottom-left"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="dt-sc-two-third column">
                                <div class="entry-detail">
                                    <h3><a href="#">Little Rolls of Ham Stuffect</a></h3>
                                    <span class="price">$25.00</span>
                                    <p>Roin a bibendum nibh. Nunc fermentum sit amet mi nec consequat. Praesent porttitor nulla sit amet dui lobortis...</p>
                                </div>
                            </div>
                        </div>
                        <div class="menu dt-sc-one-half">
                            <div class="dt-sc-one-third column first">
                                <div class="entry-thumb">
                                    <a href="#">
                                        <span class="border rotate">
                                        </span>
                                        <div class="border">
                                            <span class="top-right"></span>
                                            <img src="images/menu/menu-img4.jpg" alt="" title="" />
                                            <span class="code">Code:TOMFRY</span>
                                            <span class="bottom-left"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="dt-sc-two-third column">
                                <div class="entry-detail">
                                    <h3><a href="#">Salad Greens and Vegetables</a></h3>
                                    <span class="price">$25.00</span>
                                    <p>Roin a bibendum nibh. Nunc fermentum sit amet mi nec consequat. Praesent porttitor nulla sit amet dui lobortis...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hr-line"> <div class="caroufred_pager menus_pager"></div> </div>
                    <div class="margin70"></div>
                </div>
                <section class="testimonial-wrapper grey-bg">
                    <div class="container">
                        <div class="aligncenter">
                            <span class="fa fa-star-o"></span> <span class="fa fa-star-o"></span> <span class="fa fa-star-o"></span><h2 class="block-title">Reviews</h2><span class="fa fa-star-o"></span> <span class="fa fa-star-o"></span> <span class="fa fa-star-o"></span>
                        </div>
                        <ul class="caroufred_reviews">
                            <li>
                                <figure class="testimonial-thumb">
                                    <div class="rounded">
                                        <a href="#"><img src="images/authour.jpg" alt="" title="" /></a>
                                    </div>
                                </figure>
                                <div class="testimonial-content-wrapper">
                                    <blockquote>" Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a large and a beautiful Lorem Ipsum passage "<cite><span>Steve Bucami</span><br />Cheif Chef in Alfa Restaurant</cite></blockquote>
                                </div>
                            </li>
                            <li>
                                <figure class="testimonial-thumb">
                                    <div class="rounded">
                                        <a href="#"><img src="images/authour1.jpg" alt="" title="" /></a>
                                    </div>
                                </figure>
                                <div class="testimonial-content-wrapper">
                                    <blockquote>" Aliquam erat volutpat. Morbi id gravida mauris, vel gravida arcu. Duis tristique sem justo. Donec dignissim ut arcu sed cursus. Nam sem lorem, volutpat eget turpis vitae, venenatis pretium odio. "<cite><span>Adam Walsh</span><br />Fresh Chef in Korala Hotel</cite></blockquote>
                                </div>
                            </li>
                            <li>
                                <figure class="testimonial-thumb">
                                    <div class="rounded">
                                        <a href="#"><img src="images/authour2.jpg" alt="" title="" /></a>
                                    </div>
                                </figure>
                                <div class="testimonial-content-wrapper">
                                    <blockquote>" Duis viverra aliquam quam vitae posuere. Sed ac vehicula nibh. Donec imperdiet adipiscing tortor, a euismod nisl. Vestibulum sit amet consectetur nisl, nec molestie dui. Donec vitae tincidunt ligula. "<cite><span>Michal Clark</span><br />Head Chef in Mona Restaurant</cite></blockquote>
                                </div>
                            </li>
                        </ul>                    
                    </div>
                </section>
                <div class="margin50"></div>@endsection
