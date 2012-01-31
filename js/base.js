// GLOBAL JAVASCRIPT (CORE)

/*
 * Core Javascript for the Primer theme
 * Do not edit this file
 * Override any theme style defaults using the custom/js/custom.js file
 * Remember to backup the custom/custom.js file, and use restore it when upgrading the theme so you keep all your custom javascript intact
*/

// Quicklinks Dropdown
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_jumpMenuGo(selName,targ,restore){ //v3.0
  var selObj = MM_findObj(selName); if (selObj) MM_jumpMenu(targ,selObj,restore);
}
jQuery(document).ready(function() {
	//#header-site-search
	if (jQuery('#header-site-search .form-submit').length > 0) {
		//var search = jQuery('#header-site-search :input');
		var search = $('#header-site-search input[type="text"]');
	
		search.focus(function(){
	        if (search.val() == 'Search this site...') {
	            search.val("");
	        }
	    }).blur(function(){
	        if (jQuery.trim(search.val()) == "") {
	            search.val('Search this site...');
	        }
	    });
		
		search.val('Search this site...');
		
		var $searchButton = jQuery(':submit', jQuery('#header-site-search'));
		$searchButton.addClass('site-search-button');
		
	}
	
	if($('form#system-theme-settings').length > 0) {
		
		// hide the text areas that contain the color values for the branded form fields.
		$(".jsonColorList").parent().parent().parent().hide();
		
		
		// set the colors for each of the different types of form fields
		if($('.branded-colorpicker-all').length > 0) {
			$('.branded-colorpicker-all').smallColorPicker({
				colorValues: json_parse($('textarea#edit-initialcolorsAll').val())
			});
			
		}
		if($('.branded-colorpicker-primary').length > 0) {
			$('.branded-colorpicker-primary').smallColorPicker({
				colorValues: json_parse($('textarea#edit-initialcolorsPrimary').val())
			});
		}
		
		if($('.branded-colorpicker-secondary').length > 0) {
			$('.branded-colorpicker-secondary').smallColorPicker({
				colorValues: json_parse($('textarea#edit-initialcolorsSecondary').val())
			});
		}
		if($('.branded-colorpicker-support').length > 0) {
			$('.branded-colorpicker-support').smallColorPicker({
				colorValues: json_parse($('textarea#edit-initialcolorsSupport').val())
			});
		}
		
		
		// configure the color picker for form fields that allow all/any color to be selected (different plugin)
		$(".all-colorpicker").each(function(el) {
			// set background color of field element so the user can see which color has been selected
			$(this).css("background-color", $(this).val()); 
			// detect the brightness of the color selected, and set the text color to white or black accordingly
			var element = $(this).get(0),
		    rgb = window.getComputedStyle(element, null).backgroundColor;
			var re = /rgb\((\d+), (\d+), (\d+)\)/;
			rgb = re.exec(rgb);
			var r = parseInt(rgb[1], 10),
		    g = parseInt(rgb[2], 10),
		    b = parseInt(rgb[3], 10);
			brightness = (r*299 + g*587 + b*114) / 1000;
			if (brightness > 125) {
			    // it's a bright color, use black as the foreground color
				$(this).css("color", '#000000');
			} else {
			    // it's a dark color use white as the foreground color
				$(this).css("color", '#FFFFFF');
			}
		});
		
		$('.all-colorpicker').ColorPicker({
			onSubmit: function(hsb, hex, rgb, el) {
				$(el).val('#' + hex);
				$(el).ColorPickerHide();
				$(el).css("background-color", '#' + hex);
			},
			onBeforeShow: function () {
				$(this).ColorPickerSetColor(this.value);
			}
		})
		.bind('keyup', function(){
			$(this).ColorPickerSetColor(this.value);
		});
		
	}
	
	// hide all 2nd level lists, until the user hovers over (then display the sub-list)
		$('#horizontal-menu-container li ul').hide();
	
		$('#horizontal-menu-container li').hover(
	        function(){
	          $('ul:first', $(this)).show();
	        },
	        function(){
	          $('ul', $(this)).hide();
	        }
	    );
	    
	// hide any 3rd level lists, even if the administrator has checked the "expand" box in the menu option
        $('#horizontal-menu-container li li').hover(
            function(){
            	$('#horizontal-menu-container ul ul ul').hide();
            }
        );
        
        
        /*
         * Featured Content Slider based on jquery cycle
         * 
         */
        
        $('.featured-content-slider')
        	.after('<div id="featured-content-slider-overlay">')
        
        $('.featured-content-slider .view-content').each(function(index, el) { 
        	$(this).find('.views-field-title, .views-field-view-node, .views-field-teaser ').css(
        			{ 'text-align': 'right', 'position': 'relative', 'top': '-' + $(this).find('.views-field-image-attach-images img').attr('height') / 4 + 'px' 
        		});
        	});
        
        $('.featured-content-slider .view-content')
        .before('<div id="featured-content-slider-nav">') 
        .cycle({ 
            fx:     'fade', 
            speed:   1000, 
            timeout: 10000, 
            pause:   1,
            cleartype: true,
            cleartypeNoBg: true,
            pager: '#featured-content-slider-nav',
            pagerAnchorBuilder: function(idx, slide) {
                var img = $(slide).children().eq(0).attr("src");
                return '<li><a href="#"><img src="' + jQuery(slide).find('img').attr('src') + '" width="140" height="70" /></a></li>';
              },
            //after: onAfter 
        });
        /*
        function onAfter() { 
            $('#featured-content-slider-overlay').html('<p>' + this.alt + '</p>');
        }
        */
});
