<?php include 'inc/header.php'; ?>

<?php
Session::checkSession();
?>

    <div class="main">
        <h1>User Panel</h1>
        <div style="text-align: center" class="starttest">
            <h2>Welcome to User Panel </h2>
            <p>you can start your exam by clicking the button below or by selecting "Exam" from the panel at the top. </p>
            <br/>
            <br/>
			<br/>
			<br/>

            <a style="color: green; border-color: green; border-radius: 13px" href="start_test.php">Start Test Now!</a>
        </div>
    </div>
<?php include 'inc/footer.php'; ?>