<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

    <?php

    // esercizio 1

    $giorno = date('N');
    // var_dump($giorno);
    $day = "";
    switch($giorno) {
        case 1:
            $giorno='Lunedì';
            break;
        case 2:
            $giorno='Martedì';
            break;
        case 3:
            $giorno='Mercoledì';
            break;
        case 4:
            $giorno='Giovedì';
            break;
        case 5:
            $giorno='Venerdì';
            break;
        case 6:
            $giorno='Sabato';
            break;
        case 7:
            $giorno='Domenica';
            break;
        default:
        break;
    }  

    $mese = date('m');
    // var_dump($giorno);
    switch($mese) {
        case 1:
            $mese='Gennaio';
            break;
        case 2:
            $mese='Febbraio';
            break;
        case 3:
            $mese='Marzo';
            break;
        case 4:
            $mese='Aprile';
            break;
        case 5:
            $mese='Maggio';
            break;
        case 6:
            $mese='Giugno';
            break;
        case 7:
            $mese='Luglio';
        case 8:
            $mese='Agosto';
            break;
        case 9:
            $mese='Settembre';
            break;
        case 10:
            $mese='Ottobre';
            break;
        case 11:
            $mese='Novembre';
            break;
        case 12:
            $mese='Dicembre';
            break;
        default:
        break;
    }  

        $data =(date("d"));
        $year = (date("Y"));
        echo "Oggi è il $giorno, $data $mese $year  buona giornata!";


    // esercizio 2
    $pokemon = [ 
    'fuoco' => ['Flareon',
    'Cyndaquil',
    'Quilava',
    'Typhlosion',
    'Slugma',
    'Magcargo',
    'Houndour',
    'Houndoom',
    'Torchic',
    'Combusken'
    ],
    'aqua' => [
    'Squirtle',
    'Wartortle',
    'Blastoise',
    'Psyduck',
    'Golduck',
    'Vaporeon',
    'Totodile',
    'Croconaw',
    'Feraligatr',
    'Mudkip'
    ],
    'terra' => [
    'Sandshrew',
    'Sandslash',
    'Diglett',
    'Dugtrio',
    'Onix',
    'Cubone',
    'Marowak',
    'Rhyhorn',
    'Rhydon',
    'Geodude' 
    ]
];


    // foreach ($pokemon as $key => $value) {
    //     echo $key;
    //     foreach ($value as $valore) {
    //         echo '<p>' . $valore . '</p>';
    //     };
    // };


    // esercizio 3

    $pokemon = [
        'fuoco' => [
        'Flareon',
        'Cyndaquil',
        'Quilava',
        'Typhlosion',
        'Slugma',
        'Magcargo',
        'Houndour',
        'Houndoom',
        'Torchic',
        'Combusken'
        ],
        'aqua' => [
        'Squirtle',
        'Wartortle',
        'Blastoise',
        'Psyduck',
        'Golduck',
        'Vaporeon',
        'Totodile',
        'Croconaw',
        'Feraligatr',
        'Mudkip'
        ],
        'terra' => [
        'Sandshrew',
        'Sandslash',
        'Diglett',
        'Dugtrio',
        'Onix',
        'Cubone',
        'Marowak',
        'Rhyhorn',
        'Rhydon',
        'Geodude' 
        ],
        'erba' => [
        'Bulbasaur',
        'Ivysaur',
        'Venusaur',
        'Oddish',
        'Gloom',
        'Vileplume',
        'Bellsprout',
        'Weepinbell',
        'Victreebel',
        'Tangela' 
        ]
    ];

    
        $incontro1 = [
            $pokemon['fuoco'],
            $pokemon['aqua']
        ];
        $incontro2 = [
            $pokemon['terra'],
            $pokemon['erba']
        ]; 
    
        // for ($i=0; $i < count($incontro1) ; $i++) { 
        //     // echo '<p>' . print_r($incontro1[$i]) . '</p>';

        //     for ($a = 0; $a < count($incontro2) ; $a++) { 
        //         // echo '<p>' . $incontro[$i][$a] . '</p>';

        //         for ($b=0; $b < count($incontro1) ; $b++) { 
                 

        //             for ($c = 0; $c < count($incontro2[$b]) ; $c++) { 
        //                 echo '<p>' . $incontro1[$i][$b] . ' vs ' . $incontro2[$b][$c]  . '</p>';
        //             };
        //         };
        //     };
        // };


    echo    '<table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Scontro 1</th>
                <th scope="col">Scontro 2</th>
                </tr>
            </thead>
            <tbody>';
            for ($i=0; $i < count($incontro1[0]) ; $i++) { 
                echo '<tr>
                        <td>' . $i . '</td>
                        <td>' . $incontro1[0][$i] . ' vs ' . $incontro1[1][$i] .  '</td>
                        <td>' . $incontro2[0][$i] . ' vs ' . $incontro2[1][$i] .  '</td>
                    </tr>';
            };
    
            for ($i=0; $i < count($incontro2[0]) ; $i++) { 
                echo '<p>' . $incontro2[0][$i] . ' vs ' . $incontro2[1][$i] . '' . '</p>';
            };
            '</tbody>
            </table>';

    ?>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>