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
$userId = Session::get("userId");
$getData = $usr->getUserData($userId);
$result = $getData->fetch_assoc();
$usrmail = $result['email'];
?>

    <div class="viva_main" >
	</br>
        <div style="text-align: center;" >

				
				<?php				
@$end = ($_SESSION['score'] / $total) * 100;
?>


<strong style="color: #00FF00"><?php if ($end >= 50){
	$wynik = $zdane;}?></strong>

<strong style="color: #ff1c03"><?php if ($end <= 49){
	$wynik = $nope;}?></strong>


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
//	unset($_SESSION['score']);
?>
        </div>
        <br/><brm></br>

     <?php
        if(isset($_POST['viva_btn'])){
            $usr->insert_viva_data($_POST['name'], $_POST['email'], $_POST['facebook'], $_POST['grade'], $_POST['skype'], $_POST['usremail']);
        }
        ?>

        <div class="segment_viva" style="padding-left: 60px;padding-top: 70px">
            <form action="" method="post">
                <table style="padding-left: 60px; padding-top: 35px">
				
				<strong style="color: #444444; padding-left: 150px;" text-align: center> Type your Name</strong>
                    <tr>
                        <td>Name:</td>
                        <td><input name="name" id="name" type="text" required="" placeholder="Enter your name "></td>
                    </tr>
                    <tr>
                     <!--     <td>Date:</td> -->
                        <td><input name="email" id="email" type="hidden" value="<?php echo $date ?>" readonly></td>
                    </tr>
                    <tr>
                      <!--    <td>Your Score:</td> -->
                        <td><input name="facebook" type="hidden" id="facebook" value="<?php echo round($end) ?> %" readonly></td>
                    </tr>
					 <tr>
                     <!--     <td>Final Grade:</td> -->
                        <td><input name="skype" type="hidden" id="skype" value="<?php echo $ocena ?>" readonly></td>
                    </tr>
					<tr>
                       <!--  <td>Exam Status:</td> -->
                        <td><input name="grade" type="hidden" id="grade" value="<?php echo $wynik ?>" readonly></td>
                    </tr>
										<tr>
                       <!--  <td>Exam Status:</td> -->
                        <td><input name="usremail" type="hidden" id="usremail" value="<?php echo $usrmail ?>" readonly></td>
                    </tr>
                    <tr>
                    <tr>
                        <td></td>
                        <td class="button_class" style="padding-left: 60px;"><input type="submit" name="viva_btn" value="submit">
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <div style="text-align: center; padding-top: 45px" class="viva_starttest">
			<a style="border-color: green;" href="finaltestresult.php">View Final Result</a>
        </div>
<!-- dane do bazy: usremail -->

    </div>
<?php include 'inc/footer.php'; ?>