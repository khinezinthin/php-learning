<?php

// url 
function url(string $path = null) : string 
{
    $url = isset($_SERVER["HTTPS"]) ? "https" : "http";
    $url .= "://";
    $url .= $_SERVER["HTTP_HOST"];
    if(isset($path)){
        $url .= "/";
        $url .= $path;
    }return $url;

}

// die and dump 
function dd($data, $showType = false):void
{
    echo "<pre style= 'background-color: #1d1d1d; color: #cdcdcd; padding: 20px; margin: 10px; border-radius: 10px'>";
    if($showType){
        var_dump($data);
    }else{
        print_r($data);
    }
    echo "</pre>";
    die();
}

// alert 
function alert(string $message, string $color= "success"):string
{
    return "<div class='alert alert-$color'>$message</div>";
}

// date 
function showDateTime(string $timestamp, string $format="j M Y"):string
{
    return date($format,strtotime($timestamp));
}