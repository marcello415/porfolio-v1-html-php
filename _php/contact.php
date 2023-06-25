<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8" />
<title>Marcello Miranda</title>
<?php include("includes/header.php"); ?>
<script src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script>
function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(37.694832, -122.463905),
          zoom: 10,
          disableDefaultUI: true,
		  mapTypeId: google.maps.MapTypeId.ROADMAP
		  
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="map_canvas"></div>
<div class="clear"></div>
<div id="contact-wrap">
 <section>
    <div class="twocol">
    <h3>Contact Me!</h3>
   <p>Thanks for coming to my website! I am currently accepting projects and full-time employment. Feel free to send me a email if you have any projects, questions or just want to say hello! :)</p>
	<p>Marcello Miranda</p>
    
	<p>contact@marcellomiranda.com</p>
  </div>
  <div class="twocol">
   <p style="padding-top: 15px;"><img src="http://www.w3.org/html/logo/badge/html5-badge-h-css3-semantics.png" alt="html 5 logo"></p>
   <p style="font-size: 10px;">This site was built using: Vaild <a href="https://tinyurl.com/yd9ylmqv" target="_blank">HTML5</a>, <a href="https://tinyurl.com/yahx68zw" target="_blank">CSS3</a> and 100% Responsive Design</p>
  </div>
 </section>
</div>
<?php include("includes/footer.php"); ?>
</body>
</html>
