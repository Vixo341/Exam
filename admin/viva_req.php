<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/inc/header.php');
include_once ($filepath.'/../classes/User.php');

$usr = new User();
?>

<?php
$kolor = "";
$tak = "";
$nie ="";
     if(isset($_GET['del'])){
         $delid   = (int)$_GET['del'];
         $delData = $usr->deleteData($delid);
     }
	 
?>



    <div class="main">
        <h1 style="text-align: center; font-size: 24px">Students Result</h1>	
		
		        <?php
        if(isset($delData)){
            echo $delData;
        }
        ?>
		
		


        <div class="manageuser">
            <table class="tblone">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Exam Score</th>
					<th>Grade</th>
                    <th>Final Grade</th>
					<th>Action</th>
                </tr>

                <?php
                $userData = $usr->getAllVivaApplier();
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
							<td> <a style="color: red; text-decoration: none" onclick="return confirm('Are You Sure to Remove?')" href="?del=<?php echo $result['id']; ?>">Remove</a> </td>				
                        </tr>
                    <?php } } ?>

            </table>
        </div>
    </div>
<?php include 'inc/footer.php'; ?>