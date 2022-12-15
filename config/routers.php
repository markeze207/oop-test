<?php

return array(
    'news/([0-9]+)' => 'news/view/$1/',
    'news' => 'news/index', // actionIndex в NewsConroller // news - ссылка, news/index - роутер
    'products' => 'product/list' // actionList в ProductsControllet
);