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
    ],
    [
        'nama' => 'tandy',
        'alamat' => 'tanjung',
        'telepon' => '084'
    ]
];

function filter($item, $alamat)
{
    $hasil = [];
    foreach ($item as $it):
        if ($it['alamat'] === $alamat) $hasil[] = $it;
    endforeach;

    return $hasil;
}

foreach (filter($datas, "tanjung") as $data):
    echo "<li>" . $data['nama'] . " " . $data['alamat'] . "</li>";
endforeach;
