<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<link href='simplelightbox-master/dist/simplelightbox.min.css' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="simplelightbox-master/dist/simple-lightbox.js"></script>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My Gallery</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="gallery-grid.css">


</head>

<body>
<h2 style="padding-left:4%; color:black;">A gallery of some of my work</h2>


<div class="tz-gallery">
<div class="row">
<?php
    $directory = 'gallery/';

    if (!is_dir($directory)) {
        exit('Invalid diretory path');
    }

    $files = array();
    foreach (scandir($directory) as $file) {
        if ($file !== '.' && $file !== '..' && $file !== '.DS_Store') {
            $files[] = $file;

            echo '<div class="col-sm-6 col-md-4"> <a class="lightbox" href="gallery/'. $file . '">
                    <img src="gallery/'. $file .'">
                </a>
            </div>';


        }
    }

    //var_dump($files);


?>

</div>
</div>

</body>
</html>