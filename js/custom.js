// ~ by Maddy™ ~


// Address the search field 'subpixel' issue on Safari
if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1){
    $('#s').css('height','41px');
}

if (navigator.userAgent.indexOf('Firefox') != -1) {
    $('.distance').css('margin-right','5px');
}

// Fix the navigation bar on the top of the page when scrolled
$(document).ready(function() {
        var navpos = $('#mainnav').offset();
        $(window).bind('scroll', function() {
            if ($(window).scrollTop() > navpos.top && $(window).width() > 767) {
                $('#mainnav').addClass('navbar-fixed-top');
                $('.navbar-collapse').css('margin-left','100px').css('margin-right','-100px');
                $('#k').css('display','block');
            }
            else {
                $('#mainnav').removeClass('navbar-fixed-top');
                $('.navbar-collapse').css('margin-left','0').css('margin-right','0');
                $('#k').css('display','none');
            }
        });
});


// Emulate an on-hover effect on a sub-menu button and display the content box of sub-menu
function showSubAbout(event) {
    if (!($('#subabout').hasClass('kinda_hover')||$('#fly_about').hasClass('show_flyabout')) ) {
        $('#subabout').toggleClass('kinda_hover');
        $('#fly_about').toggleClass('show_flyabout');
        event.stopPropagation();
//        return false;
    }
}

function hideSubAbout(event) {
    if ($('#subabout').hasClass('kinda_hover')||$('#fly_about').hasClass('show_flyabout')) {
        $('#subabout').toggleClass('kinda_hover');
        $('#fly_about').toggleClass('show_flyabout');
//        event.stopPropagation();
    }
}

$( '#subabout' ).on('mouseover touchstart',function(e) {
    showSubAbout(e);
    $('.main').on('mouseover touchstart',function(e) {
        $('.main').off('mouseover touchstart');
        hideSubAbout(e);
    });
});





// Resolve an issue with numbers containing 4 and more digits in .user-counter
$('.usercount').filter(function() {
    return $(this).text().length >= 4;
}).css({
    'font-size': '12px',
    'margin-top': '2px',
    'margin-left': '7px'
});

$('.usercount').filter(function() {
    return $(this).text().length === 3;
}).css({
    'font-size': '15px',
    'margin-left': '5px'
});

// Resolve an issue of accommodating long (5-digit and more) number in the specified area
$(document).ready(function(){
   var dramBox = $('#dramcount');

   if ($(dramBox).text().length >= 6) {
       $(dramBox).css({
           "font-size": "17px",
           "padding-top":"9px",
           "padding-right":"20px"
       });
   }

});

// Main validation rules for the form fields
$(document).ready(function() {
    if ($('#koalareg').length) {
        $('#koalareg').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-thumbs-up',
                invalid: 'glyphicon glyphicon-thumbs-down',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                name: {
                    message: 'The name is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Please enter your name!'
                        },
                        stringLength: {
                            min: 3,
                            max: 30,
                            message: 'Please enter your first name (at least 3 and less than 30 characters)'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z ']+$/,
                            message: 'The name can only consist of alphabetical'
                        }
                    }
                },
                lastname: {
                    message: 'The name is not valid',
                    validators: {
                        stringLength: {
                            min: 5,
                            max: 30,
                            message: 'Please enter your last name (at least 5 and less than 30 characters)'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z ']+$/,
                            message: 'The last name can only consist of alphabetical, number and underscore'
                        }
                    }
                },
                username: {
                    message: 'The username is already taken, please use another one!',
                    validators: {
                        notEmpty: {
                            message: 'Please enter your username!'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'Please enter your username (at least 6 characters)'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_ ']+$/,
                            message: 'The name can only consist of alphabetical, number and underscore'
                        }
                    }
                },
                password: {
                    message: "Who's ya daddy?",
                    validators: {
                        notEmpty: {
                            message: 'This field is mandatory and cannot be empty!'
                        },
                        stringLength: {
                            min: 8,
                            max: 25,
                            message: 'Your password should contain at least 8 and maximum 25 characters!'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_']+$/,
                            message: 'The password can only consist of alphabetical, number and underscore'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Please provide your e-mail address!'
                        },
                        emailAddress: {
                            message: 'Please enter a valid e-mail address...'
                        }
                    }
                },
                celly: {
                    message: 'The name is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Please enter your phone number!'
                        },
                        stringLength: {
                            min: 9,
                            max: 20,
                            message: 'Please make sure to submit a valid phone number format'
                        },
                        regexp: {
                            regexp: /^[0-9+ ()]*$/,
                            message: 'e.g. +38 099 024 73 37'
                        }
                    }
                }
            }
        });
    }


});

// Prevent non-numbers from being typed in the specified field(s)
$('.onlynumberz').keyup(function () {
    this.value = this.value.replace(/[^0-9\.]/g,'');
});


// 'Go to top' (#gotop) button functions
 $(window).scroll(function() {
        if ($(this).scrollTop() > 600) {
            $('#gotop').fadeIn('slow');
        } else {
            $('#gotop').fadeOut(100);
        }
    });

 $('#gotop').click(function(event) {
        event.preventDefault();

 $('html, body').animate({scrollTop: 0}, 300);

});

// Password confirmation validation
function checkPasswords() {
    var password = $("#pswd").val();
    var confPassword = $("#re_pswd").val();

    if (password != confPassword) {
        $('#pswd_cnfrm').css('display','block');
    }}

$("#re_pswd").on('blur', checkPasswords);

function resetPswdField(){
    $('#pswd_cnfrm').css('display','none');
    $('#re_pswd').val("");
    $('#pswd').val("");
}
$('#pswd_cnfrm').on('click',resetPswdField);

$(".faqmore").on("click", function() {
    var el = $(this);
    el.text() == el.data("text-swap")
        ? el.text(el.data("text-original"))
        : el.text(el.data("text-swap"));
});


/*var viewPort = document.querySelector("meta[name=viewport]");

if ($(window).width() < 320){
    viewPort.setAttribute("content", "width=1024, user-scalable = yes");
} else {
    viewPort.setAttribute("content", "width=device-width, initial-scale = 1.0");
}*/



