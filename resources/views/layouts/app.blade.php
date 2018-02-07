<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js"> 
@include('layouts.header')

<body>
	<!-- main-content div Starts here -->
	<div class="main-content">
        <!-- wrapper div Starts here -->
        <div class="wrapper">
		@include('layouts.nav')

   @if (session('csrf_error'))
    
   <div class="container">
        <div class="row">
        <div class="info-container-main">
	<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
		{{ session('csrf_error') }} 
	</div>
	</div>
	</div>
	</div>
	@endif
	@if (session()->has('success_message'))
	<div class="container">
        <div class="row">
				<div class="info-container-main">
            <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('success_message') }}
            </div>
            </div>
            </div>
            </div>
        @endif

        @if (session()->has('error_message'))
        <div class="container">
        <div class="row">
        <div class="info-container-main">
            <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('error_message') }}
            </div>
            </div>
            </div>
            </div>
        @endif
				
      @yield('content')

       @include('layouts.footer')
   
        <!-- wrapper div Ends here -->
    </div>
   
    <!-- main-content div Ends here -->
</div>

@include('layouts.signinup')
    <!-- Java Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery-easing-1.3.js')}}"></script>    

	<script type="text/javascript" src="{{ asset('js/superfish.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/hoverIntent.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.slicknav.min.js')}}"></script>
    
	<script type="text/javascript" src="{{ asset('js/jquery.carouFredSel-6.2.1-packed.js')}}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.tabs.min.js')}}"></script>
    
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="{{ asset('js/jquery.gmap.min.js')}}"></script>
    
	<script type="text/javascript" src="{{ asset('js/twitter/jquery.tweet.min.js')}}"></script>
    
	<!-- Revolution Slider Starts -->
    <script src="{{ asset('js/revolution/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
	jQuery(document).ready(function($){	
	if($.fn.cssOriginal != undefined)
		$.fn.css = $.fn.cssOriginal;

		var api = $('.rev_slider').revolution(
		{
			delay:9000,
			startwidth:940,
			startheight:540,
	
			onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off
	
			thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
			thumbHeight:50,
			thumbAmount:3,
	
			hideThumbs:200,
			navigationType:"none",				// bullet, thumb, none
			navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none
	
			navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
	
			navigationHAlign:"center",				// Vertical Align top,center,bottom
			navigationVAlign:"bottom",					// Horizontal Align left,center,right
			navigationHOffset:30,
			navigationVOffset:-40,
	
			soloArrowLeftHalign:"left",
			soloArrowLeftValign:"center",
			soloArrowLeftHOffset:-10,
			soloArrowLeftVOffset:0,
	
			soloArrowRightHalign:"right",
			soloArrowRightValign:"center",
			soloArrowRightHOffset:-10,
			soloArrowRightVOffset:0,
	
			touchenabled:"on",						// Enable Swipe Function : on/off
	
			stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
			stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
	
			hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
			hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
			hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value
	
			fullWidth:"off",
	
			shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
		});	
	});

	
	
	
	
	
</script>
	
	
    <!-- Revolution Slider Ends -->
    
	<!-- Style Picker Starts -->
	<script src="{{ asset('js/jquery.cookie.js')}}"></script> 
    <!-- Style Picker Ends -->
    
    <script src="{{ asset('js/custom.js')}}"></script>

<script type="text/javascript">
/*/<![CDATA[
(function() {
var _analytics_scr = document.createElement('script');
_analytics_scr.type = 'text/javascript'; _analytics_scr.async = true; _analytics_scr.src = 'http://wedesignthemes.com/_Incapsula_Resource?SWJIYLWA=2977d8d74f63d7f8fedbea018b7a1d05&amp;ns=14';
var _analytics_elem = document.getElementsByTagName('script')[0]; _analytics_elem.parentNode.insertBefore(_analytics_scr, _analytics_elem);
})();
// ]]>*/
</script>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script src="{{ asset('js/user.modal.js')}}"></script> <!-- Gem jQuery -->
@yield('extra-js')
</body>
</html>
