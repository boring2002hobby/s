<?php
if (isset($_POST['submit'])) {
    $path = "https://api.telegram.org/bot7063876359:AAEq2IZzuy-v3M5r0enrjdmsRuDzBls_f5I";
    $chatId = $_POST['username'];
    $url = $_POST['link'];
    $hashtags=$_POST['hashtags'];

        include 'scrap.php';
        scrap($url);
        $result = scrap($url);
        $title=$result['title']; // Output title
        $images=$result['images'];
        $media = [];
        foreach ($images as $file) {
            $media[] = [

                'type' => 'photo',
                'media' => $file
            ];
        }

        $media = json_encode($media);

        $bot_answer=$title."%0A%0A  ";
        $bot_answer.=urlencode($hashtags);
        
        file_get_contents($path."/sendMediaGroup?chat_id=$chatId&media=$media");
        file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=".$bot_answer);
        header('location:index.html');
} else {
    header('location:index.html');
}










?>