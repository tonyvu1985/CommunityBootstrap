/* 
 * Ajax login
 */

/* reset ajaxloginform */
function ajaxloginform_reset(){
    jQuery('.loginlink').click(function(){
        jQuery('#ajaxlogin-form')[0].reset();
    });
    
    jQuery('.btnlogin').click(function(){
        jQuery('#ajaxlogin-form')[0].reset();
    });
}

/* reset ajaxloginform */
function ajaxregisterform_reset(){
    jQuery('.btn-createaccount').click(function(){
         jQuery('#ajaxregister-form')[0].reset();
    });
    
    jQuery('.registerlink').click(function(){
        jQuery('#ajaxregister-form')[0].reset();
    });
}

/* auto close ajaxlogin modal */
function ajaxloginModal_close(){
    jQuery('body').removeClass('modal-open');
    jQuery('.modal-backdrop').remove(); 
    jQuery('#ajaxloginModal').remove();
}

/* auto close ajaxregister modal */
function ajaxregisterModal_close(){
    jQuery('body').removeClass('modal-open');
    jQuery('.modal-backdrop').remove(); 
    jQuery('#ajaxregisterModal').hide();
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

/*submit ajaxlogin_form */jQuery('.smslogin').hide();
function ajaxloginform_submit(){
    // before ajax submit
    jQuery('.divspin').show();
    jQuery('.smslogin').hide();
    
    jQuery.ajax({
        url: jQuery('#ajaxlogin-form').attr('action'),
        type: 'post',
        data: jQuery('#ajaxlogin-form').serialize(),
        async: false,
        beforeSend: function(){},
        success: function(data) {               
            json = eval("(" + data + ")");
            if (json.logined == 1){                                                                               
                /* update the toplink */
                jQuery('#toplink').html(json.toplink);
                /* username */
                jQuery('.welcome-msg').html('Welcome, ' + json.user + '!'); 
                jQuery('.smslogin').html('Welcome, ' + json.user + '!');
              //  jQuery('#btnajaxlogin').hide();
                jQuery('.btnlogin').hide();
              //  jQuery('.btnajaxlogin').hide();
                /* auto close ajaxlogin modal */
                window.setTimeout(function() {ajaxloginModal_close(); }, 1500); 
                
            }else{
                jQuery('.smslogin').html('Your username or password are incorrect !');
            }
            
            // ajax success
            window.setTimeout(function(){jQuery('.smslogin').show(); }, 800);
            window.setTimeout(function(){jQuery('.divspin').hide(); }, 700);
        },
        error: function() {
            alert('There has been an error, please alert us immediately');
        }
    });            
}

/*submit ajaxregister_form */
function ajaxregisterform_submit(){
    
    var ajaxregisterForm = new Validation('ajaxregister-form'); 
    if(ajaxregisterForm.validate()) { 
     // before ajax submit
        jQuery('.divspin').show();
        jQuery('.smsregister').hide();

        jQuery.ajax({
            url: jQuery('#ajaxregister-form').attr('action'),
            type: 'post',
            data: jQuery('#ajaxregister-form').serialize(),
            async: false,
            success: function(data) {
                json = eval("(" + data + ")");
                // alert(json);
                if (json.register == 1){
                    /* update the toplink */
                    jQuery('#toplink').html(json.toplink);
                    jQuery('.welcome-msg').html('Welcome, ' + json.user + '!'); 
                    jQuery('.smsregister').html('Success, Please login !');
                    window.setTimeout(function(){ajaxregisterModal_close();}, 1500);

                }
                
                 // ajax success
                window.setTimeout(function(){jQuery('.smsregister').show(); }, 800);
                window.setTimeout(function(){jQuery('.divspin').hide(); }, 700);
            }   
        });

    }                        
}

jQuery(document).ready(function() {
    /* reset ajaxlogin_form */
    ajaxloginform_reset();  

    /* ajaxlogin_form, press enter */
    jQuery('.btnajaxlogin').bind('click', function(){  
           ajaxloginform_submit(); 
    });
    
    /* reset ajax register form */
    ajaxregisterform_reset()
    
    /* ajaxregister submit */
    jQuery('.btnajaxregister').bind('click', function(){
        ajaxregisterform_submit();
    });
    
    topNav_ontop();

})