<?php 
    $title="Problem List Page";
    include 'adminheader.php';
    include 'connect.php';
    
     if(!isset($_SESSION['name'])){
    header('Location:error.php');
}

    $query="SELECT * FROM problems";
    $result=mysqli_query($con,$query);
    $prob_list = array(); 
    while($row = mysqli_fetch_assoc($result)){
       $prob_list[$row['ID']]= array(
                    'ID' => $row['ID'],
                    'name' => $row['name'],
                    'extno'=> $row['extno'],
                    'email'=> $row['email'],
                    'department'=> $row['department'],
                    'problem'=> $row['problem'],
                    'program' => $row['program'],
                    'another' => $row['another']
                    ); 
    }
    
    if(isset($_POST['done'])){
        $id=$_POST['status'];
    $query2="INSERT INTO archive SELECT name, extno, email, department, problem, program, another FROM problems WHERE ID=$id";
    $result2=mysqli_query($con,$query2);
    if($result2==1)
            header("Location: archive.php?status=done");
        else
            header("Location: archive.php?status=notdone?id=$id");
        
    $query3="DELETE FROM problems WHERE ID= $id";
    $result3=mysqli_query($con,$query3);
    }
    
    if(isset($_POST['unsolved'])){
        $id2=$_POST['status'];
        $query4="INSERT INTO unsolved SELECT name, extno, email, department, problem, program, another FROM problems WHERE ID=$id2";
        $result4=mysqli_query($con,$query4);
        if($result4==1)
                header("Location: unsolved.php?status=done");
            else
                header("Location: unsolved.php?status=notdone?id=$id2");
            
    $query5="DELETE FROM problems WHERE ID= $id2";
    $result5=mysqli_query($con,$query5);

    }
?>

<div style="background-color: white; text-align: left; font-size:16px; padding-left: 30px; padding-bottom: 10px">
    
            <br>
 
            <h2 class="text" style="text-align:center">  Problem List Details... </h2>
            
                               
                <table id="tab" class="center" style="width: 800px">
                
                <tr>
                    <th>
                        <label>Employee Name</label>
                    </th>
                    
                    <td>
                        <label>Ext No.</label>
                    </td>
                    <td>
                        <label>Email</label>
                    </td>
                     <td>
                        <label>Department</label>
                    </td>
                    
                    <td>
                        <label>Problem</label>
                    </td>
                    
                    <td style="width: 150px">
                        <label>Order Status</label>
                    </td>
             <?php foreach($prob_list as $row){?>
                <tr>
                    <th>
                        <label><?php echo $row['name']; ?></label>
                    </th>
                    
                    <td>
                        <label><?php echo $row['extno']; ?></label>
                    </td>
                    
                     <td>
                        <label><?php echo $row['email']; ?></label>
                    </td>
                    
                     <td>
                        <label><?php echo $row['department']; ?></label>
                    </td>
                    
                    <td>
                         <label><?php echo $row['problem']; ?></label>
                         <label><?php echo $row['program']; ?></label>
                         <label><?php echo $row['another'];?></label>
                    </td>
                    
                    <td>
                        <form id="list" name="list" method="POST" action="problemlist.php">
                         <input type="hidden" name="status" id="status" value="<?php echo $row['ID']; ?>"/>
                         <input  type="submit" class="done" name="done" value="Done">
                         <input  type="submit" class="done" name="unsolved" value="Unsolved">
                    </form>
                        </td>
                    
                </tr>
<?php } ?>
            </table>
      <br>      
         

 </div>
            

<?php include 'footer.php';?>

