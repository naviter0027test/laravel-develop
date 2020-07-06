<?php

namespace App\Repositories;

use Exception;
use Config;
use Storage;
use PHPHtmlParser\Dom;

class WebPageRepository
{
    public function getPage($web, $pageName) {
        $webPage = curl_init();
        curl_setopt($webPage, CURLOPT_URL, $web. "/". $pageName);
        curl_setopt($webPage, CURLOPT_HEADER, false);
        curl_setopt($webPage, CURLOPT_RETURNTRANSFER, 1);
        $page = curl_exec($webPage);
        curl_close($webPage);
        return $page;
    }

    public function getFileName($path) {
        $strArr = preg_split("/\//", $path);
        return $strArr[count($strArr) - 1];
    }

    public function putFile($root, $fileName, $page) {
        Storage::disk('webpage')->put($root. "/". $fileName, $page);
    }

    public function getLinks($page) {
        $dom = new Dom();
        $dom->load($page);
        $links = $dom->find('link');
        return $links;
    }

    public function getImages($page) {
        $dom = new Dom();
        $dom->load($page);
        $imgs = $dom->find('img');
        return $imgs;
    }

    public function getScripts($page) {
        $dom = new Dom();
        $dom->load($page);
        $scripts = $dom->find('script');
        return $scripts;
    }

    public function getA($page) {
        $dom = new Dom();
        $dom->load($page);
        $as = $dom->find('a');
        return $as;
    }
}
