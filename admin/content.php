<!-- Header File (navebar) included. -->
<?php include('header.php'); ?>

  
<div id="container">
            <!-- Message if record not fount. -->
            <div class="alert alert-danger" role="alert">
                <strong>Invalid ID! </strong> No Record Found.
            </div>
        
        <!-- This DIV will Display TinyMCE Content. -->
		<div class="card"  style="color: black;">
            <div class="card-header">
                Title
            </div>
            <div class="card-body">
                <p class="card-text">Content is here.</p>
                <a href="showcontent.php" class="btn btn-primary">Back</a>
            </div>
        </div>

</div>

<!-- Footer included. -->
<?php include('footer.php'); ?>