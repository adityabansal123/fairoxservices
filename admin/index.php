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

    if($_POST['content']){
        echo $_POST['content'];
        $content = mysql_real_escape_string($_POST['content']);
        echo $content;
        exit();
    }else{
        $contentError = '
            <div class="alert alert-danger" role="alert">
                    Please enter content field.
            </div>
        ';
    }

    if((isset($title) && !empty($title)) && (isset($content))){
        $sql = "INSERT INTO content(title, notes) VALUES('$title','$notes')";
        if(mysqli_query($con, $sql)){
            header("Location: showcontent.php");
        }else{
            $sqlError = '
                <div class="alert alert-danger" role="alert">
                        Please try again.
                </div>
            '.mysqli_error($con);
        }
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