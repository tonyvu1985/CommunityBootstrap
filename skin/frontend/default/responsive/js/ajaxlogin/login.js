/* 
 * Ajax login
 */

(function(jQuery){jQuery.fn.extend({
   center: function () {
     return this.each(function() {
      var top = (jQuery(window).height() - jQuery(this).outerHeight()) / 2;
         top += document.body.scrollTop;
      jQuery(this).css({position:'absolute', margin:0, top: (top > 0 ? top : 0)+'px'});
            });
        }
    }); 
})(jQuery);

jQuery('#box').center();
jQuery(window).scroll(function() { jQuery('#ajaxlogin').center(); });
