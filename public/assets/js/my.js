$( document ).ready(function() {

      $("#playlist li").on("click", function() {
          var murl = $(this).attr("movieurl");

          if (murl=="") {
              $('#divvideoplayer').css("display", "block");
              $('#videoarea').css("display", "none");
          }
          else{
          $('#divvideoplayer').css("display", "none");
              $('#videoarea').css("display", "block");
          }

          $("#video_name").html( $(this).attr("moviename") );
          videoindex = $(this).attr("movieid");
          //alert(videoindex);
          $("#videoarea").attr({
              "src": $(this).attr("movieurl"),
              "poster": "",
              "autoplay": "autoplay"
          })


          logged =  document.getElementById("logged").innerHTML
          vcat =  document.getElementById("videocat").innerHTML;
          $.ajax({
              method: "POST",
              url: "../logvideoplaying.php",
              data: { username: logged, videoid: videoindex,videocat: vcat }
          }).done(function( msg ) {
              //alert( "Data Saved: " + msg );
          });

      });

      $("#videoarea").attr({
          //"src": "../img/videoline.mp4",//$("#playlist li").eq(0).attr("movieurl"),
          "src": $("#playlist li").eq(1).attr("movieurl"),
          "poster": "../img/logo.png",//$("#playlist li").eq(0).attr("moviesposter"),
          "autoplay": "autoplay"
      });

      logged =  document.getElementById("logged").innerHTML
      vcat =  document.getElementById("videocat").innerHTML;
      $.ajax({
          method: "POST",
          url: "../logvideoplaying.php",
          data: { username: logged, videoid: 1,videocat: vcat }
      }).done(function( msg ) {
          //alert( "Data Saved: " + msg );
      });


      // $('[id^=cardnumber]').keypress(validateNumber);

      document.getElementById('videoarea').addEventListener('ended',myHandler,false);
      alert(8);

});

function myHandler(e) {
    // What you want to do after the event
    alert(5);
    var filename = $("#videoarea").attr('src').replace(/^.*[\\\/]/, '');
    var res = filename.split(".", 2) ;
    //alert(res[0]);
    var nextVideoId = parseInt(res[0])+1;
    var murl = $("#playlist li").eq(nextVideoId).attr("movieurl");
    //alert(murl);

    if (murl=="") {
        $('#divvideoplayer').css("display", "block");
        $('#videoarea').css("display", "none");
    }
    // document.getElementById('divvideoplayer').innerHTML = "<a href='<?=$path;?>/payments'><img src'/img/video.png' /></a>";
    else  {
        $(this).attr({
        "src": $("#playlist li").eq(nextVideoId).attr("movieurl"),
        "poster": "",//$("#playlist li").eq(0).attr("moviesposter"),
        "autoplay": "autoplay"
        })

          logged =  document.getElementById("logged").innerHTML
          vcat =  document.getElementById("videocat").innerHTML;
        $.ajax({
            method: "POST",
            url: "../logvideoplaying.php",
            data: { username: logged, videoid: nextVideoId,videocat: vcat }
        }).done(function( msg ) {
            //alert( "Data Saved: " + msg );
        });
    }
  }

var password = document.getElementById("password")
  , confirm_password = document.getElementById("password_confirm");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
