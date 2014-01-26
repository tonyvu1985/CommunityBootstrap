/* 
 * Ajax login
 */

/* reset ajaxform */
function ajaxform_reset(){
    jQuery('.loginlink').click(function(){
        jQuery('#ajaxlogin-form')[0].reset();
    });
}
/* class bootstrap modal */
function ajaxloginModal_close(){
    jQuery('body').removeClass('modal-open');
    jQuery('.modal-backdrop').remove(); 
    jQuery('#ajaxloginModal').remove();
}

/* Make the TopLink always on top */
function topNav_ontop(){    
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
}

/*submit ajaxform */
function ajaxform_submit(){
    jQuery.ajax({
        url: jQuery('#ajaxlogin-form').attr('action'),
        type: 'post',
        data: jQuery('#ajaxlogin-form').serialize(),
        async: false,
        beforeSend: function(){},
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
                jQuery('#btnlogin').hide();
                window.setTimeout(function() {ajaxloginModal_close(); }, 1000);
                
            }else{
                jQuery('.smslogin').html('Your username or password are incorrect !');
            }
            jQuery('.smslogin').show();
        },
        error: function() {
            alert('There has been an error, please alert us immediately');
        }
    });
}
jQuery(document).ready(function() {   
        /* reset ajax form */
        ajaxform_reset();  
    
        /* press enter */
        jQuery(document).keypress(function(e){
            if(e.which == 13){
               ajaxform_submit(); 
            }
        });
        
        topNav_ontop();

})