<?php include 'inc/header.php'; ?>

<?php
Session::checkSession();
$question = $exm->getQuestion();
$total    = $exm->getTotalRows();
?>

    <div class="main">
        <h1>Start your Final Exam</h1>
        <div style="text-align: center" class="starttest">
            <h2>Start your Final Exam!</h2>
            <p>Information about exam like questions / how to select answers etc.</p>
            <ul>
                <li><strong>Number of Questions: </strong> <?php echo $total; ?> </li>
            </ul>
            <br/>
            <br/>

            <a style="color: green; border-color: green; border-radius: 13px" href="test.php?q=<?php echo $question['quesNo']; ?>">Start Test Now!</a>
        </div>
    </div>
<?php include 'inc/footer.php'; ?>