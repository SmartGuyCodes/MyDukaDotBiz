(function ($) {
 	"use strict";

	/*---------------------
     TOP Menu Stick
    --------------------- */
	var s = $("#sticker");
	var pos = s.position();					   
	$(window).on('scroll',function() {
		var windowpos = $(window).scrollTop();
		if (windowpos > pos.top) {
		s.addClass("stick");
		} else {
			s.removeClass("stick");	
		}
	});	 
 
	/*----------------------------
    tooltip
------------------------------ */
    $('[data-toggle="tooltip"]').tooltip({
        animated: 'fade',
        placement: 'top',
        container: 'body'
    });

	/*jQuery MeanMenu*/
	jQuery('nav#dropdown').meanmenu();	
	
	/* wow js active */
	new WOW().init();
 
	/*product-crousel */
  	$(".product-crousel").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 3,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,3],
	  itemsDesktopSmall : [980,3],
	  itemsTablet: [768,2],
	  itemsMobile : [479,1],
    });

	/* product-crousel */
	$(".features-crousel").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 4,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,4],
	  itemsDesktopSmall : [980,3],
	  itemsTablet: [768,2],
	  itemsMobile : [479,1],
    });

   	$(".best-seller-crousel").owlCarousel({
		  autoPlay: false,
		  slideSpeed:2000,
		  pagination:false,
		  navigation:true,
		  items : 1,
		  /* transitionStyle : "fade", */    /* [This code for animation ] */
		  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		  singleItem: true,
  	});

	$(".brand-crousel").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 6,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,5],
	  itemsDesktopSmall : [980,4],
	  itemsTablet: [768,2],
	  itemsMobile : [479,1],
    });

	$(".recent-post-crousel").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 4,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,4],
	  itemsDesktopSmall : [980,3],
	  itemsTablet: [768,2],
	  itemsMobile : [479,1],
  	});

	/*product-crousel */
  	$(".new-product-crousel").owlCarousel({
      autoPlay: false, 
	  slideSpeed:2000,
	  pagination:false,
	  navigation:true,	  
      items : 3,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,3],
	  itemsDesktopSmall : [980,2],
	  itemsTablet: [768,2],
	  itemsMobile : [479,1],
  	});
  
	$(".product-crousel-2").owlCarousel({
		  autoPlay: false,
		  slideSpeed:2000,
		  pagination:false,
		  navigation:true,
		  items : 4,
		  /* transitionStyle : "fade", */    /* [This code for animation ] */
		  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		  itemsDesktop : [1199,4],
		  itemsDesktopSmall : [980,3],
		  itemsTablet: [768,2],
		  itemsMobile : [479,1],
	  });

	$(".single-product-crousel").owlCarousel({
	  autoPlay: false,
	  slideSpeed:2000,
	  pagination:true,
	  navigation:false,
	  items : 1,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	  singleItem: true,
	});

	/*price-slider active */
	$( "#slider-range" ).slider({
	   range: true,
	   min: 40,
	   max: 600,
	   values: [ 60, 570 ],
	   slide: function( event, ui ) {
		$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	   }
	});

	$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
	   " - $" + $( "#slider-range" ).slider( "values", 1 ) );  

	/*--------------------------
	Category Menu
	---------------------------- */
	$('.rx-parent').on('click', function(){
		$('.rx-child').slideToggle();
		$(this).toggleClass('rx-change');
	});

	$(".embed-responsive iframe").addClass("embed-responsive-item");
	$(".carousel-inner .item:first-child").addClass("active");	
	
	/*--------------------------
		category left menu
	---------------------------- */
	$('.category-heading').on('click', function(){
	 	$('.category-menu-list').slideToggle(300);
	});	 

	/*--------------------------
	 scrollUp
	---------------------------- */
	$.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    }); 

	/*---------------------
	 elevateZoom
	--------------------- */  
    $('.zoom1').elevateZoom();

	/*----- cart-plus-minus-button -----*/
	$(".cart-plus-minus").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
	$(".qtybutton").on("click", function() {
		var $button = $(this);
		var oldValue = $button.parent().find("input").val();
		if ($button.text() == "+") {
		  var newVal = parseFloat(oldValue) + 1;
		} else {
		   // Don't allow decrementing below zero
		  if (oldValue > 0) {
			var newVal = parseFloat(oldValue) - 1;
			} else {
			newVal = 0;
		  }
		}
		$button.parent().find("input").val(newVal);
	});

	/*
	 *Search Button
	 */
	$(".input-group-btn .dropdown-menu li a").click(function(){
		var selText = $(this).html();

		//working version - for multiple buttons //
		$(this).parents('.input-group-btn').find('.btn-search').html(selText);
	});

	//Search
	$("#duka-search").autocomplete({
		minLength: 1,
		source: function (request, response){
			$.ajax({
				url: "/search/item",
				data: {term: request.term},
				dataType: "json",
				success: function (jsonDataReceivedFromServer){
					response ($.map(jsonDataReceivedFromServer, function (item){
						// NOTE: BRACKET START IN THE SAME LINE AS RETURN IN THE FOLLOWING LINE
						return {
							id: item.ProductID, value: item.ProductName,
						};
					}));
				}
			});0
		},
		create: function () {
			$(this).data('ui-autocomplete')._renderItem = function (ul, item) {
				console.log(item);
				return $('<li>').append('<a href="/products/profile/' +item.id + '" >' + item.label + '</a>') . appendTo(ul);
			};
		}
	});

	//Cart
	$(".add-to-cart, .prod-to-cart").submit(function(e){//user clicks form submit button
		var formData = $(this).serialize(); //prepare the form for ajax post
		var url = $(this).attr('action');
		$('#add-cart-btn').attr('value', 'Please wait...');

		$.ajax({//make ajax request to cart process.php
				url: url,
				type: "POST",
				dataType: 'json',
				data: formData
			})
			.success(function(data){
				$(".notify").html(data.items);

				$('#cart-name').html(data.cart.details);
				$('#cart-price').html("Price: " + data.cart.price);
				$('#cart-qty').html("Quantity: " + data.cart.qty);
				document.getElementById("cart-img").src = 'https://www.myduka.biz/uploads/' + data.cart.image;
				//document.getElementById("cart-img").src = 'http://uploads.myduka.biz/' + data.cart.image;

				$('#cart-modal').modal('show');
			});
		e.preventDefault();
	});

	//Buy now modal
	$('a[rel=modal]').on('click', function(evt) {
		evt.preventDefault();
		var modal = $('#buy-now-modal').modal();
		modal.find('.modal-body').load($(this).attr('href'), function (responseText, textStatus) {
			if(textStatus === 'success' || textStatus === 'notmodified'){
				modal.show();
			}
		});
	});

	//Add to wishlist (All display)
	$('.wishlist-anchor-item').click(function(e) {
		e.preventDefault();
		var thisdata = $(this).attr('data-wishlist');

		if(thisdata = 'add'){
			//take the user and product data. Post it to db
			$.ajax({
				url: '/cart/add-wish',
				data: {
					user: $(this).attr('data-userID'),
					product: $(this).attr('data-productID'),
					price: $(this).attr('data-price'),
					name: $(this).attr('data-name')
				},
				error: function(data) {
					alert(data.msg);
					//sort alerts using http://ned.im
				},
				dataType: 'json',
				success: function(data) {
					alert(data.msg);
				},
				type: 'POST'
			});
		}
	});

	//Remove from cart
	$("#confirm-order").on('click', 'a.remove-item', function(e) {
		e.preventDefault();
		var pcode = $(this).attr("data-code");
		$(this).parent().fadeOut();
		$.getJSON( "/cart/remove/"+pcode, {"remove_code":pcode} , function(){
			location.reload();
		});
	});

	//confirm order
	$('#confirm-order').submit(function(e){
		var dataForm = $(this).serialize();
		var url = $(this).attr('action');

		$.ajax({
			url : url,
			type: "POST",
			data: dataForm
			//dataType: "json"
		}).done(function(){
			//add some info displayer here
			$('.status').css('display', 'block').html('<p class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Processin order...</p>');
			location.reload();
		});
		e.preventDefault();
	});

	//Register myDUKA user
	// Attach a submit handler to the user registration form
	$( "#user-reg-form" ).submit(function(e) {
		// Stop form from submitting normally
		e.preventDefault();

		// Get some values from elements on the page and then prepare the form for ajax post
		var $form = $(this),
			fname = $form.find( "input[name='fname']" ).val(),lname = $form.find( "input[name='lname']" ).val(),
			mail = $form.find( "input[name='mail']" ).val(), phone = $form.find( "input[name='phone']" ).val(),
			pwd = $form.find( "input[name='pwd']" ).val(), url = $form.attr( "action" );

		$.ajax({
			url: url,
			type: 'POST',
			//dataType: 'json',
			data: {
				fname: fname,
				lname: lname,
				mail: mail,
				phone: phone,
				pwd: pwd
			},
			success: function(data) {
				alert(data.msg);
				if(data.msg == 'Success.Check your mail to confirm your registration'){
					$('.status').css('display', 'block').html('<p class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Success :-)</p>');
					location.reload();
				}
				else if(data.msg == 'Sorry, that email already exist'){
					$('.status').css('display', 'block').html('<p class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Sorry, that email already exist</p>');
				}
			},
			error: function(data) {
				//how to pass js data var to html tag in js script!!
				//alert(data.msg);
				$('.status').css('display', 'block').html('<p class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>An error has occurred</p>');
			}
		});
	});

	$('#user-log-form').submit(function(e) {
		e.preventDefault();
		$('#konto-loguj-bnt').attr('value', 'Please wait...');

		var $form = $( this),
			mail = $form.find( "input[name='mail']" ).val(),
			pwd = $form.find( "input[name='pwd']" ).val(),
			url = $form.attr( "action" );
		$.ajax({
			url: url,
			data: {
				mail: mail,
				pwd: pwd
			},
			error: function(data) {
				$('.status').css('display', 'block').html('<p class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong> Error :-( </strong></p>');
				location.reload();
			},
			dataType: 'json',
			success: function(data) {
				$('.status').css('display', 'block').html('<p class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong> Success! ;-) </strong></p>');
				location.reload();
			},
			type: 'POST'
		});
	});

	//Checkout access options
	$("#checkout-reg-form" ).submit(function(e) {
		// Stop form from submitting normally
		e.preventDefault();
		$('.status').attr('value', 'Please wait...');

		// Get some values from elements on the page and then prepare the form for ajax post
		var $form = $(this),
			fname = $form.find( "input[name='fname']" ).val(),lname = $form.find( "input[name='lname']" ).val(),
			mail = $form.find( "input[name='mail']" ).val(), phone = $form.find( "input[name='phone']" ).val(),
			pwd = $form.find( "input[name='pwd']" ).val(), url = $form.attr( "action" );

		$.ajax({
			url: url,
			data: {
				fname: fname,
				lname: lname,
				mail: mail,
				phone: phone,
				pwd: pwd
			},
			error: function(data) {
				//how to pass js data var to html tag in js script!!
				$('.status').css('display', 'block').html('<p class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>An error has occurred</p>');
			},
			dataType: 'json',
			success: function(data){
				//get the last inserted order id
				//alert(data.msg);
				$('.status').css('display', 'block').html('<p class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Success :-)</p>');
				window.location = '/order/payment-details';
			},
			type: 'POST'
		});
	});

	$('#checkout-log-form').submit(function(e) {
		e.preventDefault();
		$('.status').attr('value', 'Please wait...');

		var $form = $( this),
			mail = $form.find( "input[name='mail']" ).val(),
			pwd = $form.find( "input[name='pwd']" ).val(),
			url = $form.attr( "action" );
		$.ajax({
			url: url,
			data: {
				mail: mail,
				pwd: pwd
			},
			error: function(data) {
				$('.status').css('display', 'block').html('<p class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong> Error :-( </strong></p>');
				location.reload();
			},
			dataType: 'json',
			success: function(data) {
				$('.status').css('display', 'block').html('<p class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong> Success! ;-) </strong></p>');
				window.location = '/order/payment-details';
			},
			type: 'POST'
		});
	});

	$('#user-update-form').submit(function(e) {
		e.preventDefault();
		$('.status').attr('value', 'Please wait...');

		var $form = $( this),
			fname = $form.find( "input[name='fname']" ).val(),
			lname = $form.find( "input[name='lname']" ).val(),
			mail = $form.find( "input[name='mail']" ).val(),
			phone = $form.find( "input[name='tel']" ).val(),
			street = $form.find( "input[name='street']" ).val(),
			city = $form.find( "input[name='city']" ).val(),
			county = $form.find( "input[name='county']" ).val(),
			address = $form.find( "input[name='address']" ).val(),
			address2 = $form.find( "input[name='address2']" ).val(),
			url = $form.attr( "action" );
		$.ajax({
			url: url,
			data: {
				fname: fname,
				lname: lname,
				mail: mail,
				phone: phone,
				street: street,
				city: city,
				county: county,
				address: address,
				address2: address2
			},
			error: function(data) {
				$('.status').css('display', 'block').html('<p class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Error :-(</p>');
				//location.reload();
			},
			dataType: 'json',
			success: function(data) {
				$('.status').css('display', 'block').html('<p class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your account has been successfully updated. ;-)</p>');
				location.reload();
			},
			type: 'POST'
		});
	});

	$('#confirm-order-form').submit(function(e) {
		e.preventDefault();
		$('.status').attr('value', 'Please wait...');

		var $form = $( this),
			fname = $form.find( "input[name='fname']" ).val(),
			lname = $form.find( "input[name='lname']" ).val(),
			mail = $form.find( "input[name='mail']" ).val(),
			phone = $form.find( "input[name='tel']" ).val(),
			street = $form.find( "input[name='street']" ).val(),
			city = $form.find( "input[name='city']" ).val(),
			county = $form.find( "input[name='county']" ).val(),
			address = $form.find( "input[name='address']" ).val(),
			address2 = $form.find( "input[name='address2']" ).val(),
			delivery = $form.find( "select[name='delivery-location']" ).val(),
			items = $form.find("input[name='item-details']").val(),
			total = $form.find( "input[name='totalAmount']" ).val(),
			currency = $form.find( "input[name='currency']" ).val(),
			url = $form.attr( "action" );
		$.ajax({
			url: url,
			data: {
				fname: fname,
				lname: lname,
				mail: mail,
				phone: phone,
				street: street,
				city: city,
				county: county,
				address: address,
				address2: address2,
				delivery: delivery,
				currency: currency,
				items: items,
				total: total
			},
			error: function(data) {
				$('.status').css('display', 'block').html('<p class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Error :-(</p>');
				//location.reload();
			},
			dataType: 'json',
			success: function(data) {
				$('.status').css('display', 'block').html('<p class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Your order has been successfully submitted. ;-)</p>');
				//alert(data.msg);
				window.location = '/payments/main/' + data.msg;
			},
			type: 'POST'
		});
	});

	//Payment options
	$('#cod-payment-form').submit(function(e) {
		e.preventDefault();
		$('#cod-submit-btn').attr('value', 'Please wait...');

		var $form = $( this),
		method = $form.find( "input[name='method']" ).val(),
		orderCost = $form.find( "input[name='amount']" ).val(),
		shipping = $form.find( "input[name='shipping']" ).val(),
		url = $form.attr( "action" );
		$.ajax({
			url: url,
			data: {
				method: method,
				orderCost: orderCost,
				shipping: shipping
			},
			dataType: 'json',
			type: 'POST',
			error: function(data) {
				alert(data.msg);
				window.location = '/payments/failed';
			},
			success: function(data) {
				alert(data.msg);
				window.location = '/payments/success/' + data.msg;
			}
		});
	});

	$('#mpesa-payment-form').submit(function(e) {
		$('#mpesa-submit-btn').attr('value', 'Please wait...');
		e.preventDefault();
		var $form = $( this),
			tracker = $form.find( "input[name='order-tracker']" ).val(),
			method = $form.find( "input[name='method']" ).val(),
			mpesano = $form.find( "input[name='mpesano']" ).val(),
			mpesacode = $form.find( "input[name='mpesacode']" ).val(),
			orderCost = $form.find( "input[name='total']" ).val(),
			shipping = $form.find( "input[name='shipping']" ).val(),
			url = $form.attr( "action" );
		$.ajax({
			url: url,
			data: {
				tracker: tracker,
				method: method,
				mpesano: mpesano,
				orderCost: orderCost,
				shipping: shipping,
				code: mpesacode
			},
			dataType: 'json',
			type: 'POST',
			error: function(data) {
				alert(data.msg);
				window.location = '/payments/failed';
			},
			success: function(data) {
				alert(data.msg);
				window.location = '/payments/success/' + data.msg;
			}
		});
	});

	//RTB Data Binder
	// $('.note').countdown('2016/10/17',function(e){
	//	 $(this).html(e.strftime('%w Weeks %d Days %H:%M:%S'));
	// });

	$('[data-countdown]').each(function(){
		var $this = $(this), finalDate = $(this).data('countdown');
		$this.countdown(finalDate, function(e){
			$this.html('Tik tak: ' + e.strftime('%w Week(s) %d Day(s) %H:%M:%S') + ' remaining to the end of this auction.');
		});
	});

	//Bids table on the product profile
	//$('#bids-tbl').DataTable();

	//Remotely load bids table with bids data
	$('#product-profile-tabs').on('click', '#profile-tabs a', function (e) {
		e.preventDefault();
		var url = $(this).attr("data-url");

		if(typeof url !== "undefined"){
			var pane = $(this), href = this.hash;

			//ajax load from data-url
			$(href).load(url, function(result){
				pane.tab('show');
			});
		}
		else{
			$(this).tab('show');
		}
	});
})(jQuery);