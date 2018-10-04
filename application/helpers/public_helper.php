<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
if (!function_exists('public_url')) {
    function public_url($url = '')
    {
        return URL_HOST.URL_PATH.'/public/'.$url;
    }
}

if (!function_exists('host_url')) {

    function host_url($url = '')
    {
        return URL_HOST.URL_PATH.'/'.$url;
    }
}

if (!function_exists('img_url')) {
    function img_url($img)
    {
        return URL_HOST.URL_PATH.'/public/img/'.$img;
    }

}

if (!function_exists('file_url')) {
    function file_url()
    {
        return URL_HOST.URL_PATH.'/public/file/';
    }

}