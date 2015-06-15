<?php
class Database extends PDO {
    protected $dsn = 'mysql:dbhost=localhost;dbname=penelitian1'; // server dan nama db
    protected $user = 'root'; // username db
    protected $password = ''; // paswword db
   
    public function __construct(){
        // koneksi database  
        try{
            $this->dbh = new PDO($this->dsn,$this->user,$this->password);
        // test koneksi
        //    echo 'Koneksi Berhasil <br />';
        }
        catch(PDOException $e){
        // test error
        //    echo 'Gagal Koneksi '.$e->getMessage();
        }
    }
   
    public function Create($judul,$NIK,$Nilaiangka,$nilaiHuruf){
        // fungsi insert ke database
        $this->judul = $judul;
        $this->NIK = $NIK;
		$this->Nilaiangka = $Nilaiangka;
        $this->nilaiHuruf = $nilaiHuruf;
        $this->data = array(
        'judul' => $this->judul,
        'NIK' => $this->NIK,
		'Nilaiangka' => $this->Nilaiangka,
        'nilaihuruf' => $this->nilaihuruf
        );
        $this->statement = $this->dbh->prepare('INSERT INTO proposal( judul, NIK, Nilaiangka, nilaiHuruf ) VALUES( :judul, :NIK, :Nilaiangka, :nilaiHuruf)');
        $this->statement->execute($this->data);
    }
   
    public function Select(){
        // fungsi menampilkan data dari database
        $this->statement = $this->dbh->prepare('SELECT * FROM  proposal');
        $this->statement->execute();
        return $this->statement->fetchAll();
    }
   
    public function Update($id){
        // fungsi mengambil salah satu data untuk di update dari database
        $this->id = $id;
        $this->statement = $this->dbh->prepare('SELECT * FROM  proposal WHERE id=:id');
        $this->statement->bindParam(':id', $this->id);
        $this->statement->execute();
        return $this->statement->fetchAll();
    }
   
    public function UpdateSave($id,$judul,$NIK,$Nilaiangka,$nilaiHuruf){
        // proses penyimpanan data setelah di update
       $this->judul = $judul;
        $this->NIK = $NIK;
		$this->Nilaiangka = $Nilaiangka;
        $this->nilaiHuruf = $nilaiHuruf;
        $this->data = array(
        'judul' => $this->judul,
        'NIK' => $this->NIK,
		'Nilaiangka' => $this->Nilaiangka,
        'nilaihuruf' => $this->nilaihuruf
        );
        $this->statement = $this->dbh->prepare('UPDATE  proposal SET judul=:judul, NIK=:NIK, Nilaiangka=:Nilaiangka, nilaiHuruf=:nilaiHuruf WHERE id=:id');
        $this->statement->execute($this->data);
    }
   
    public function Delete($id){
        // fungsi menghapus data dari database
        $this->id = $id;
        $this->statement = $this->dbh->prepare('DELETE FROM  proposal WHERE id=:id');
        $this->statement->bindParam(':id', $this->id);
        $this->statement->execute();
    }
}

// instansi class
$test = new Database;
?>