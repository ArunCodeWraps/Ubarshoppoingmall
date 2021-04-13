<footer>
<!-- <div class="newsletter">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-6">
<p class="newstitle">Trade Alert to your inbox.</p>
<div class="newsbox">
<form name="newletterForm" method="post" action="subscribe.php" id="newletterForm">
<input type="hidden" name="subscribeform" value="yes">
<input type="text" name="email" placeholder="Enter Your Email Id..." class="required email int">
<button>Subscribe</button>
</form>
</div>
</div>

<div class="col-xs-12 col-sm-6 text-right social">
<a href="https://www.facebook.com/My-Desi-Pardesi-688353124658881/" target="_blank">
	<i class="fab fa-facebook-f"></i></a> 
<a href="https://www.linkedin.com/company/my-desi-pardesi" target="_blank">
	<i class="fab fa-linkedin-in"></i></a> 
</div>
</div>
</div>
</div> -->
<div class="ftmenu">
<div class="container">               
<div class="row">
<div class="col-xs-12 col-sm-4">
<div class="ftmenu1">
<h6>Customer Services</h6>
<a href="customercare">Customer Care Center</a>
<a href="services">Services</a> 
<a href="contactus">Contact Us</a> 
<!--<a href="reportabuse">Report Abuse</a>-->
<!--  <a href="faq.php">FAQ</a> -->
<!--  <a href="submitdispute">Submit a Dispute</a>
<a href="policiesrules">Policies &amp; Rules</a>
<a href="feedback">Give Your Feedback</a>-->
</div>
</div>
<div class="col-xs-12 col-sm-4">
<div class="ftmenu1">
<h6>Uber Shopping Mall</h6>
<a href="aboutus">About Us</a> 

<a href="terms-services">Terms of Service</a>
<a href="privacy-policy">Privacy Policy</a>

</div>
</div>
<div class="col-xs-12 col-sm-4">
<div class="ftmenu1">
<h6>Trade on My Uber Shopping Mall</h6>
<a href="allcategory">By Category</a> 
<a href="allsupplier">By Supplier</a> 
<!-- <a href="javascript:void(0);">Request Quotations</a> -->
<a href="news-insights">News &amp; Insights</a> 
</div>
</div>

</div>
</div>
</div>
<div class="copy">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-6">© 2021  Uber Shoping Mall. All rights reserved. </div>
<div class="col-xs-12 col-sm-6 text-right"><img src="img/card.jpg" class="img-fluid"></div>
</div>
</div>
</div>
</footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/autoplay.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/myjs.js"></script>
  


<script type="text/javascript">
	$(function(){
  var navbar = $('.header-nav');
  $(window).scroll(function(){
    if($(window).scrollTop() <= 40){
      navbar.removeClass('scrolled');
    } else {
      navbar.addClass('scrolled');
    }
  });
});
</script>

<script type="text/javascript">
		$(function(){
			$('.link_wrapper').owlCarousel({
				nav:true,
				loop:true,
				slideBy:'page',
				rewind:false,
				responsive:{
					0:{items:1},
					480:{items:1},
					600:{items:3},
					1000:{items:3}
				},
				smartSpeed:500,
				autoplay:true,
				navText:['<svg viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></svg>','<svg viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path></svg>']
			});
		});

		$(function(){
			$('.more_articles').owlCarousel({
				nav:true,
				loop:true,
				slideBy:'page',
				rewind:false,
				responsive:{
					0:{items:2},
					480:{items:2},
					600:{items:4},
					1000:{items:8}
				},
				smartSpeed:500,
				autoplay:true,
				navText:['<svg viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></svg>','<svg viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path></svg>']
			});
		});

		$(function(){
			$('.table_wrapper').owlCarousel({
				nav:true,
				loop:true,
				slideBy:'page',
				rewind:false,
				responsive:{
					0:{items:1},
					480:{items:1},
					600:{items:1},
					1000:{items:1}
				},
				smartSpeed:500,
				autoplay:true,
				navText:['<svg viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></svg>','<svg viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path></svg>']
			});
		});
	</script>

	<script type="text/javascript">
		$(function(){
		  var tickerLength = $('.news-update ul li').length;
		  var tickerHeight = $('.news-update ul li').outerHeight();
		  $('.news-update ul li:last-child').prependTo('.news-update ul');
		  $('.news-update ul').css('marginTop',-tickerHeight);
		  function moveTop(){
		    $('.news-update ul').animate({
		      top : -tickerHeight
		    },600, function(){
		     $('.news-update ul li:first-child').appendTo('.news-update ul');
		      $('.news-update ul').css('top','');
		    });
		   }
		  setInterval( function(){
		    moveTop();
		  }, 3000);
		  });
	</script>
	
	

