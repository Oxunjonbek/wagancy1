/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Menu
4. Init Home Slider
5. Init Milestones
6. Init Isotope
7. Init Model Slider


******************************/

$(document).ready(function()
{
	"use strict";

	/* 

	1. Vars and Inits

	*/

	var header = $('.header');
	var ctrl = new ScrollMagic.Controller();

	setHeader();

	$(window).on('resize', function()
	{
		setHeader();
			
	});

	$(document).on('scroll', function()
	{
		setHeader();
	});

	initMenu();
	initHomeSlider();
	initMilestones();
	initIsotope();
	initModelSlider();

	/* 

	2. Set Header

	*/

	function setHeader()
	{
		if($(window).scrollTop() > 91)
		{
			header.addClass('scrolled');
		}
		else
		{
			header.removeClass('scrolled');
		}
	}

	/* 

	3. Init Menu

	*/

	function initMenu()
	{
		if($('.menu').length)
		{
			var menu = $('.menu');
			var hamburger = $('.hamburger');
			var close = $('.menu_close');

			hamburger.on('click', function()
			{
				menu.toggleClass('active');
			});

			close.on('click', function()
			{
				menu.toggleClass('active');
			});
		}
	}

	/* 

	4. Init Home Slider

	*/

	function initHomeSlider()
	{
		if($('.home_slider').length)
		{
			var homeSlider = $('.home_slider');
			homeSlider.owlCarousel(
			{
				items:1,
				loop:true,
				autoplay:true,
				smartSpeed:1200,
				mouseDrag:false,
				nav:false
			});	
		}
	}

	
	function initMilestones()
	{
		if($('.milestone_counter').length)
		{
			var milestoneItems = $('.milestone_counter');

	    	milestoneItems.each(function(i)
	    	{
	    		var ele = $(this);
	    		var endValue = ele.data('end-value');
	    		var eleValue = ele.text();

	    		/* Use data-sign-before and data-sign-after to add signs
	    		infront or behind the counter number */
	    		var signBefore = "";
	    		var signAfter = "";

	    		if(ele.attr('data-sign-before'))
	    		{
	    			signBefore = ele.attr('data-sign-before');
	    		}

	    		if(ele.attr('data-sign-after'))
	    		{
	    			signAfter = ele.attr('data-sign-after');
	    		}

	    		var milestoneScene = new ScrollMagic.Scene({
		    		triggerElement: this,
		    		triggerHook: 'onEnter',
		    		reverse:false
		    	})
		    	.on('start', function()
		    	{
		    		var counter = {value:eleValue};
		    		var counterTween = TweenMax.to(counter, 4,
		    		{
		    			value: endValue,
		    			roundProps:"value", 
						ease: Circ.easeOut, 
						onUpdate:function()
						{
							document.getElementsByClassName('milestone_counter')[i].innerHTML = signBefore + counter.value + signAfter;
						}
		    		});
		    	})
			    .addTo(ctrl);
	    	});
		}
	}

	/* 

	6. Init Isotope

	*/

	function initIsotope()
	{
		if($('.models_container').length)
		{
			var models = $('.models_container');
			var w = $(window).innerWidth();

			/*if(w < 992)
			{
				models.isotope(
				{
					itemSelector:'.model',
					masonry:
					{
						columnWidth: models.width() / 2
					}
				});
			}
			else if(w < 576)
			{
				models.isotope(
				{
					itemSelector:'.model',
					masonry:
					{
						columnWidth: models.width()
					}
				});
			}
			else
			{
				models.isotope(
				{
					itemSelector:'.model',
					masonry:
					{
						columnWidth: models.width() / 5
					}
				});
			}*/

			// Filtering
	        $('.item_filter_btn').on('click', function()
	        {
	        	$('.item_filter_btn').removeClass('active');
	        	$(this).addClass('active');
		        var filterValue = $(this).attr('data-filter');
				models.isotope(
				{
					filter: filterValue
				});
	        });
		}
	}

	/* 

	7. Init Model Slider

	*/

	function initModelSlider()
	{
		if($('.model_slider').length)
		{
			var modelSlider = $('.model_slider');
			modelSlider.owlCarousel(
			{
				items:1,
				loop:true,
				autoplay:true,
				nav:false,
				dots:false
			});

			// Custom Nav
			if($('.model_slider_prev').length)
			{
				var prev = $('.model_slider_prev');
				prev.on('click', function()
				{
					modelSlider.trigger('prev.owl.carousel');
				});
			}

			if($('.model_slider_next').length)
			{
				var next = $('.model_slider_next');
				next.on('click', function()
				{
					modelSlider.trigger('next.owl.carousel');
				});
			}
		}
	}

});