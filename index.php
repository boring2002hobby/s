<?php
        if (empty($_GET['category'])) {    
            $_GET['category']=1;
        } else {
        }

            

        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sex4ever</title>
    <meta property="og:title" content="Sex4ever">
    <meta property="og:description" content="Visit our website and watch the hottest and latest sexiest videos ever.">
    <meta property="og:image" content="logo.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>Sex4ever -  category : <?php echo $_GET['category']; ?></h2>
</header>
    <div class="gallery" id="gallery">
       
        <?php
            include 'content.php';
        ?>
    </div>
    <div class="category-buttons">
        <a href="?category=O"><button>0</button></a>
        <a href="?category=1"><button>1</button></a>
        <a href="?category=2"><button>2</button></a>
        <a href="?category=3"><button>3</button></a>
        <a href="?category=4"><button>4</button></a>
        <a href="?category=5"><button>5</button></a>
        <a href="?category=6"><button>6</button></a>
        <a href="?category=7"><button>7</button></a>
    </div>

    
</body>
</html>