<?php
$datas = [
    [
        'nama' => 'suryo',
        'alamat' => 'rappocini',
        'telepon' => '82'
    ],
    [
        'nama' => 'roon',
        'alamat' => 'tanjung',
        'telepon' => '83'
    ],
    [
        'nama' => 'tandy',
        'alamat' => 'tanjung',
        'telepon' => '84'
    ]
];

function filter($item, $fn)
{
    $hasil = [];
    foreach ($item as $it):
        if ($fn($it)) $hasil[] = $it;
    endforeach;

    return $hasil;
}

$hasil = filter($datas, function ($data) {
    return $data['telepon'] > 80;
});

$hasil2 = array_filter($datas, function ($data) {
    return $data['telepon'] > 83;
});

require "main.view.php";
