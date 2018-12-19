<?php include 'inc/header.php'; ?>
<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/classes/User.php');
include_once ($filepath.'/classes/process.php');
?>

<?php
$date = date('d.m.Y\r.');
$wynik = "";
$zdane = "Exam passed";
$nope = "Exam not Passed";
$ocena = "";
Session::checkSession();
$total    = $exm->getTotalRows();

?>

    <div class="viva_main">
	</br>
        <div style="text-align: center; padding-top: 120px;">
		 <strong style="color: #444444"> Your final Score: </strong><strong>  <?php
                if(isset($_SESSION['score'])){
                    echo $_SESSION['score'];
                }
                ?> </strong> correct answers on <strong><?php echo $total; ?></strong> Questions</li></br><brm></br>
				
				<?php				
@$end = ($_SESSION['score'] / $total) * 100;
	
?>
Your end score: <strong><?php echo round($end) ?> % / 100% </strong></br></br>
</br>
<strong style="color: #00FF00"><?php if ($end >= 50){
	$wynik = $zdane;
    echo $wynik;}?></strong>

<strong style="color: #ff1c03"><?php if ($end <= 49){
	$wynik = $nope;
echo $wynik;}?></strong>


<?php
if ($end <= 49){
	$ocena = 2;
} 
if ($end >= 50 && $end <= 70){
	$ocena = 3;
}
	
if ($end >= 70 && $end <= 85){
	$ocena = 4;
}
	
if ($end >= 85 && $end <= 100){
	$ocena = 5;
}	

?>

<?php
	unset($_SESSION['score']);
?>
        </div>
        <br/><brm></br>



        <div style="text-align: center; padding-top: 45px" class="viva_starttest">
            <a style="border-color: green;" href="viewAns.php">View Right Answer</a>
            <a style="border-color: green;" href="start_test.php">Start Test Again.!</a>
			<a style="border-color: green;" href="index.php">Back Home</a>
        </div>


    </div>
<?php include 'inc/footer.php'; ?>