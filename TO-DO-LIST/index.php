<!-- <?php
$server="localhost";
$username="root";
$password="";
$db="todolist";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
    echo "connection to db successfull!";
}


?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
</head>
<body>
  
    <img  class="bgimage" src="./todobg.png"   alt="">
    
    <div class="container1">
    
    
        <form action="insert.php" method="post">
        <h1 style="color:yellow;">TO-DO-LIST>_<</h1>
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
             
            </div>
            <div class="form-group">
              <label >Description</label>
             <textarea  cols="10"   rows="10" class="form-control"   name="desc"  placeholder="Fill in the details :)" ></textarea>
            </div>
            
            <button type="submit" class="btn btn-danger">Submit</button>
          </form>
          <div class="tasklist1">
            <table class="table" id="myTable">
              <thead>
                <tr>
                  <!-- <th scope="col">SNO</th> -->
                  <th scope="col">TITLE</th>
                  <th scope="col">DESCRIPTION</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Check</th>
                  <th scope="col">Time</th>
                </tr>
              </thead>
              <tbody>
              <?php

$sql="SELECT * FROM `todolist`.`task`";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result)){
 echo "<tr>
  
  <td>".$row['title']."</td>

 <td>".$row['description']."</td>

 <td><button class='btn btn-warning button' name='delete'><a href='update.php?id=". $row['sno']."'>Edit</a></button></td>

 <td><button class='btn btn-warning button' name='delete'><a href='delete.php?id=". $row['sno']."'>Done</a></button></td>

 <td>".$row['Time']."</td>
</tr>";
 
 
 

}







?>
</tbody>

</table>
<button class='btn btn-danger button' ><a href="completedtask.php">COMPLETED TASKS</a></button>


          </div>
    </div>
   
    
   
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
</html>
