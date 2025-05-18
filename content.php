<?php
//boring_hobby@outlook.fr
$category=$_GET['category'];
function video($start,$end){
    echo '<div class="category" id="category'.$_GET['category'].'">';
    for ($i=$start; $i < $end; $i++) { 
        $video_url="https://sex4arabxxx.b-cdn.net/$start/$i/$i.mp4";
        $image_url="https://sex4arab.xxx/contents/videos_screenshots/$start/$i/preview.mp4.jpg";

        echo '<a href="watch.php?video='.base64_encode($video_url).'&image='.base64_encode($image_url).'"><img src="'.$image_url.'" alt="'.$i.'"></a>';
    }
}
switch ($category) {
    case 'O':
        $start='10000';
        $end='10999';
        video($start,$end);

        break;
    case '1':
        $start='10000';
        $end='11999';
        video($start,$end);
        break;
    case '2':
        $start='12000';
        $end='12999';
        video($start,$end);
        break;
    case '3':
        $start='13000';
        $end='13999';
        video($start,$end);
        break;
    case '4':
        $start='14000';
        $end='14999';
        video($start,$end);
        break;
    
}
?>
