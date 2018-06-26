<?php require "header.php" ;?>

<?php 
$option = null;
$quiz = array(
	"Who is this?" => array(
		'1' => "Mortred",
		'2' => "Razor",
		'3' => "Aleria",
		'4' => "Traxex"
	),
	"What is that?" => array(
		'1' => "Fanelia",
		'2' => "Gary",
		'3' => "Abe",
		'4' => "Aster"
	),
);

foreach($quiz as $question => $answer){
	echo $question;
	foreach($answer as $index => $answer) {
        echo "<input type=\"radio\" name=\"$question\" value=\"$option\">$answer<br/>";
	}
}


?>

<?php require "footer.php";?>