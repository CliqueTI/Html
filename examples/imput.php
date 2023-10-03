<?php

use CliqueTI\Html\Html;

include __DIR__."/../vendor/autoload.php";

echo Html::input(name: 'name', value: 'John', params: ['style'=>'width:320px;'], type: 'text');
