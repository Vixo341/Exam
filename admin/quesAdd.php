<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/inc/header.php');
include_once ($filepath.'/../classes/Exam.php');

$exm = new Exam();
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
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $addQues = $exm->addQuestions($_POST);
    }
     /*get total*/
     $total = $exm->getTotalRows();
     $next = $total + 1;
    ?>

    <div class="main">
        <h1 style="text-align: center; font-size: 24px">Add Question</h1>

        <?php
           if(isset($addQues)){
               echo $addQues;
           }
        ?>

        <div class="adminpanel">
            <form action="" method="post">
                <table>
                    <tr>
                        <td>Question ID</td>
                        <td>:</td>
                        <td><input type="number" value="<?php
                               if(isset($next)){
                                   echo $next;
                               }
                            ?>" name="quesNo"/></td>
                    </tr>
                    <tr>
                        <td>Question</td>
                        <td>:</td>
                        <td><input type="text" name="ques" placeholder="Enter a Question" required=""/></td>
                    </tr>
                    <tr>
                        <td>Option 1</td>
                        <td>:</td>
                        <td><input type="text" name="ans1" placeholder="Enter option 1..." required=""/></td>
                    </tr>
                    <tr>
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
                    <tr>
                        <td class="button_class" colspan="3" align="center">
                            <input style="color: green;" type="submit" value="Add a Question" required=""/>
                        </td>
                    </tr>

                </table>
            </form>
        </div>



    </div>
<?php include 'inc/footer.php'; ?>