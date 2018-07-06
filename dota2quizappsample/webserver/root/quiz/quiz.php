<?php require "header.php" ;?>


<?php 

require "questions.php";

if(isset($_POST['answers'])){
    $Answers = $_POST['answers']; // Get submitted answers.
    $Score = 0;
    $Total = 0;
    foreach ($Questions as $QuestionNo => $Value){

        echo $Value['Question'].'<br />';

        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']){
            echo '<span style="color: red;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>';
            $Total++; 
        } else {
            echo '<span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>';
            $Score++;
            $Total++; 
        }
        echo '<br/><hr>';
    }
    echo '<h4>You got <span style="color:green";>'.$Score. '</span> out of '.$Total.'.';
} 
else{
?>
    <form action="quiz.php" method="post" id="quiz">
    <?php foreach ($Questions as $QuestionNo => $Value){ ?>
    <li>
        <h4><?php echo $QuestionNo.". ".$Value['Question']; ?></h4>
        <?php 
            foreach ($Value['Answers'] as $Letter => $Answer){ 
            $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
        ?>
        <div>
     		<?php
        	if($Letter == 'A'){
        		$Checked = ' checked="checked" '; 
        	}
        	else{
        		$Checked = '';
        	} 
        	?>
            <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter;?>" <?php echo $Checked; ?> >
            <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
        </div>
        <?php } ?>
    </li>
    <?php } ?>
    <input type="submit" value="Submit Quiz" />
    </form>
<?php 
}
?>
<?php require "footer.php";?>