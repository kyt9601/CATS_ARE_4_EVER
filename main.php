<!DOCTYPE  html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/animAndStyle.css">
<?php 
$page =0;
if (isset($_GET['page'])){
	$page =preg_replace("/[^a-z0-9_ ]/i", "", $_GET['page'] );
	
}
$mytitle = "Cats";
switch($page){
	case 1:
	$mytitle ="American Shorthair";
	break;
	case 2:
	$mytitle ="Munchkin";
	break;
	case 3:
	$mytitle ="Norwegian Forest";
	break;
	case 4:
	$mytitle ="Persian";
	break;
	case 5:
	$mytitle ="Russian Blue";
	break;
	case 6:
	$mytitle ="Turkish Angora";
	break;
	case 7:
	$mytitle ="cat Food";
	break;
	case 8:
	$mytitle ="cat Video";
	break;
	case 9:
	$mytitle ="cat Cafe";
	break;
	case 10:
	$mytitle ="Our Team";
	break;
	default:

	break;
	
	
}
echo "<title>".$mytitle."</title>"
?>

</head>
<body>
<div class="header">
<h1 align="center">CATS</h1>
</div>
<div class="row">

		<div class="col-3 col-s-3 menu">

<ul>
<a class="nostyle" href="main.php?page=0" alt="go back to the main menu"><li>Main Menu</li></a>
<a class="nostyle" href="main.php?page=1" ><li>American Shorthair</li></a>
<a class="nostyle" href="main.php?page=2" ><li>Munchkin</li></a>
<a class="nostyle" href="main.php?page=3" ><li> Norwegian Forest </li></a>
<a class="nostyle" href="main.php?page=4" ><li>Persian</li></a>
<a class="nostyle" href="main.php?page=5" ><li>Russian Blue</li></a>
<a class="nostyle" href="main.php?page=6" ><li>Turkish Angora</li></a>
<a class="nostyle" href="main.php?page=7" alt="Food ?"><li>Best Cat food</li></a>
<a class="nostyle" href="main.php?page=8" alt="Keep calm and watch Cats"><li>Random Cats Videos</li></a>
<a class="nostyle" href="main.php?page=9" alt="The best places to see Cats"><li>Cat Cafe</li></a>
</ul>


</div>

<?php 
$page =0;
if (isset($_GET['page'])){
	$page =preg_replace("/[^a-z0-9_ ]/i", "", $_GET['page'] );
	
}
switch($page){
	case 1:
	include("AmericanShorthair.php");
	break;
	case 2:
	include("Munchkin.php");
	break;
	case 3:
	include("NorwegianForest.php");
	break;
	case 4:
	include("Persian.php");
	break;
	case 5:
	include("RussianBlue.php");
	break;
	case 6:
	include("TurkishAngora.php");
	break;
	case 7:
	include("catfood.php");
	break;
	case 8:
	include("catVideo.php");
	break;
	case 9:
	include("catcafe.php");
	break;
	case 10:
	include("team.php");
	break;
	default:
	echo 
	"<div class=\"col-6 col-s-9\">
<ul class=\"type2\">
	<h1>General talk about Cats</h1>
<p>This website is dedicated to the love of Cats, they have been a huge part of Human entire life.</p>

</ul>

<ul class=\"type1\">
<h2>Cats Home</h2>
<p>Cats can sleep almost everywhere but they usually prefer high places so that they can see what is going on around. They also like to be hidden so that they feel safer and can rest in peace if they don’t want to be disturbed. Cats can either never go outside if they are use to it since they are kitten or always be outside. The only important thing is that water and litter must be available for them at any time. So you need to make sure when you are going to sleep that they can have water available.<p>
</ul>
</div>";
	break;
	
	
}




?>


