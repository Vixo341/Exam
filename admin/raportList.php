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
         $delData = $usr->deleteRaport($delid);
     }
	 
?>



    <div class="main">
        <h1 style="text-align: center; font-size: 24px">Raports List</h1>	
		
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
					<th>Action</th>
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
							<td> <a style="color: red; text-decoration: none" onclick="return confirm('Are You Sure to Remove?')" href="?del=<?php echo $result['raportId']; ?>">Remove</a> </td>				
                        </tr>
                    <?php } } ?>

            </table>
        </div>
    </div>
<?php include 'inc/footer.php'; ?>