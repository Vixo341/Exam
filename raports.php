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
                    <th>Title</th>
                    <th>Description</th>
                    <th>dateStart</th>
					<th>dateEnd</th>
					<th>Send</th>
                </tr>

                <?php
                $userData = $usr->getAllRaports();
                if($userData){
                    $i = 0;
                    while($result = $userData->fetch_assoc()){
                        $i++;
                        ?>

                        <tr>
                            <td> <?php echo $i; ?> </td>
                            <td> <?php echo $result['title']; ?> </td>
							<td> <?php echo $result['description']; ?> </td>
							<td> <?php echo $result['dateStart']; ?> </td>
							<td> <?php echo $result['dateEnd']; ?> </td>
							
							<td> <div class="viva_starttest">
            <a style="border-color: green; padding-top: 1px;padding-bottom: 1px; " href="sendEmail.php">Send Raport</a> </div>
        </td>
											
                        </tr>
                    <?php } } ?>

            </table>
        </div>
    </div>
<?php include 'inc/footer.php'; ?>