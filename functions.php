<?php
    function nowUrl(){
    $url = '';
    if(isset($_SERVER['HTTPS'])){
        $url .= 'https://';
    }else{
        $url .= 'http://';
    }
    $url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return $url;
    }