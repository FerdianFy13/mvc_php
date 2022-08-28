<?php

class Mahasiswa_model
{
    private $mahasiswa = [
        [
            'name' => 'Ferdian Firmansyah',
            'nim' => 362055401191,
            'major' => 'Informatics Engineering',
        ],
        [
            'name' => 'Yusuf Dian',
            'nim' => 362060421191,
            'major' => 'Manufacture Engineering',
        ],
        [
            'name' => 'Yusuf Firmansyah',
            'nim' => 362060421192,
            'major' => 'Architecture Engineering',
        ],
    ];

    public function getAll()
    {
        return $this->mahasiswa;
    }
}

?>
