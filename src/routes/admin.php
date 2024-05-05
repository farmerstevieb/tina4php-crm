<?php

use Tina4\Get;
use Tina4\Response;
use function Tina4\renderTemplate;

Get::add("/crm/dashboard", function (Response $response) {

    $twigNameSpace = (new Crm())->getTwigNameSpace();

        return $response(renderTemplate("/crm/dashboard.twig", ["twigNameSpace" => $twigNameSpace]));
});
