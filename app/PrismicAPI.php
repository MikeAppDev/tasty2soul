<?php

// require_once '../vendor/autoload.php';
if (strpos($_SERVER['REQUEST_URI'], "page") !== false) {
    require_once '../../vendor/autoload.php';
} else {
    require_once '../vendor/autoload.php';
};

use Prismic\Api;
use Prismic\LinkResolver;
use Prismic\Predicates;
use Prismic\Dom\RichText;

// RICHTEXT--------------------
class ExampleLinkResolver extends LinkResolver
{
    public function resolve($link) :? string
    {
        if (property_exists($link, 'isBroken') && $link->isBroken === true) {
            return '/404';
        }
        if ($link->type === 'category') {
            return '/category/' . $link->uid;
        }
        if ($link->type === 'post') {
            return '/post/' . $link->uid;
        }
        return '/';
    }
}
$linkResolver = new ExampleLinkResolver();
//--------------------------------

//See error
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$accesToken = 'MC5aLXVnNUJFQUFDTUE1cE5D.XO-_vSBQ77-977-977-9Wu-_vRlQ77-9aSVqZ1AT77-9TAnvv73vv73vv71r77-977-977-9dRTvv70S';
$api = Api::get('https://tasty2soul.cdn.prismic.io/api/v2', $accesToken);

$home = $api->query(Predicates::at('document.type', 'homepage'))->results;



var_dump($home[0]->data);