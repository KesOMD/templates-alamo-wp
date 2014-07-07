$(document).ready(function() {
	$(window).scroll(function()
	{
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) )
		{
				
		}
		else
		{
			if ($(this).scrollTop() > 820)
			{
				$('#rs-bar').addClass('sharing-fixed');
			}
			else
			{
				$('#rs-bar').removeClass('sharing-fixed');
			}
		}
			
	});

$('img.rounded').one('load',function () {
	var img = $(this);
	var img_width = img.width();
	var img_height = img.height();
	
	// build wrapper
	var wrapper = $('<div class="rounded_wrapper"></div>');
	wrapper.width(img_width);
	wrapper.height(img_height);
	
	// move CSS properties from img to wrapper
	wrapper.css('float', img.css('float'));
	img.css('float', 'none')
	
	wrapper.css('margin-right', img.css('margin-right'));
	img.css('margin-right', '0')

	wrapper.css('margin-left', img.css('margin-left'));
	img.css('margin-left', '0')

	wrapper.css('margin-bottom', img.css('margin-bottom'));
	img.css('margin-bottom', '0')

	wrapper.css('margin-top', img.css('margin-top'));
	img.css('margin-top', '0')

	wrapper.css('display', 'block');
	img.css('display', 'block')

	// IE6 fix (when image height or width is odd)
	if ($.browser.msie && $.browser.version == '6.0')
	{
		if(img_width % 2 != 0)
		{
			wrapper.addClass('ie6_width')
		}
		if(img_height % 2 != 0)
		{
			wrapper.addClass('ie6_height')			
		}
	}

	// wrap image
	img.wrap(wrapper);
	
	// add rounded corners
	img.after('<div class="tl"></div>');
	img.after('<div class="tr"></div>');
	img.after('<div class="bl"></div>');
	img.after('<div class="br"></div>');
}).each(function(){
	if(this.complete) $(this).trigger("load");
});
	
});

$('body').ready(function()
{
	var isOpen = false;
	$('.dropdown').click(function()
		{
			$(this).find('.sub_navigation').slideToggle( "fast" );
			$('#search-dropdown').slideUp( "fast" );
			$('#activities-dropdown').slideUp( "fast" );
			$('#dest-dropdown').slideUp( "fast" );
			/*
			$('.bd-container3').slideUp( "fast" );
			$('.bd-container4').slideUp( "fast" );
			*/
			if (!isOpen)
			{
				$('.arr').css("margin-top", "-10px");
				isOpen = true;
			}
			else
			{
				$('.arr').css("margin-top", "0px");
				isOpen = false;
			};
				
		}
	);

	$('#search').click(function()
		{
			$('#search-dropdown').slideToggle( "fast" );
			$('.sub_navigation').slideUp( "fast" );
			$('#activities-dropdown').slideUp( "fast" );
			$('#dest-dropdown').slideUp( "fast" );
			/*
			$('.bd-container2').slideUp( "fast" );
			$('.bd-container3').slideUp( "fast" );
			$('.bd-container4').slideUp( "fast" );
			*/
			if (isOpen)
			{
				$('.arr').css("margin-top", "0px");
				isOpen = false;
			}
		}

	);

	$('#act').click(function()
		{
			$('#activities-dropdown').slideToggle( "fast" );
			$('.sub_navigation').slideUp( "fast" );
			$('#search-dropdown').slideUp( "fast" );
			$('#dest-dropdown').slideUp( "fast" );
			/*
			$('.bd-container2').slideUp( "fast" );
			$('.bd-container3').slideUp( "fast" );
			$('.bd-container4').slideUp( "fast" );
			*/
			if (isOpen)
			{
				$('.arr').css("margin-top", "0px");
				isOpen = false;
			}
		}

	);

	$('#dest').click(function()
		{
			$('#dest-dropdown').slideToggle( "fast" );
			$('.sub_navigation').slideUp( "fast" );
			$('#search-dropdown').slideUp( "fast" );
			$('#activities-dropdown').slideUp( "fast" );
			/*
			$('.bd-container2').slideUp( "fast" );
			$('.bd-container3').slideUp( "fast" );
			$('.bd-container4').slideUp( "fast" );
			*/
			if (isOpen)
			{
				$('.arr').css("margin-top", "0px");
				isOpen = false;
			}
		}

	);

	$('#dest-close').click(function()
		{
			$('#dest-dropdown').slideUp( "fast" );
		}

	);
	$('#act-close').click(function()
		{
			$('#activities-dropdown').slideUp( "fast" );
		}

	);
	$('#search-close').click(function()
		{
			$('#search-dropdown').slideUp( "fast" );
		}

	);

	$('.ssba div:first-child').append( "<span class='ssba_sharecount'>Email</span>" );
	$('.printfriendly').append( "<span class='ssba_sharecount share-last'>Print</span>"  );
	/*$('.slides').find('li:last').remove();*/
	console.log( $('.slides').find('li:last') );
});