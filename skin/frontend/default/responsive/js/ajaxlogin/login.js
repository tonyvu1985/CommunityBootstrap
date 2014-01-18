/* 
 * Ajax login
 */
function ajaxform_reset(){
    jQuery('.loginlink').click(function(){
        jQuery('#ajaxlogin-form')[0].reset();
    });
}

jQuery(document).ready(function() {   
        /* reset ajax form */
        ajaxform_reset();
        
        /* ajax request */
        jQuery('#btnlogin').bind('click', function() {
            jQuery.ajax({
                url: jQuery('#ajaxlogin-form').attr('action'),
                type: 'post',
                data: jQuery('#ajaxlogin-form').serialize(),
                async: false,
                success: function(data) {               
                    json = eval("(" + data + ")");
                   // alert(json.user);
                    if (json.logined == 1){                                                                               
                        /* update the toplink */
                        jQuery('#toplink').html(json.toplink);
                        /* username */
                        jQuery('.welcome-msg').html('Welcome, ' + json.user + '!'); 
                        jQuery('.smslogin').html('Welcome, ' + json.user + '!');
                        jQuery('#btnajaxlogin').hide();
                    }else{
                        jQuery('.smslogin').html('Your username or password are incorrect !');
                    }
                    /* show login message */
                    jQuery('.smslogin').show();
                },
                error: function() {
                    alert('There has been an error, please alert us immediately');
                }
            });
        });    
    
    /* Make the TopLink always on top */
    var num = 50; //number of pixels before modifying styles
    jQuery(window).bind('scroll', function () {
        if (jQuery(window).scrollTop() > num) {
            jQuery('.header').addClass('fixed');
            jQuery('.welcome-msg').hide();
            jQuery('.form-language').hide();
            jQuery('#divnetworkshare').hide();
        } else {
            jQuery('.header').removeClass('fixed');
            jQuery('.welcome-msg').show();
            jQuery('.form-language').show();
            jQuery('#divnetworkshare').show();
        }
    });

})