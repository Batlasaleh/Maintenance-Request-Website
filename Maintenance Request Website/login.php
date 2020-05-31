<?php 
    $title="Login";
    include 'header.php';
    include 'connect.php';
    ?>
<?php
    session_start();
if(isset($_POST['action_txt'])=='action_submit') 
        {
    $username=$_POST['name'];
    $pass=$_POST['pass'];
    
           
    $query="SELECT * FROM  admin where name='$username' and pass='$pass'";
    $result= mysqli_query($con, $query);
    $rows = mysqli_fetch_assoc($result);

    if ($result) {
        if((mysqli_num_rows($result)==1))
        {
            $_SESSION['name']=$username;
            header('Location: problemlist.php?status=valid');
    }
        else{
            
            $invalid= "Sorry, your username or password is incorrect!<br><a href='login.php"."'  style='color:blue'>try again</a>";  
    
}       
        
}
        }
?>

<div class="login">
    <form action="login.php" method="post">
                
                <fieldset style="width: 200px; margin-left: 90px; padding: 10px; margin-bottom: 30px ">
                    			<input name="action_txt" type="hidden" size="35" dir="ltr" maxlength="40" value="action_submit">

                    <?PHP  if(isset($_POST['action_txt'])<>'action_submit') { ?>
                    User name:<br> <input type="text" name="name" id="username" required>
                    <br>
                    
                    Password:<br><input type="password" name="pass" id="password" required>
                    <br><br>
                    
                    
                     <input type="submit" value="Login" name="log" id="log" style="margin-left: 150px;">
                    <br>
                    <?php } else { ?>
                    <p  style="font-size:large;color:red; "><?php echo $invalid; ?></p>
                    <br>
                    <?php } ?>
                    
                </fieldset>
            </form>
    <div style="background-color: white; padding-right: 1000px;">
        <br>
    </div>
        </div>
<div class="info">
    <p>This system for administrator only.</p>
    <p>Only administrator can login!</p>
</div>


<?php include 'footer.php';?>

