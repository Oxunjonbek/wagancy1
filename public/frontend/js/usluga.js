/* JS Document */

/******************************

[Table of Contents]

1. Vars and Inits
2. Set Header
3. Init Menu
4. Init Scrolling
5. Init Google Map


******************************/

$(document).ready(function()
{
	"use strict";

	/* 

	1. Vars and Inits

	*/

	var header1 = $('.header1');
	var map;

	setHeader1();

	$(window).on('resize', function()
	{
		setHeader1();

		setTimeout(function()
		{
			$(window).trigger('resize.px.parallax');
		}, 375);

			
	});

	$(document).on('scroll', function()
	{
		setHeader1();
	});

	/* 

	2. Set Header

	*/

	function setHeader1()
	{

		if($(window).scrollTop() > window.innerHeight)
		{
			header1.addClass('menu_2_full');
		}
		else
		{
			header1.removeClass('menu_2_full');
		}
	}

});