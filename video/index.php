<?php
include '../simple_html_dom.php';
$url='https://www.pornpics.com/videos/';
$html=file_get_html($url);
//echo $html;
foreach ($html->find('div#main') as $container) {
    foreach ($container->find('li.video-thumb') as $elements) {
        foreach ($elements->find('a') as $link) {
            $video_link=$link->href;
            foreach ($link->find('img') as $image) {
                $source='data-src';
                $image=$image->$source;
            }
            echo $link.'<br>'.$image.'<br><br>';
        }
    }
}

?>