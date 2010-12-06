$(document).ready(function() {
  window.setInterval(function() {
    var last_date = $(this).attr('title');
    $.ajax({
        url: '/',
        type: 'post',
        data: {date : last_date, action: 'get_next_image'},

        success: function(response) {
          $("img.webcam-image").attr('src', response); 
          var tmp = new Array();
          tmp = response.split('-');
          if (tmp) {
            var tmp2 = tmp[7].split('.');
            $(".webcam-date").html(tmp[2] + '-' + tmp[3] + '-' + tmp[4] + ' ' + tmp[5] + ':' + tmp[6]  + ':' + tmp2[0]);
          }   
        },

        error: function(error) {
          $("img.webcam-image").attr('src', error);  
        }
    });    
  }, 3000);
});
