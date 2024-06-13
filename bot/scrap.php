<?php
include 'simple_html_dom.php';

function scrap($url){
    $html = file_get_html($url);
    $images = array(); // Define $images array here
    $title = ''; // Initialize $title variable
    
    foreach ($html->find('div.title-section') as $titleSection) {
        foreach ($titleSection->find('h1') as $h1) {
            $title = $h1->plaintext;
        }
    }
    foreach ($html->find('div#main') as $main) {
        foreach ($main->find('a.rel-link') as $image) {
            $src = 'href';
            $image = $image->$src;
            $images[] = $image;
        }
    }
        // Calculate the offset to start from the last 10 elements
    $startIndex = max(0, count($images) - 10);

    // Keep the last 10 elements
    $images = array_slice($images, $startIndex);
    // Return an associative array with both title and images
    return array(
        'title' => $title,
        'images' => $images
    );
}

?>
