<!-- Header File (navebar) included. -->
<?php
include('header.php');
include('config/config.php');

if(isset($_POST['submit'])){
    if(isset($_POST['title']) && !empty($_POST['title'])){
        $title = $_POST['title'];
    }else{
        $titleError = '<div class="alert alert-danger" role="alert">Please enter title field.</div>';
    }

    if(isset($_POST['content']) && !empty($_POST['content'])){
        $content = $_POST['content'];
    }else{
        $contentError = '
            <div class="alert alert-danger" role="alert">
                    Please enter content field.
            </div>
        ';
    }
}
?>
<div id="container">

    <h4 class="text-center">Add Content</h4>
    <!-- Form -->
    <form method="post" target="">
  		
            <div class="form-group">
    			<label for="contenttitle">Title</label>
    			<input type="text" class="form-control" id="contenttitle" name="title" placeholder="Title" value="<?php if(isset($title)) echo $title;?>">
  			</div>
            <?php
                if(isset($titleError)){
                    echo $titleError;
                }
            ?>
  			<div class="form-group">
    			<label>Content</label>
                <textarea id="mytextarea" name="content" value="<?php if(isset($content)) echo $content; ?>"></textarea>
  			</div>
            <?php
                if(isset($contentError)){
                    echo $contentError;
                }
            ?>
  			<button class="btn btn-primary" name="submit" type="submit">Submit</button>
	
    </form>

  
</div>

<!-- Footer included. -->
<?php include('footer.php'); ?>