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
        $start='0';
        $end='999';
        video($start,$end);

        break;
    case '1':
        $start='1000';
        $end='1999';
        video($start,$end);
        break;
    case '2':
        $start='2000';
        $end='2999';
        video($start,$end);
        break;
    case '3':
        $start='3000';
        $end='3999';
        video($start,$end);
        break;
    case '4':
        $start='4000';
        $end='4999';
        video($start,$end);
        break;
    case '5':
        $start='5000';
        $end='5999';
        video($start,$end);
        break;
    case '6':
        $start='6000';
        $end='6999';
        video($start,$end);
        break;
    case '7':
        $start='7000';
        $end='7999';
        video($start,$end);
        break;

}
?>