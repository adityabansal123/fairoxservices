<!-- Header File (navebar) included. -->
<?php include('header.php'); ?>

  
<div id="container">
<!-- Form for Delete confirmation --> 
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Are you delete this record?</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <form target="" method="post">
     <br>
      <input type="hidden" name="delId" value="">
      <button type="submit" name="delete" class="btn btn-danger">Yes</button>
      
      <button type="button" class="btn btn-info" data-dismiss="alert">
    <span aria-hidden="true">Oops! No </span>
  </button>      
  </form>
</div>
    
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
            <tr>
                <td>1</td>
                <td>Chaudhry Faheem Irfan</td>
                <td>0000-00-00 00:00:00</td>
                <td><a href="#" class="btn btn-success"><i class="fas fa-eye"></i> </a></td>
                <td><a href="#" class="btn btn-primary"><i class="fas fa-edit"></i> </a></td>
                <td><a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i> </a></td>
            </tr>  
      </tbody>
        
    </table>
</div>

<!-- Footer included. -->
<?php include('footer.php'); ?>