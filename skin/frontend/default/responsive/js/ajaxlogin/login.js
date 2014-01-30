/* 
 * Ajax login Module
 */

/* reset ajaxloginform */
function ajaxloginform_reset(){
    jQuery('.loginlink').click(function(){
        jQuery('#ajaxlogin-form')[0].reset();
        jQuery('.smslogin').hide();
    });
    
    jQuery('.btnlogin').click(function(){
        jQuery('#ajaxlogin-form')[0].reset();
        jQuery('.smslogin').hide();
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


/* reset ajaxloginform */
function ajaxcontactform_reset(){
    jQuery('.contactlink').click(function(){
            jQuery('.smscontact').hide();
        jQuery('#ajaxcontact-form')[0].reset();
    });
}

/* auto close ajaxlogin modal 
function ajaxloginModal_close(){
    jQuery('body').removeClass('modal-open');
    jQuery('.modal-backdrop').remove(); 
    jQuery('#ajaxloginModal').remove();
}*/

/* auto close ajaxregister modal 
function ajaxregisterModal_close(){
    jQuery('body').removeClass('modal-open');
    jQuery('.modal-backdrop').remove(); 
    jQuery('#ajaxregisterModal').hide();
}*/

/* auto close ajaxcontact modal 
function ajaxcontactModal_close(){
    jQuery('body').removeClass('modal-open');
    jQuery('.modal-backdrop').hide(); 
    jQuery('#ajaxcontactModal').hide(); 
}*/

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

/*submit ajaxlogin_form */
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
                jQuery('.btnlogin').hide();

                
            }else{
                jQuery('.smslogin').html('Your email or password are incorrect !');
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
                    jQuery('.smsregister').html('Success !');

                }
                
                 // ajax success
                window.setTimeout(function(){jQuery('.smsregister').show(); }, 800);
                window.setTimeout(function(){jQuery('.divspin').hide(); }, 700);
            }   
        });

    }                        
}

/* submit ajaxcontact_form */
function ajaxcontactform_submit(){
    
    var ajaxcontactForm = new Validation('ajaxcontact-form'); 
    if(ajaxcontactForm.validate()) { 
     // before ajax submit
        jQuery('.divspin').show();
        jQuery('.smscontact').hide();

        jQuery.ajax({
            url: jQuery('#ajaxcontact-form').attr('action'),
            type: 'post',
            data: jQuery('#ajaxcontact-form').serialize(),
            async: false,
            success: function(data) {
                json = eval("(" + data + ")");
                // alert(json);
                if (json == 1){  
                    /* update the toplink */
                    jQuery('.smscontact').html('Your inquiry was submitted.');
                    
                    window.setTimeout(function(){ajaxcontactModal_close();}, 1700);

                }
                
                //  ajax success
                window.setTimeout(function(){jQuery('.smscontact').show(); }, 800);
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
    jQuery('.btnajaxregister').bind('click', function(){
        ajaxregisterform_submit();
    });
    
    ajaxcontactform_reset();
    jQuery('.btnajaxcontact').bind('click', function(){
        ajaxcontactform_submit();
    });
    
    topNav_ontop();

})