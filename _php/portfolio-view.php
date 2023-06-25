<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8" />
<title>Marcello Miranda</title>
<?php include("includes/header.php"); ?>

<div id="port-wrap">
 <section>
  
<?php
  
$img = $_GET['img'];
$next  = 0;
$previous  = 0;

?>
  <div class="portcollt">
  <a href="portfolio.php" class="arrowviewlrg"><img src="images/lt_arrow.gif" alt="arrow"/></a>
  <!--<a href="portfolio-view.php?img=<?php echo $img;?>"><img src="images/rt_arrow.gif" /></a>-->
  <div class="clear"></div>

<?php
if ($img == "1"){
	
echo '<h4>Arcadian Health</h4> 
      <p>Details:</p>
	   <span class="skillbox">HTML 4</span>
 	   <span class="skillbox">CSS 2</span>
 	   <span class="skillbox">Photoshop </span>
 	   <span class="skillbox">UX / UI</span>
	   <span class="skillbox">QA Testing</span>
	   <span class="skillbox">PSD to HTML</span>';
}elseif($img == "2"){
	
echo '<h4>BigChurch.com</h4>
        <p>Details:</p>
       <span class="skillbox">HTML 4</span>
 	   <span class="skillbox">CSS 2</span>
	   <span class="skillbox">QA Testing</span>
	   <span class="skillbox">PSD to HTML</span>';	

}elseif($img == "3"){
echo ' <h4>FriendFinder.com</h4>
        <p>Details:</p>
		<span class="skillbox">HTML 4</span>
 	   <span class="skillbox">CSS 2</span>
	   <span class="skillbox">QA Testing</span>
	   <span class="skillbox">PSD to HTML</span>';	
}elseif($img == "4"){

echo ' <h4>Millionairemate.com</h4>
        <p>Details:</p>
		<span class="skillbox">HTML 4</span>
 	   <span class="skillbox">CSS 2</span>
	   <span class="skillbox">QA Testing</span>
	   <span class="skillbox">PSD to HTML</span>';	
		
}elseif($img == "5"){

echo '<h4>Dine.com</h4>
        <p>Details:</p>
		<span class="skillbox">HTML 4</span>
 	   <span class="skillbox">CSS 2</span>
	   <span class="skillbox">QA Testing</span>
	   <span class="skillbox">PSD to HTML</span>';
	
}elseif($img == "6"){
	
echo ' <h4>Indexideas.com</h4>
        <p>Details:</p>
		<span class="skillbox">HTML 4</span>
 	   <span class="skillbox">CSS 2</span>
 	   <span class="skillbox">Photoshop </span>
 	   <span class="skillbox">UX / UI</span>
	   <span class="skillbox">Content Development</span>
	   <span class="skillbox">QA Testing</span>
	   <span class="skillbox">PSD to HTML</span>';	
	
}elseif($img == "7") {
	
echo '<h4>Sfgov.com City of San Francisco</h4>
        <p>Details:</p>
		<span class="skillbox">HTML 4</span>
 	   <span class="skillbox">CSS 2</span>
 	   <span class="skillbox">Photoshop </span>
 	   <span class="skillbox">UX / UI</span>
	   <span class="skillbox">CMS Intergration</span>
	   <span class="skillbox">QA Testing</span>
	   <span class="skillbox">PSD to HTML</span>';	
}elseif($img == "8") {

echo '<h4>Sfgov Office of the Mayor</h4>
        <p>Details:</p>
		<span class="skillbox">HTML 4</span>
 	   <span class="skillbox">CSS 2</span>
 	   <span class="skillbox">Photoshop </span>
 	   <span class="skillbox">UX / UI</span>
	   <span class="skillbox">CMS Intergration</span>
	   <span class="skillbox">QA Testing</span>
	   <span class="skillbox">PSD to HTML</span>';	
	
}elseif($img == "9") {

echo '<h4>Sfgov Rent Board</h4>
        <p>Details:</p>
		<span class="skillbox">HTML 4</span>
 	   <span class="skillbox">CSS 2</span>
 	   <span class="skillbox">Photoshop </span>
 	   <span class="skillbox">UX / UI</span>
	   <span class="skillbox">CMS Intergration</span>
	   <span class="skillbox">QA Testing</span>
	   <span class="skillbox">PSD to HTML</span>';

}
?>
  
  </div>
  

  
  
  
  <div class="portcolrt">
  
<?php
if ($img == "1"){
echo '<img src="images/302-1-lg.jpg" alt="Arcadian Health"/>';
}elseif($img == "2"){
echo '<img src="images/302-2-lg.jpg" alt="Bigchurch.com"/>';	
}elseif($img == "3"){
echo '<img src="images/302-3-lg.jpg" alt="FriendFinder.com"/>';	
}elseif($img == "4"){
echo '<img src="images/302-4-lg.jpg" alt="Millionairemate.com"/>';	
}elseif($img == "5"){
echo '<img src="images/302-5-lg.jpg" alt="Dine.com"/>';
}elseif($img == "6"){
echo '<img src="images/302-6-lg.jpg" alt="Indexideas.com" />';	
}elseif($img == "7") {
echo '<img src="images/302-16-lg.jpg" alt="Sfgov.com City of San Francisco" />';	
}elseif($img == "8") {
echo '<img src="images/302-15-lg.jpg" alt="Sfgov Office of the Mayor"/>';	
}elseif($img == "9") {
echo '<img src="images/302-17-lg.jpg" alt="Sfgov Rent Board" />';	
}
?>


</div>
<a href="portfolio.php" class="arrowviewsm"><img src="images/lt_arrow.gif" alt="arrow" /></a>
 </section>
</div>
<?php include("includes/footer.php"); ?>
</body>
</html>
