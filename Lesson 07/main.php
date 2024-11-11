<?php
$datas = [
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
foreach ($datas as $data):
    echo "<li>" . $data['nama'] . " " . $data['alamat'] . "</li>";
endforeach;
