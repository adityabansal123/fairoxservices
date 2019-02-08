<?php 
include('header.php');
include('config/config.php'); 
?>

<div id="container">
    <!-- Search Form -->
	<form target="" method="post">
  			<div class="form-group">
    			<label for="searchtitle">Search</label>
    			<input type="text" class="form-control" id="searchtitle" name="search" placeholder="Search" required>
  			</div>
  			<button class="btn btn-primary" name="submit" type="submit">Search</button>
	</form>
	<h4 class="text-center">Search Record</h4>
    <table class="table table-striped">

        <tbody>
            <?php

			if(isset($_POST['search'])){
				echo '<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Added Date</th>
						<th>View</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>';
				$keyword = $_POST['search'];
				$sql = "SELECT * FROM content WHERE id LIKE '%{keyword}%' OR title LIKE '%{keyword}%'";
				$result = mysqli_query($con, $sql);
				if(mysqli_num_rows($result)>0){
					while($row = mysqli_fetch_assoc($result)){
					echo '<tr>
						<td>'.$row["id"].'</td>
						<td>'.$row["title"].'</td>
						<td>'.$row["addedDate"].'</td>
						<td><a href="content.php?id='. $row["id"] .'" class="btn btn-success"><i class="fas fa-eye"></i> </a></td>
						<td><a href="update.php?updateID='. $row["id"] .'" class="btn btn-primary"><i class="fas fa-edit"></i> </a></td>
						<td><a href="showcontent.php?deleteID='. $row["id"] .'" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </a></td>
					</tr>';
					}
				}else{
					echo '<tr><td>No Record</td></tr>';
				}
			}
            ?>
      </tbody>
        
    </table>
</div>

<?php include('footer.php'); ?>