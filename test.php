<?php include 'inc/header.php'; ?>

<?php
Session::checkSession();

if(isset($_GET['q'])){
  $number = (int)$_GET['q'];   /*here now $number = quesNo*/
}else{
    header("Location:exam.php");
}
$total    = $exm->getTotalRows();
$question = $exm->getQuesByNumber($number);
?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $process = $pro->processData($_POST);
}
?>



<div class="main">
<h1>Question <?php echo $question['quesNo']; ?> of <?php echo $total;?> </h1>
	<div class="test">
		<form method="post" action="">
		<table> 
			<tr>
				<td colspan="2">
				 <h3 style="font-size: 18px">Question <?php echo $question['quesNo']; ?>: <?php echo $question['ques'];?> </h3>
				</td>
			</tr>

            <?php
                $answer = $exm->getAnswer($number);
            if($answer){
                while($result = $answer->fetch_assoc()){
            ?>

			<tr>
				<td>
				 <input type="radio" name="ans" value="<?php echo $result['id']; ?>"/>
                    <?php echo $result['ans']; ?>
				</td>
			</tr>
			<?php } } ?>

			<tr style="padding-left: 12px;" class="button_next">
			  <td >
				<input type="submit" name="submit" value="Next Question>"/>
				<input type="hidden" name="number" value="<?php echo $number; ?>"/>
			<input type="button" style="margin-left: 90px; padding-left: 12px;" value="<Previous Question" onclick="history.back()">
			</td>
			</tr>
		</table>
     </form>

</div>
 </div>

<?php include 'inc/footer.php'; ?>