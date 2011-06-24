//
// Javascript for the Appalachian Sustainability Website
// in action here: http://sustain.appstate.edu/
//

$(document).ready(function() {
	
  // Replaces the asu logo at the top with the proper banner.
  $("#asu-logo-inner").html($("<a></a>")
    .attr({"href": "http://appstate.edu",
           "title": "Appalachian State University"})
      .html($("<img>")
        .attr({"src": "/sites/all/themes/sustain/images/appstate-logo.png",
               "alt": "Appalachian State University"})));

  // Changes the h1 to the logo
  $("h1:first").html($("<a></a>")
    .attr({"href": '/',
           "title": "Sustain Appalachian"})
      .html($("<img>")
        .attr({"src": "/sites/all/themes/sustain/images/logo.png",
               "alt": "Sustain Appalachian"})));

  // Removes the text from beside each Service Link icon.
  $("div.service-links li a").each(function() {$(this).html($(this).find('img'))} );

  // Cycles through header photos
  $("div.view-featured-story-view .view-content")
  .after('<ul id="banner-icons">')
  .cycle({
    fx: 'fade',
    timeout: 8000,
    cleartype: true,
    cleartypeNoBg: true,
    pager: '#banner-icons',
    pagerAnchorBuilder: function(idx, slide) {
      return $("<li>").html(
        $("<a></a>").attr('href', '#').html(
          $("<img>").attr('src', $(slide).find('img').attr('src')
            .replace('featured-story-home', idx != 0 ? 'featured-story-home-grey' : 'featured-story-home-thumb'))));
    },
    before: function(currSlideElement, nextSlideElement, options, forwardFlag) {
      $("ul#banner-icons img").each(function() {
        $(this).attr('src', $(this).attr('src').replace('featured-story-home-thumb', 'featured-story-home-grey'));
      });
      return;
    },
    after: function(currSlideElement, nextSlideElement, options, forwardFlag) {
      if ( $('ul#banner-icons li.activeSlide').length != 0 ) {
        var activeImage = $('ul#banner-icons li.activeSlide img');
        activeImage.attr('src', activeImage.attr('src').replace('featured-story-home-grey', 'featured-story-home-thumb'));
      };
      return;
    }
  });

  // Sets the width of the primary-menu div based on the width of the containing elements.
  var navWidth = 0;
  $("div.primary-menu ul li").each(function() { navWidth += $(this).width(); });
  $("div.primary-menu").width(navWidth + 6);

  // Removes empty h2 tags
  $("h2.title a").each(function() {
    if ( $(this).html() == '' ) {
      $(this).parent().remove();
    };
  });

  // Adds rounded corner to body div
  $("#main-content-inner").corner('round top 5px');
  $("#sidebar-last .block .inner").corner('round left 5px');
  $(".pane-menu-menu-green-menu .inner").corner('round right 5px');

  // Streches footer to the bottom of the page.
  function resizeFooter() {
    $("#footer-wrapper").height( $("#footer-wrapper").height() + ( $(window).height() - $("#page").height() ))
  }
  resizeFooter();
  $(window).resize(function() {
    resizeFooter();
  });

  // Adds styles to the items in the social block
  $("div#block-menu-menu-social-menu a[href *='facebook']").html(
    $("<img>").attr({'src': '/sites/all/themes/sustain/images/facebook.png',
                     'alt': 'Friend Us on Facebook'})).click(function() {
                        window.open(this.href, '_blank');
                        return false;
                     });

  $("div#block-menu-menu-social-menu a[href *='twitter']").html(
    $("<img>").attr({'src': '/sites/all/themes/sustain/images/twitter.png',
                     'alt': 'Follow us on Twitter'})).click(function() {
                        window.open(this.href, '_blank');
                        return false;
                     });

  $("div#block-menu-menu-social-menu a[href *='contact']").html(
    $("<img>").attr({'src': '/sites/all/themes/sustain/images/contact.png',
                     'alt': 'Send us an email'}));

  $("div#block-menu-menu-social-menu a[href *='forum']").html(
    $("<img>").attr({'src': '/sites/all/themes/sustain/images/forum.png',
                     'alt': 'Let\'s Talk About It'}));




  // Javascript for the Green Spotlight block
  var moreLink = $("#block-views-green_spotlight_views-block_1 .more-link");
  $("#block-views-green_spotlight_views-block_1 h2")
    .append($("<span>").html(moreLink.find('a').html(moreLink.find('a').html() + '&raquo;')));

  // Javascript for the Green Events block
  var moreLink = $(".pane-views-sustain-calendar-block-1 .more-link");
  $(".pane-views-sustain-calendar-block-1 h2")
    .append($("<span>").html(moreLink.find('a').html(moreLink.find('a').html() + '&raquo;')));

  // Javascript for the Green Events block
  var moreLink = $(".pane-views-news-view-block-1 .more-link");
  $(".pane-views-news-view-block-1 h2")
    .append($("<span>").html(moreLink.find('a').html(moreLink.find('a').html() + '&raquo;')));
  
  // Tabs for the Green Your Scene and everything that goes along with it.
  $("#tab-container div").hide();
  $(".pane-block-3 ul#tabs li:first").addClass('activeTab').show();
  $("#tab-container div:first").show();

  $(".pane-block-3 ul#tabs li").click(function() {
    $(".pane-block-3 ul#tabs li").removeClass('activeTab');
    $(this).addClass('activeTab');
    $("#tab-container div").hide();
    var activeTab = $(this).find('a').attr('href');
    $(activeTab).fadeIn();
    return false;
  });
  $(".pane-block-3 ul#tabs li").corner('round right 5px');

  // Moves the tabs to the outside of the containg div
  $(".pane-block-3").append($(".pane-block-3 ul#tabs"));


  // Javascript for the Sustain Appalacian Newsletter block
  $("div.block-simplenews p:first, div.block-simplenews .form-radios").hide();
  $("div.block-simplenews label[for='edit-mail']").html($("div.block-simplenews p:first").html());
  $("div.block-simplenews input#edit-submit").attr('value', 'Submit');

  // Remove the Top link on formums
  $("body.node-type-forum a[href='#top']").remove();


  if ( $("body.not-front.logged-in").length != 0 ) {
   if ($("#content-tabs ul li").length == 0);
     $("#content-group").css('margin-top', '66px');
  };

  // Link the menu_block h2 contents to the the primary menu item.
  $("div.block-menu_block:first").find('h2').each(function() {
    $(this).wrapInner(
      $("<a>").attr('href', $("#primary-menu").find("a:contains('" + $(this).text() + "')").attr('href'))
    );
  });

});
