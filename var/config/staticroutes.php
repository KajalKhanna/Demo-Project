<?php 

return [
    1 => [
        "id" => 1,
        "name" => "detail",
        "pattern" => "/(.*)_d([\\d]+)/",
        "reverse" => "%prefix/%text_d%id",
        "module" => NULL,
        "controller" => "@AppBundle\\Controller\\DetailController",
        "action" => "detail",
        "variables" => "name,id",
        "defaults" => NULL,
        "siteId" => [

        ],
        "methods" => [

        ],
        "priority" => 1,
        "creationDate" => 1616416327,
        "modificationDate" => 1616933915
    ]
];
