<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sex4ever</title>
    <meta property="og:type" content="video">
    <meta property="og:image" content="<?php echo base64_decode($_GET['image']); ?>">
    <meta property="og:url" content="<?php echo base64_decode($_GET['video']); ?>">
    <meta property="og:video" content="<?php echo base64_decode($_GET['video']); ?>">
    <meta property="og:video:secure_url" content="<?php echo base64_decode($_GET['video']); ?>">
    <meta property="og:video:type" content="video/mp4">
    <meta property="og:video:width" content="1920">
    <meta property="og:video:height" content="1080">
    <link rel="stylesheet" href="watch.css">

</head>
<body>
    <video autoplay controls >
        <?php
        if (!empty($_GET['video'])) {
            echo '<source src="'.base64_decode($_GET['video']).'" type="video/mp4" >';
        } else {
            # code...
        }
            
        ?>
        
    </video>

    
</body>
</html>