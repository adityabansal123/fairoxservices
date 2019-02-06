<!DOCTYPE html>
<html>
<head>
	<title>PHP CRUD with TinyMCE</title>
	
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link CSS Files -->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    
    <!-- CSS File -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- TinyMCE File -->
    <script src="tinymce/js/tinymce/tinymce.min.js"></script>
    
    <script>

    tinymce.init({
        selector: '#mytextarea',
        theme: "modern",
        height: 200,
        width: '100%',
    
        plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
        "table contextmenu directionality emoticons paste textcolor code"
        ],

        toolba1 : "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
        toolba2 : "| link unlink anchor | image media | forecolor backcolor | print preview code | caption",

        image_caption : true,
        image_advtab: true
  });
    </script>

</head>
<body>
    <!-- Botstrap Header File (NAVBAR) -->
    
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #563d7c;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="index.php">Exceptional Programmers</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Add</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="showcontent.php">Show</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="search.php">Search</a>
      </li>
    </ul>
  </div>
</nav>
    <!-- End of Botstrap Header File -->    