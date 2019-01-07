<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/inc/header.php');
include_once ($filepath.'/../classes/User.php');

$usr = new User();
?>
<?php
//$date = date('d.m.Y\r.');
?>

  <style>
      .adminpanel{
          border: 1px solid #dddddd;
          border-radius: 12px;
          color: #999999;
          margin: 18px auto 0;
          padding: 15px;
          width: 650px;
      }
  </style>

     <?php
        if(isset($_POST['report_add'])){
            $usr->insert_raport_data($_POST['title'], $_POST['description'],$_POST['dateStart'], $_POST['dateEnd']);
        }
        ?>
    <div class="main">
        <h1 style="text-align: center; font-size: 24px">Add Raport</h1>

        <div class="adminpanel">
            <form action="" method="post">
                <table>
				                    <tr>
                        <td>Title</td>
                        <td>:</td>
                        <td><input type="description" name="title" id="title" placeholder="Enter a title" required=""/></td>
                    </tr>

                    <tr>
                        <td>Description</td>
                        <td>:</td>
                        <td><input type="description" name="description" id="description" placeholder="Enter a Description" required=""/></td>
                    </tr>
					<tr>
                        <td>Date Start</td>
                        <td>:</td>
                        <td><input type="date" name="dateStart" required=""/></td>
                    </tr>
                    <tr>
                        <td>Date End</td>
                        <td>:</td>
                        <td><input type="date" name="dateEnd" id="dateEnd"/></td>
                    </tr>
                 <!--   <tr>
                        <td>Option 2</td>
                        <td>:</td>
                        <td><input type="text" name="ans2" placeholder="Enter option 2..." required=""/></td>
                    </tr>
                    <tr>
                        <td>Option 3</td>
                        <td>:</td>
                        <td><input type="text" name="ans3" placeholder="Enter option 3..." required=""/></td>
                    </tr>
                    <tr>
                        <td>Option 4</td>
                        <td>:</td>
                        <td><input type="text" name="ans4" placeholder="Enter option 4..." required=""/></td>
                    </tr>
                    <tr>
                        <td>Correct Answer</td>
                        <td>:</td>
                        <td><input type="number" name="rightAns" required=""/></td>
                    </tr>
								-->
                    <tr>
                        <td class="button_class" colspan="3" align="center">
                            <input style="color: green;" type="submit" name="report_add" value="Add a Raport" required=""/>
                        </td>
                    </tr>
                </table>
            </form>
        </div>



    </div>
<?php include 'inc/footer.php'; ?>