<!-- Header File (navebar) included. -->
<?php 
include('header.php');
include('config/config.php'); 

?>

  
<div id="container">

  <?php
    if(isset($_GET['deleteID'])){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Are you delete this record?</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <form target="" method="post">
          <br>
            <input type="hidden" name="delId" value="'.$_GET["deleteID"].'">
            <button type="submit" name="delete" class="btn btn-danger">Yes</button>
            
            <button type="button" class="btn btn-info" data-dismiss="alert">
              <span aria-hidden="true">Oops! No </span>
            </button>      
        </form>
      </div>';
    }
    if(isset($_POST['deleteID'])){
      $id = $_POST['deleteID'];
      $sql = "DELETE FROM content WHERE id=".$id;
      if(mysqli_query($con, $sql)){
        header("Location: showcontent.php");
      }else{
        echo "Error! Record not deleted".mysqli_error($con);
      }
    }
?>
    
<!-- Success Message if Record Deleted OR Uptated successfully. --> 
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Content Deleted sucessfully.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    
    
  <h4 class="text-center">Content</h4>
  <table class="table table-striped">
        
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Added Date</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <tbody>
            <?php
              $sql = "SELECT * FROM content";
              $result = mysqli_query($con, $sql);
              if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                  echo '<tr>
                      <td>'.$row["id"].'</td>
                      <td>'.$row["title"].'</td>
                      <td>'.$row["addedDate"].'</td>
                      <td><a href="content.php?id='. $row["id"] .'" class="btn btn-success"><i class="fas fa-eye"></i> </a></td>
                      <td><a href="upadte.php?updateID='. $row["id"] .'" class="btn btn-primary"><i class="fas fa-edit"></i> </a></td>
                      <td><a href="showcontent.php?deleteID='. $row["id"] .'" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </a></td>
                  </tr>';
                }
              }else{
                echo '<tr><td>No Record</td></tr>';
              }
            ?>
      </tbody>
        
    </table>
</div>

<!-- Footer included. -->
<?php include('footer.php'); ?>