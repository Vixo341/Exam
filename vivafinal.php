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
	</br></br></br></br></br></br>
	        <div style="text-align: center;">
		 <strong style="color: #444444"> Thank you for completing the exam here you can see right answers and start exam again </strong>
		 
		         <div style="text-align: center; padding-top: 45px" class="viva_starttest"><br><br><br><br><br><br>
            <a style="border-color: green;" href="viewAns.php">View Right Answer</a>
            <a style="border-color: green;" href="start_test.php">Start Test Again.!</a>
			<a style="border-color: green;" href="index.php">Back Home</a>
        </div>
        </div>

        </div>


    </div>
<?php include 'inc/footer.php'; ?>