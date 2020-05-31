 <?php  
    $title="Percentage of the Most Sender";
    include 'adminheader.php';
    include 'connect.php';
    
        if(!isset($_SESSION['name'])){
    header('Location:error.php');
}

 $query = "SELECT email, count(*)>5 as number FROM archive GROUP BY email";  
 $result = mysqli_query($con, $query);  
 ?>  

           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['email', 'number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["email"]."', ".$row["number"]."],";  
                          }
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of the most user submit more than 5 problems',  
                      is3D: true,
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  

           <br /><br />  
           <div style="width:900px;">  
                
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
<?php include 'footer.php';?>