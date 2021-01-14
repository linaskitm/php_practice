<?php
$data = [
    '5a' =>[
        rand(1,100) =>[
            'Ona',
            'Onute',
            'koliai' => [
                'math' => 6,
                'it' => 7,
                'engish' => 10
            ],
            date("Y-m-d")

        ],
        rand(1,100) =>[
            'Ona',
            'Onute',
            'koliai' => [
                'math' => 6,
                'it' => 7,
                'engish' => 10
            ],
            date("Y-m-d")

        ],
        rand(1,100) =>[
            'Ona',
            'Onute',
            'koliai' => [
                'math' => 6,
                'it' => 7,
                'engish' => 10
            ],
            date("Y-m-d")

        ],
        rand(1,100) =>[
            'Ona',
            'Onute',
            'koliai' => [
                'math' => 6,
                'it' => 7,
                'engish' => 10
            ],
            date("Y-m-d")

        ],
        rand(1,100) =>[
            'Ona',
            'Onute',
            'koliai' => [
                'math' => 6,
                'it' => 7,
                'engish' => 10
            ],
            date("Y-m-d")

        ],

    ],
    '5b' =>[
       rand(1,100) =>[
            'Petras',
            'Petraitis',
            'koliai' => [
                'math' => 6,
                'it' => 7,
                'engish' => 10
            ],
            date("Y-m-d")

        ],
             rand(1,100) =>[
            'Petras',
            'Petraitis',
            'koliai' => [
                'math' => 6,
                'it' => 7,
                'engish' => 10
            ],
            date("Y-m-d")

        ],
        rand(1,100) =>[
            'Petras',
            'Petraitis',
            'koliai' => [
                'math' => 6,
                'it' => 7,
                'engish' => 10
            ],
            date("Y-m-d")

        ],
         rand(1,100) =>[
            'Petras',
            'Petraitis',
            'koliai' => [
               'math' => 6,
                'it' => 7,
                'engish' => 10
            ],
            date("Y-m-d")

        ],
             rand(1,100) =>[
            'Petras',
            'Petraitis',
            'koliai' => [
                'math' => 6,
                'it' => 7,
                'engish' => 10
            ],
            date("Y-m-d")

        ],
    ]
];

//foreach ($data as $key => $value) {
//    echo $key;
//    //echo $value;
//    foreach ($value as $key => $val){
//        echo " " . $key . " ";
//        foreach ($val as $v) {
//            echo $v;
//        }
//
//        }
//    }
?>

<table>
    <tr>
        <th>Klase</th>
        <th>Kodas</th>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Vidurkis</th>
        <th>Data</th>
    </tr>
    <?php foreach ($data as $key => $value):?>
        <?php foreach ($value as $key2 => $val):?>
    <tr>
        <td><?=$key;?></td>
        <td><?=$key2;?></td>

            <?php foreach ($val as $v):?>
                <!-- check if value not array and display them           -->
                <?php if (!is_array($v)): ?>
                    <td><?=$v;?></td>
                <?php endif; ?>
                <!--  check if value is array and loop the value  -->
                <?php if (is_array($v) && !empty($v)): ?>
                    <td><?= array_sum($v) / count($v); ?></td>
                <?php endif; ?>
            <?php endforeach;?>

    </tr>
        <?php endforeach;?>
    <?php endforeach;?>
</table>
