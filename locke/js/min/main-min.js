jQuery(function($){$(".menu-button button").on("click",function(e){e.preventDefault(),$(this).parent().siblings("nav").toggleClass("open")}),$("#home-gallery .grid").magnificPopup({delegate:"a",type:"image",tLoading:"Loading image #%curr%...",mainClass:"mfp-img-mobile",gallery:{enabled:!0,navigateByImgClick:!0,preload:[0,1]},image:{tError:'<a href="%url%">The image #%curr%</a> could not be loaded.'}})}),$(document).ready(function(){var e=-1;$(".column-content .column").each(function(){e=e>$(this).height()?e:$(this).height()}),$(".column-content .column").each(function(){$(this).height(e)}),$(".tabs").responsiveTabs({startCollapsed:"accordion"}),$("#home-banner").isotope({itemSelector:".box",percentPosition:!0,masonry:{columnWidth:".grid-sizer",gutter:4}}),$(".grid").isotope({layoutMode:"packery",itemSelector:".grid-item",packery:{gutter:10}}),$(".filter-button-group").on("click","button",function(){var e=$(this).attr("data-filter");$(".grid").isotope({filter:e})}),$(".button-group").each(function(e,t){var n=$(t);n.on("click","button",function(){n.find(".is-checked").removeClass("is-checked"),$(this).addClass("is-checked")})})}),$(function(){$("nav a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);if(e=e.length?e:$("[name="+this.hash.slice(1)+"]"),e.length)return $("html,body").animate({scrollTop:e.offset().top},1e3),!1}})});