<script type="text/javascript">
	$(document).ready(function(){
		$(".dropdown").hover(            
			function() {
				$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("100");
				$(this).toggleClass('open');        
			},
			function() {
				$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("100");
				$(this).toggleClass('open');       
			}
			);
	});
</script>

<script type="text/javascript">
	$(document).ready(function (){
		$('.dropSelect').niceSelect();
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){
	
	// Lift card and show stats on Mouseover
	$('.product-card').hover(function(){
			$(this).addClass('animate');
			$('div.carouselNext, div.carouselPrev').addClass('visible');			
		 }, function(){
			$(this).removeClass('animate');			
			$('div.carouselNext, div.carouselPrev').removeClass('visible');
	});	
	
	// Flip card to the back side
	$('.view_details').click(function(){		
		$('div.carouselNext, div.carouselPrev').removeClass('visible');
		$('.product-card').addClass('flip-10');
		setTimeout(function(){
			$('.product-card').removeClass('flip-10').addClass('flip90').find('div.shadow').show().fadeTo( 80 , 1, function(){
				$('.product-front, .product-front div.shadow').hide();			
			});
		}, 50);
		
		setTimeout(function(){
			$('.product-card').removeClass('flip90').addClass('flip190');
			$('.product-back').show().find('div.shadow').show().fadeTo( 90 , 0);
			setTimeout(function(){				
				$('.product-card').removeClass('flip190').addClass('flip180').find('div.shadow').hide();						
				setTimeout(function(){
					$('.product-card').css('transition', '100ms ease-out');			
					$('.cx, .cy').addClass('s1');
					setTimeout(function(){$('.cx, .cy').addClass('s2');}, 100);
					setTimeout(function(){$('.cx, .cy').addClass('s3');}, 200);				
					$('div.carouselNext, div.carouselPrev').addClass('visible');				
				}, 100);
			}, 100);			
		}, 150);			
	});			
	
	// Flip card back to the front side
	$('.flip-back').click(function(){		
		
		$('.product-card').removeClass('flip180').addClass('flip190');
		setTimeout(function(){
			$('.product-card').removeClass('flip190').addClass('flip90');
	
			$('.product-back div.shadow').css('opacity', 0).fadeTo( 100 , 1, function(){
				$('.product-back, .product-back div.shadow').hide();
				$('.product-front, .product-front div.shadow').show();
			});
		}, 50);
		
		setTimeout(function(){
			$('.product-card').removeClass('flip90').addClass('flip-10');
			$('.product-front div.shadow').show().fadeTo( 100 , 0);
			setTimeout(function(){						
				$('.product-front div.shadow').hide();
				$('.product-card').removeClass('flip-10').css('transition', '100ms ease-out');		
				$('.cx, .cy').removeClass('s1 s2 s3');			
			}, 100);			
		}, 150);			
		
	});	

	
	/* ----  Image Gallery Carousel   ---- */
	
	var carousel = $('.carousel ul');
	var carouselSlideWidth = 335;
	var carouselWidth = 0;	
	var isAnimating = false;
	
	// building the width of the casousel
	$('.carousel li').each(function(){
		carouselWidth += carouselSlideWidth;
	});
	$(carousel).css('width', carouselWidth);
	
	// Load Next Image
	$('div.carouselNext').on('click', function(){
		var currentLeft = Math.abs(parseInt($(carousel).css("left")));
		var newLeft = currentLeft + carouselSlideWidth;
		if(newLeft == carouselWidth || isAnimating === true){return;}
		$('.carousel ul').css({'left': "-" + newLeft + "px",
							   "transition": "300ms ease-out"
							 });
		isAnimating = true;
		setTimeout(function(){isAnimating = false;}, 300);			
	});
	
	// Load Previous Image
	$('div.carouselPrev').on('click', function(){
		var currentLeft = Math.abs(parseInt($(carousel).css("left")));
		var newLeft = currentLeft - carouselSlideWidth;
		if(newLeft < 0  || isAnimating === true){return;}
		$('.carousel ul').css({'left': "-" + newLeft + "px",
							   "transition": "300ms ease-out"
							 });
	    isAnimating = true;
		setTimeout(function(){isAnimating = false;}, 300);			
	});
});
</script>
	