<div class="col-3 col-s-12">
  <div class="aside">
    <h2>Random Cat Facts</h2>
	<?php 
	$monfichier = fopen('fact.txt', 'r+');
	
	$size =0;
	$stack= array(""); 
	array_pop($stack);
	$line = fgets($monfichier);
	while($line != "")
	{
		$size = array_push($stack,$line);
		$line = fgets($monfichier);
	}
	if($size>=1){
	$indexTofetch = rand(  0 ,  $size -1);
	$indexTofetch2 = rand(  0 ,  $size -1);
	if($indexTofetch == $indexTofetch2){
		$indexTofetch2+=1;
		$indexTofetch2%=$size -1;
		}
	$indexTofetch3 = rand(  0 ,  $size -1);
	if($indexTofetch == $indexTofetch3){
		$indexTofetch3+=1;
		$indexTofetch3%=$size -1;
	}
	if($indexTofetch2 == $indexTofetch3){
		$indexTofetch3+=1;
		$indexTofetch3%=$size -1;
	}
	 echo("<h2>Fact 1</h2>");
	 echo "<p>".$stack[$indexTofetch]."</p>";
	 echo("<h2>Fact 2</h2>");
	 echo"<p>".$stack[$indexTofetch2]."</p>";
	  echo("<h2>Fact 3</h2>");
	   echo "<p>".$stack[$indexTofetch3]."</p>";
	  
	  }
	  else
	  {
		   print("<h2>Fact 1</h2>");
		   print("<p>Cats make life better</p>");
	 print("<h2>Fact 2</h2>");
	 print("<p>Don't give milk to cats it make them sick!</p>");
	  print("<h2>Fact 3</h2>");
		   print("<p>The first cats were discovered 2000 BC</p>");
	  }
	  fclose($monfichier);
	?>
	</br>
	
	<?php 
	$page =0;
if (isset($_GET['page'])){
	$page =preg_replace("/[^a-z0-9_ ]/i", "", $_GET['page'] );
	
}
echo '<p><a class="refresh nostyle" href="main.php?page='.$page.'" alt="refresh">New Facts? </a></p>';
?>

    
  </div>
</div>
</div>

<div class="col-12 col-s-12">
</div>

<div class="col-3 col-s-12">
</br> </br>
  <div class="commentary">
    <h2>Your Comment:</h2>
	<?php 
	$page =0;
if (isset($_GET['page'])){
	$page =preg_replace("/[^a-z0-9_ ]/i", "", $_GET['page'] );
	
}
echo '<form 	class="dark-matter" " action="main.php?page='.$page.'" method="post">';

?>
<input class="dark-matter" type="text" maxlength="30" name="nickname" placeholder="nickname"  />
</br>
<textarea class="dark-matter" name="message" rows="8" cols="45" maxlength="300" placeholder="Your comment..." >
</textarea>
</br>
<input class="button"  type="submit" value="Send" />

  </div>
</div>
</div>

<div class="col-6 col-s-9">

</div>

<div class="col-9 col-s-12 menu">
  <div class="commentary">
    <h2>Most Recent Comments</h2>
	<?php 
	$monfichier = fopen('comments.php', 'a');
	$thename ="";
	if ( isset($_POST['nickname'])){
	$thename = preg_replace("/[^a-z0-9_ ]/i", "", $_POST['nickname'] );
	}
	$thecomment = "";
	if ( isset($_POST['message'] )){
	$thecomment = preg_replace("/[^a-z0-9_ ]/i", "",$_POST['message'] );
	}
	if ($thename != "" && $thecomment != ""  && strlen ($thename)<31 && strlen ($thecomment)<301)
	{
		$month = date("M");
		$year = date("Y");
		$day = date("d");
		$heure = date("h");
		$ampm =date("A");
		$min = date("i");
		$newcom="\n<ul> <em>".$day." ".$month." ".$year."</em> [".$heure.":".$min." ".$ampm."]</br> <strong>".$thename.": </strong>".$thecomment."</ul></br>";
		fputs($monfichier, $newcom);
	}
	
	fclose($monfichier);
	?>
    <?php 
	$size = 0;
	$monfichier = fopen('comments.php', 'r+');
	
	
	$stack= array("<ul> <em>06 Jun 2017</em> [06:11 PM]</br> <strong>Arya : </strong> I Love Cats so much !!</ul></br>");
	$line = fgets($monfichier);
	while($line != "")
	{
		$size = array_push($stack,$line);
		$line = fgets($monfichier);
	}
	for($i =0; $i<5 && $i<$size ; $i+=1)
	{
		print_r(array_pop($stack));
		
	}
	//include( "comments.php" ); 
	
	fclose($monfichier);
	?>
	
  </div>
</div>




<div class="col-12 col-s-12 menu">
	 <div class="footer">
	 <button class="moreabout nostyle">Go Top</button>
	  <p>Your feelings about cats matters, you can learn more about us <a class="moreabout nostyle" href="main.php?page=10" alt="Our Team"> Here </a></p>
	</div>
</div>




</body>
</html>
