<?php
$data = [
    'Products' => [
        'IT' => [
            'Macbook',
            'USB hub',
            'keyboard'
        ],
        'Other' => [
            'Samsung Galaxy',
            'Apple Watch'
        ]
    ],
    'Service' => [
        'IT' => [
            'WEB development',
            'WEB design'
        ],
        'Business' => [
            'Company registration',
            'SEO optimization'
        ]
    ]
];


?>

<ul>
    <?php foreach ($data as $key => $value):?>
        <li><span><?=$key;?></span>
            <?php foreach ($value as $key => $val):?>
            <ul>
                <li><?=$key;?>
                <ul>
                    <?php foreach ($val as $key => $v):?>
                    <li><?=$v;?></li>
                    <?php endforeach;?>
                </ul>
                </li>
            </ul>
        </li>

        <?php endforeach;?>
    <?php endforeach;?>
</ul>