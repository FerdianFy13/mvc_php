<?php

class Mahasiswa_model
{
    // private $mahasiswa = [
    //     [
    //         'name' => 'Ferdian Firmansyah',
    //         'nim' => 362055401191,
    //         'major' => 'Informatics Engineering',
    //     ],
    //     [
    //         'name' => 'Yusuf Dian',
    //         'nim' => 362060421191,
    //         'major' => 'Manufacture Engineering',
    //     ],
    //     [
    //         'name' => 'Yusuf Firmansyah',
    //         'nim' => 362060421192,
    //         'major' => 'Architecture Engineering',
    //     ],
    // ];

    // connect database
    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=db_mahasiswa';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $message) {
            die($message->getMessage());
        }
    }

    public function getAll()
    {
        // return $this->mahasiswa;
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
