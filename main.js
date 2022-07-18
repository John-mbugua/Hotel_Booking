(function($){
  function aos_init() {
    AOS.init({
      duration: 1000,
      once: true
    });
  }

  $(window).on('load', function() {
    aos_init();
  });

//intializing owl carousel
  $(document).ready(function(){
      $("#slider1").owlCarousel({
        autoplay:true,
        loop:true,
        dots:true,
        duration:3000,
       responsive:
       {
         900: {
           items:1
         },
         500: {
          items:1
         }
       }
      })
  });

  //use of isotope  and some jquery to filter data using butons 
//this trick is used inmost portfolio
$(window).on('load', function() {
  var menuIsotope = $('.menu-container').isotope({
    itemSelector: '.menu-item',
    layoutMode: 'fitRows'
  });

  $('#menu-f li').on('click', function() {
    $("#menu-f li").removeClass('filter-active');
    $(this).addClass('filter-active');

    menuIsotope.isotope({
      filter: $(this).data('filter')
    });
   // aos_init();
  });
});

//intializing owl carousel
$(document).ready(function(){
  $("#rooms-slider").owlCarousel({
    autoplay:false,
    loop:true,
    dots: true,
    duration:3000,
   responsive:
   {
     900: {
       items:1
     },
     500: {
      items:1
     }
   }
  })
});


///ajax part for booking table
$(document).ready(function () {
  
  $('#food-form').submit(function (e) { 
    e.preventDefault();
    var fname = $('#fname').val();
    var sname = $('#sname').val();
    var form;
    var url;
    var checkin = $("#date1").val();
    var date = new Date();
    date = date.getDate().toString();
    checkin = checkin.toString();
    checkin = checkin.substr(8, 2);
    checkin = parseInt(checkin);
    date = parseInt(date);
    //disabling past dates
  
    
    if (!isNaN(fname)  ) {
      alert("numeric values not allowed in firstname field");
      var form= "";
      var url = "";
    }
    else if(!isNaN(sname)){
      alert("numeric values not allowed in second name field");
      var form= "";
      var url = "";
    }
    else if(checkin < date){
      alert("past dates are not allowed in checkin  field");
      var form= "";
      var url = "";
    }
    else {
      var form= $(this);
      var url = form.attr('action');
    }
  
    $('#response').addClass('displayresponse');
    
    $.ajax({
      type: "post",
      url: url,
      data: form.serialize(),
      
      success: function (response) {
       
        $('#response').prepend("table reserved success wait for contact from the customer care");
        form[0].reset();
      },
      error: function(response) {
        $('#response').prepend("unsuccessiful submission");
      }
    });
  });
  
});

///ajax for booking rooms
$(document).ready(function () {
  
  $('#formappointment').submit(function (e) { 
    e.preventDefault();
    var fname = $('#firstname').val();
    var sname = $('#secondname').val();
    var checkin = $("#check-in").val();
    var checkout = $("#check-out").val();
    var date = new Date();

    date = date.getDate().toString();
    checkin = checkin.toString();
    checkout = checkout.toString();
    var check = checkin.substr(8, 2);
    checkout = checkout.substr(8, 2);
    checkout = parseInt(checkout);
    check = parseInt(check);
    date = parseInt(date);
   
    var form;
    var url;
    //disabling past dates
    var datetoday = new Date();
    
    if (!isNaN(fname)  ) {
      alert("numeric values not allowed in firstname field");
      var form= "";
      var url = "";
    }
    else if(!isNaN(sname)){
      alert("numeric values not allowed in second name field");
      var form= "";
      var url = "";
    }
    else if(check < date){
      alert("past dates are not alowed in check in field");
      var form= "";
      var url = "";
    }
    else if(checkout < date){
      alert("past dates are not alowed in check out field");
      var form= "";
      var url = "";
    }
    else {
      var form= $(this);
      var url = form.attr('action');
    }
   
      
   
      $.ajax({
        type: "post",
        url: url,
        data: form.serialize(),
        
        success: function (response) {
         alert("room reserved success wait for contact from the customer care");
        form[0].reset();
         
        },
        error: function(response) {
          alert("unsuccessiful submission");
        }
      });
  });
  
});


})(jQuery);