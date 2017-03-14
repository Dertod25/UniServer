<?php 

$exercises = array(
	"Learn PHP on Monday",
	"Learn PHP on Tuesday",
	"Learn PHP on Wednesday ",
	"Watch Lesson 4 Video on Thursday",
	"Learn PHP on Friday",
	"Drink beer (wine, whiskey etc.) and relax on Friday",
	"Watch Lesson 5 Video on Sanday"
);

$today = date('N');
$today--;
?>
<h2 class="text-center"> 
	You must  <?php echo $exercises[ $today ]; ?> ;) 
</h2>
