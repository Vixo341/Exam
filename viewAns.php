<?php include 'inc/header.php'; ?>

<?php
Session::checkSession();
$total    = $exm->getTotalRows();
?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $process = $pro->processData($_POST);
}
?>

    <div class="main">
        <h1>All Questions & Answers </h1>
        <div class="test">

                <table>
                    <?php
                       $getQues = $exm->getQuesByOrder();
                    if($getQues){
                        while($question = $getQues->fetch_assoc()){
                    ?>
                    <tr>
                        <td colspan="2">
                            <h3 style="font-size: 18px">Question <?php echo $question['quesNo']; ?>: <?php echo $question['ques'];?> </h3>
                        </td>
                    </tr>

                    <?php
                    $number = $question['quesNo'];
                    $answer = $exm->getAnswer($number);
                    if($answer){
                        while($result = $answer->fetch_assoc()){
                            ?>

                            <tr>
                                <td>
                                    <input type="radio"/>
                                    <?php
                                       if($result['rightAns']== '1'){
                                           echo "<span style='color: green'>".$result['ans']."</span>";
                                       }
									     if($result['rightAns']== '0'){
                                           echo "<span style='color: red'>".$result['ans']."</span>";
                                       }
                                    ?>
                                </td>
                            </tr>
                        <?php } } ?>
                    <?php } } ?>
                </table>
        </div>
		
		     <div style="text-align: center; padding-top: 45px" class="viva_starttest">
            <a style="border-color: green;" href="start_test.php">Start Test Again.!</a>
			<a style="border-color: green;" href="index.php">Back Home</a>
        </div>
    </div>

<?php include 'inc/footer.php'; ?>