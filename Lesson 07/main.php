<?php
$kotas = [
    [
        'nama' => 'suryo',
        'alamat' => 'rappocini',
        'telepon' => '082'
    ],
    [
        'nama' => 'roon',
        'alamat' => 'tanjung',
        'telepon' => '083'
    ]
];
foreach ($kotas as $kota):
    echo "<li>$kota</li>";
endforeach;
