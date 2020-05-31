<?php 
    $title="Unsolved List Page";
    include 'adminheader.php';
    include 'connect.php';
    
    if(!isset($_SESSION['name'])){
    header('Location:error.php');
}
        $query="SELECT * FROM unsolved";
        $result=mysqli_query($con,$query);
        $prob_list = array(); 
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    


?>
<div style="background-color: white; text-align: left; font-size:16px; padding-left: 30px; padding-bottom: 10px">
            
 
            <h2 class="text" style="text-align:center">  Unsolved List Details... </h2>
            <form id="list" name="list" method="Get" action="archive.php">
                               
                <table id="tab" class="center" style="width: 780px">
                
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
                </tr>
             <?php foreach($row as $row){?>
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
                    
                </tr>
<?php } ?>
            </table>
      <br>      
         
</form>
 </div>
            

<?php include 'footer.php';?>