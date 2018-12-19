<?php include 'inc/header.php'; ?>

<?php
  Session::checkSession();
  $userId = Session::get("userId");
$getData = $usr->getUserData($userId);
$result = $getData->fetch_assoc();
$usremail = $result['email'];
?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $updateUser = $usr->updateUserData($userId, $_POST);
}
?>

    <div class="main">
        <h1>Your Results</h1>
		
		
		            <?php
            if(isset($updateUser)){
                echo $updateUser;
            }
            ?>

	
            <table class="tblone">
			

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Exam Score</th>
					<th>Grade</th>
                    <th>Final Grade</th>
                </tr>

				<?php
                $userData = $usr->getUserInfomration($usremail);
                if($userData){
                    $i = 0;
                    while($result = $userData->fetch_assoc()){
                        $i++;
                        ?>
				
                           <tr>
                            <td> <?php echo $i; ?> </td>
                            <td> <?php echo $result['name']; ?> </td>
							<td> <?php echo $result['email']; ?> </td>
							<td> <?php echo $result['facebook']; ?> </td>
							<td> <a style="color: #00FF00"><?php if ($result['grade'] >= 3){
																	$kolor = $result['grade'];
																	echo $kolor;}?>

								 <a style="color: #ff1c03"><?php if ($result['grade'] <= 2){
																	$kolor = $result['grade'];
																	echo $kolor;}?>	 </td>
						    <td> <?php echo $result['skype']; ?> </td>				
                        </tr>
            <?php } } ?>

            </table>
 </div>
<?php include 'inc/footer.php'; ?>