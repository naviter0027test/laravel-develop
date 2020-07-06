<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repositories\WebPageRepository;

class WebPage extends Command
{
    protected $signature = 'WebPage {--web=} {--storage=} {--init=}';

    protected $description = 'crawler for get html, css, js';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        //example : 
        //php artisan WebPage --web=https://vjinc.biz/demo/tami --storage=tami --init=tami_01.html

        $args = $this->option();
        if(isset($args['web']) && $args['web'] != '' && isset($args['storage']) && $args['storage'] != '' && isset($args['init']) && $args['init'] != '') {
            //echo $args['web']. "\n";
            //echo $args['storage']. "\n";
            $webPage = new WebPageRepository();
            $oriPage = $webPage->getPage($args['web'], $args['init']);
            $fileName = $args['init'];
            $webPage->putFile($args['storage'], $fileName, $oriPage);

            //get css files
            $hrefs = $webPage->getLinks($oriPage);
            foreach ($hrefs as $href) {
                $page = $webPage->getPage($args['web'], $href->href);
                $fileName = $href->href;
                $webPage->putFile($args['storage'], $fileName, $page);
            }

            //get images
            $stringArr = [];
            $hrefs = $webPage->getImages($oriPage);
            foreach ($hrefs as $href) {
                $page = $webPage->getPage($args['web'], $href->src);
                $fileName = $href->src;
                if(in_array($fileName, $stringArr) == false) {
                    $webPage->putFile($args['storage'], $fileName, $page);
                    array_push($stringArr, $fileName);
                } else {
                    //echo "$fileName repeat\n";
                }
            }

            //get javascript
            $hrefs = $webPage->getScripts($oriPage);
            foreach ($hrefs as $href) {
                $page = $webPage->getPage($args['web'], $href->src);
                $fileName = $href->src;
                echo $href->src. "\n";
                $webPage->putFile($args['storage'], $fileName, $page);
            }

            //get a-href
            $hrefs = $webPage->getA($oriPage);
            $stringArr = [];
            foreach ($hrefs as $href) {
                $page = $webPage->getPage($args['web'], $href->href);
                $fileName = $href->href;
                if($href->href == '#')
                    continue;
                if(in_array($fileName, $stringArr) == false) {
                    $webPage->putFile($args['storage'], $fileName, $page);
                    array_push($stringArr, $fileName);
                } else {
                    //echo "$fileName repeat\n";
                }
            }
        } else {
            echo "please input [web] and [storage] argument\n";
        }
    }
}
