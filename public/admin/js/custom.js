$(function() {
    "use strict";

    $(".preloader").fadeOut();
    // this is for close icon when navigation open in mobile view
    $(".nav-toggler").on('click', function() {
        $("#main-wrapper").toggleClass("show-sidebar");
        $(".nav-toggler i").toggleClass("ti-menu");
    });
    $(".search-box a, .search-box .app-search .srh-btn").on('click', function() {
        $(".app-search").toggle(200);
        $(".app-search input").focus();
    });

    // ============================================================== 
    // Resize all elements
    // ============================================================== 
    $("body, .page-wrapper").trigger("resize");
    $(".page-wrapper").delay(20).show();
    
    //****************************
    /* This is for the mini-sidebar if width is less then 1170*/
    //**************************** 
    var setsidebartype = function() {
        var width = (window.innerWidth > 0) ? window.innerWidth : this.screen.width;
        if (width < 1170) {
            $("#main-wrapper").attr("data-sidebartype", "mini-sidebar");
        } else {
            $("#main-wrapper").attr("data-sidebartype", "full");
        }
    };
    $(window).ready(setsidebartype);
    $(window).on("resize", setsidebartype);

});


// profile dropdowns 
    $(document).ready(function(){
        $('.admin_content').on('click',function(event){
             event.preventDefault();
             $(this).closest('.header_dropdown').find('.account_dropdown').toggle();
        });

        $(document).on('click',function(e){
            if($(e.target).closest('.header_dropdown').length === 0){
                $('.account_dropdown').hide();
            }
        });
    });

// location dropdown
$(document).ready(function(){
    $('.sidebar_content').on('click',function(event){
         event.preventDefault();
         $(this).closest('.sidebar_header').find('.sidebar_dropdown').toggle();
    });

    $(document).on('click',function(e){
        if($(e.target).closest('.sidebar_header').length === 0){
            $('.sidebar_dropdown').hide();
        }
    });
});

// Back to top button
$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
});
$('.back-to-top').click(function () {
    $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
    return false;
});


// datatable 
// $(function () {
    
//     var table = $('.yajra-datatable').DataTable({
//         processing: true,
//         serverSide: true,
//         ajax: "{{ url ('/mmladmin/view/location') }}",
//         columns: [
//             {data: 'DT_RowIndex', name: 'DT_RowIndex'},
//             {data: 'country_id', name: 'country_id'},
//             {data: 'state_id', name: 'state_id'},
//             {data: 'city_id', name: 'city_id'},
//             {data: 'pincode', name: 'pincode'},
//             {data: 'area', name: 'area'},
//             {
//                 data: 'modify', 
//                 name: 'modify', 
//                 orderable: true, 
//                 searchable: true
//             },
//         ]
//     });
    
//   });


//   document.getElementById("button-collapse").addEventListener("click", () => {
//   SIDEBAR_EL.classList.toggle("collapsed");
//   PoppersInstance.closePoppers();
//   if (SIDEBAR_EL.classList.contains("collapsed"))
//     FIRST_SUB_MENUS_BTN.forEach((element) => {
//       element.parentElement.classList.remove("open");
//     });

//   updatePoppersTimeout();
// });
// sidebar toggle button
$(document).ready(function () {
    var trigger = $('.hamburger'),
        overlay = $('.overlay'),
       isClosed = false;
  
      trigger.click(function () {
        hamburger_cross();      
      });
  
      function hamburger_cross() {
  
        if (isClosed == false) {          
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
          
        } else {   
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
        }
    }
    $('[data-toggle="offcanvas"]').click(function () {
        $('#main-wrapper').toggleClass('toggled');
    }); 
    
  });



  // change password
  $(document).ready(function() {
    //check admin password is correct or not
    $("#oldpassword").keyup(function() {
        var oldpassword = $("#oldpassword").val();
        // alert(current_password);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }, 
            type:'post',
            url:'/mmladmin/check-admin-password',
            data:{oldpassword:oldpassword},
            success:function(resp){
                if(resp=="false"){
                    $("#check_password").html("<font color='red'>Current Password is Incorrect!</font>");
                }else if(resp=="true"){
                    $("#check_password").html("<font color='green'>Current Password is Correct!</font>");
                }
            },error:function(){
                alert('Error');
            }
        })
    })
 })
 
// slash password 
// function myFunction() {
//     var x = documnet.getElementById("myInput");
//     var y = documnet.getElementById("hide1");
//     var z = documnet.getElementById("hide2");

//     if(x.type === 'password') 
//     {
//       x.type = "text";
//       y.style.display = "block";
//       z.style.display = "none";
//      }
//     else 
//     {
//       x.type = "password";
//       y.style.display = "none";
//       z.style.display = "block";
//     }
//   }