<?php
    // Web html 파일 읽어오기
    include('simple_html_dom.php');
    $html = file_get_html('https://nekos.life/');
    $item = $html->find('img', 0);
    return '<img src="' . $item->src .'" text-align: center; height="700px" width="700px"><br> <h1> Link: '. $item->src . '</h1>';
?>