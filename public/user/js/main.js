(function ($) {
    "use strict";

    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $(".navbar .dropdown")
                    .on("mouseover", function () {
                        $(".dropdown-toggle", this).trigger("click");
                    })
                    .on("mouseout", function () {
                        $(".dropdown-toggle", this).trigger("click").blur();
                    });
            } else {
                $(".navbar .dropdown").off("mouseover").off("mouseout");
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });

    //     // Date and time picker

    $("#time2").focus(function () { 
        $(this).attr({ type: "datetime-local" });
    
    });

    $("#time1").focus(function () {

        $(this).attr({ type: "datetime-local" });
    });

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $(".back-to-top").fadeIn("slow");
        } else {
            $(".back-to-top").fadeOut("slow");
        }
    });
    $(".back-to-top").click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
        return false;
    });

    // Team carousel
    $(".team-carousel, .related-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 30,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>',
        ],
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
        },
    });

    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        margin: 30,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0: {
                items: 1,
            },
            576: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
        },
    });

    // Vendor carousel
    $(".vendor-carousel").owlCarousel({
        loop: true,
        margin: 30,
        dots: true,
        loop: true,
        center: true,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 2,
            },
            576: {
                items: 3,
            },
            768: {
                items: 4,
            },
            992: {
                items: 5,
            },
            1200: {
                items: 6,
            },
        },
    });

    $("#time2").on("change", function () {
   
        // alert($("#time2").val());
        var time1 = $("#time1").val();
        var selectedDate = $(this).val();
        $.ajax({ 
            url: "/users/location?time1=" + time1 + "&time2=" + selectedDate,
            type: "GET",
            success: function (result) {
                // console.log(result);
            //    $('#car').html(result)
            $('#car').find('option:not(:first)').remove();
              if (result['cars'].length > 0) {
                    $.each(result['cars'], function(key, value) {
                      $('#car').append("<option value='" + value['id'] + "'>" + value['name'] + "</Option>")
                    })
                  }
            }
        });
       
            
        //     });
       
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            // reader.onload = function(e) {
            //     $("#imagePreview").css(
            //         "background-image",
            //         "url(" + e.target.result + ")"
            //     );
            //     $("#imagePreview").hide();
            //     $("#imagePreview").fadeIn(650);
            // };
            reader.onload = function (e) {
                $('#imagePreview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imageUpload").change(function() {
        readURL(this);
    });
    

})(jQuery);
