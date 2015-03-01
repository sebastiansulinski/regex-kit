<?php

use SSD\RegularExpression\Factory;


echo Factory::anchor(
    'Visit http://ssdtutorials.com for more info.',
    [
        'target' => '_blank',
        'title' => 'External link'
    ]
);