<script type="text/javascript">
	$(document).ready(function() {
		    var slider = $(".product-detail-slider");
		    var thumb = $(".product-thumb-slider");
		    var slidesPerPage = 4; //globaly define number of elements per page
		    var syncedSecondary = true;
		    slider.owlCarousel({
		        items: 1,
		        slideSpeed: 2000,
		        nav: false,
		        autoplay: false, 
		        dots: false,
		        loop: true,
		        responsiveRefreshRate: 200
		    }).on('changed.owl.carousel', syncPosition);
		    thumb
		        .on('initialized.owl.carousel', function() {
		            thumb.find(".owl-item").eq(0).addClass("current");
		        })
		        .owlCarousel({
		            items: slidesPerPage,
		            dots: false,
		            nav: true,
		            item: 4,
		            smartSpeed: 200,
		            slideSpeed: 500,
		            slideBy: slidesPerPage, 
		        	navText: ['<svg width="18px" height="18px" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="25px" height="25px" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
		            responsiveRefreshRate: 100
		        }).on('changed.owl.carousel', syncPosition2);
		    function syncPosition(el) {
		        var count = el.item.count - 1;
		        var current = Math.round(el.item.index - (el.item.count / 2) - .5);
		        if (current < 0) {
		            current = count;
		        }
		        if (current > count) {
		            current = 0;
		        }
		        thumb
		            .find(".owl-item")
		            .removeClass("current")
		            .eq(current)
		            .addClass("current");
		        var onscreen = thumb.find('.owl-item.active').length - 1;
		        var start = thumb.find('.owl-item.active').first().index();
		        var end = thumb.find('.owl-item.active').last().index();
		        if (current > end) {
		            thumb.data('owl.carousel').to(current, 100, true);
		        }
		        if (current < start) {
		            thumb.data('owl.carousel').to(current - onscreen, 100, true);
		        }
		    }
		    function syncPosition2(el) {
		        if (syncedSecondary) {
		            var number = el.item.index;
		            slider.data('owl.carousel').to(number, 100, true);
		        }
		    }
		    thumb.on("click", ".owl-item", function(e) {
		        e.preventDefault();
		        var number = $(this).index();
		        slider.data('owl.carousel').to(number, 300, true);
		    });


            $(".qtyminus").on("click",function(){
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    if (parseInt(now) -1> 0)
                    { now--;}
                    $(".qty").val(now);
                }
            })            
            $(".qtyplus").on("click",function(){
                var now = $(".qty").val();
                if ($.isNumeric(now)){
                    $(".qty").val(parseInt(now)+1);
                }
            });
		});
</script>

<script type="text/javascript">
	$('.like-btn').on('click', function() {
   $(this).toggleClass('is-active');
});

 $('.minus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

    		if (value > 1) {
    			value = value - 1;
    		} else {
    			value = 0;
    		}

        $input.val(value);

    	});

    	$('.plus-btn').on('click', function(e) {
    		e.preventDefault();
    		var $this = $(this);
    		var $input = $this.closest('div').find('input');
    		var value = parseInt($input.val());

    		if (value < 100) {
      		value = value + 1;
    		} else {
    			value =100;
    		}

    		$input.val(value);
    	});
</script>

</body>
</html>