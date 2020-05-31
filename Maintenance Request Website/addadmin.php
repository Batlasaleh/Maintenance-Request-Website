<?php 
    $title="add admin";
    include 'adminheader.php';
    include 'connect.php';

    ?>
<?PHP 
if(!isset($_SESSION['name'])){
    header('Location:error.php');
}

if(isset($_POST['action_txt'])=='action_submit') {
        $username = $_POST['name'];
	$email = $_POST['email'];
	$password= $_POST['password'];
        $password2=$_POST['password2'];
        
        $query="SELECT * FROM  admin where name='$username'";
        $result= mysqli_query($con, $query);
        $rows = mysqli_fetch_assoc($result);
    
        if($rows>0){  $response = "Username already registered"; }
        else{  
            $sql = "INSERT INTO admin(name, email, pass) VALUES ('$username', '$email', '$password')";
            mysqli_query($con, $sql);
            $_SESSION['username']=$username;
            $response = "successful joined !!";
    }           
}
   
   
?> 	
<form id="register" name="registerform" style="text-align: center; margin-top: 50px; margin-bottom: 10px " method="post" action="addadmin.php" onsubmit="return checkForm(this);"> 
        <fieldset class="register">
                    <legend class="text" >Add an administrator</legend>

<?PHP  if(isset($_POST['action_txt'])<>'action_submit') { ?>
			<input name="action_txt" type="hidden" size="35" dir="ltr" maxlength="40" value="action_submit">
                    
                    
			
                    User name:<br> <input type="text" name="name" required>
                    <br>  <br>   
                    Email:<br> <input type="email" name="email" required>
                    <br>  <br> 
                    
                    Password:<br><input type="password" name="password" required>
                    <br>  <br>
                    Confirm Password:<br><input type="password" name="password2" required>
                    <p style="font-size:large;color:red;" >*Password must contain at least four characters, one number (0-9), one lowercase and uppercase letters (a-z).<br> 
                       *Password must be different from Username. <br> 
                    </p>
                        
                    <input type="submit" class="done" value="Register" name="register_btn" style="text-align: center;">
                    <?php } else {?>
			<p  style="font-size:large;color:red; "><?php echo $response; ?></p>
                  <?php } ?>
                    
        </fieldset>
  </form>
    <script type="text/javascript">

  function checkForm(form)
  {
      
      if(form.password.value != form.password2.value) {
        alert("Error: Passwords do not match!");
        form.password.focus();
        return false;
      }
  
    if(form.password.value != "" ) {
      if(form.password.value.length < 4) {
        alert("Error: Password must contain at least four characters!");
        form.password.focus();
        return false;
      }
      if(form.password.value == form.name.value) {
        alert("Error: Password must be different from Username!");
        form.password.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.password.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password.focus();
      return false;
    }

    alert("You entered a valid password: " + form.password.value);
    return true;
  }

</script>
<?php include 'footer.php';?>