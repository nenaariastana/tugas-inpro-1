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
   
    public function Create($nama,$alamat){
        // fungsi insert ke database
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->data = array(
        'nama' => $this->nama,
        'alamat' => $this->alamat
        );
        $this->statement = $this->dbh->prepare('INSERT INTO peneliti( nama, alamat ) VALUES( :nama, :alamat )');
        $this->statement->execute($this->data);
    }
   
    public function Select(){
        // fungsi menampilkan data dari database
        $this->statement = $this->dbh->prepare('SELECT * FROM peneliti');
        $this->statement->execute();
        return $this->statement->fetchAll();
    }
   
    public function Update($id){
        // fungsi mengambil salah satu data untuk di update dari database
        $this->id = $id;
        $this->statement = $this->dbh->prepare('SELECT * FROM peneliti WHERE id=:id');
        $this->statement->bindParam(':id', $this->id);
        $this->statement->execute();
        return $this->statement->fetchAll();
    }
   
    public function UpdateSave($id,$nama,$alamat){
        // proses penyimpanan data setelah di update
        $this->id = $id;
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->data = array(
        'id' => $this->id,
        'nama' => $this->nama,
        'alamat' => $this->alamat
        );
        $this->statement = $this->dbh->prepare('UPDATE peneliti SET nama=:nama, alamat=:alamat WHERE id=:id');
        $this->statement->execute($this->data);
    }
   
    public function Delete($id){
        // fungsi menghapus data dari database
        $this->id = $id;
        $this->statement = $this->dbh->prepare('DELETE FROM peneliti WHERE id=:id');
        $this->statement->bindParam(':id', $this->id);
        $this->statement->execute();
    }
	
	public function Createp($judul,$NIK,$Nilaiangka,$nilaiHuruf){
        // fungsi insert ke database
        $this->judul = $judul;
        $this->NIK = $NIK;
		$this->Nilaiangka = $Nilaiangka;
        $this->nilaiHuruf = $nilaiHuruf;
        $this->data = array(
        'judul' => $this->judul,
        'NIK' => $this->NIK,
		'Nilaiangka' => $this->Nilaiangka,
        'nilaiHuruf' => $this->nilaiHuruf
        );
        $this->statement = $this->dbh->prepare('INSERT INTO proposal( judul, NIK, Nilaiangka, nilaiHuruf )VALUES( :judul, :NIK, :Nilaiangka, :nilaiHuruf)');
        $this->statement->execute($this->data);
    }
   
    public function UpdateSavep($id,$judul,$NIK,$Nilaiangka,$nilaiHuruf){
        // proses penyimpanan data setelah di update
		$this->id = $id;
		$this->judul = $judul;
        $this->NIK = $NIK;
		$this->Nilaiangka = $Nilaiangka;
        $this->nilaiHuruf = $nilaiHuruf;
        
		$this->data = array(
        'id' => $this->id,
		'judul' => $this->judul,
        'NIK' => $this->NIK,
		'Nilaiangka' => $this->Nilaiangka,
        'nilaiHuruf' => $this->nilaiHuruf
        );
        $this->statement = $this->dbh->prepare('UPDATE proposal SET judul=:judul, NIK=:NIK, Nilaiangka=:Nilaiangka, nilaiHuruf=:nilaiHuruf WHERE id=:id');
        $this->statement->execute($this->data);	
    }
	
    public function Selectp(){
        // fungsi menampilkan data dari database
        $this->statement = $this->dbh->prepare('SELECT * FROM  proposal');
        $this->statement->execute();
        return $this->statement->fetchAll();
    }
   
    public function Updatep($id){
        // fungsi mengambil salah satu data untuk di update dari database
        $this->id = $id;
        $this->statement = $this->dbh->prepare('SELECT * FROM  proposal WHERE id=:id');
        $this->statement->bindParam(':id', $this->id);
        $this->statement->execute();
        return $this->statement->fetchAll();
    }
   
    public function Deletep($id){
        // fungsi menghapus data dari database
        $this->id = $id;
        $this->statement = $this->dbh->prepare('DELETE FROM  proposal WHERE id=:id');
        $this->statement->bindParam(':id', $this->id);
        $this->statement->execute();
    }
	
	public function Tambah($NIK,$tanggal,$jam,$ruang){
        // fungsi insert ke database
        $this->NIK = $NIK;
        $this->tanggal = $tanggal;
		$this->jam = $jam;
        $this->ruang = $ruang;
        $this->data = array(
        'NIK' => $this->NIK,
        'tanggal' => $this->tanggal,
		'jam' => $this->jam,
        'ruang' => $this->ruang
        );
        $this->statement = $this->dbh->prepare('INSERT INTO seminar( NIK, tanggal, jam, ruang ) VALUES( :NIK, :tanggal, :jam, :ruang )');
        $this->statement->execute($this->data);
    }
   
    public function tampil(){
        // fungsi menampilkan data dari database
        $this->statement = $this->dbh->prepare('SELECT * FROM seminar');
        $this->statement->execute();
        return $this->statement->fetchAll();
    }
   
    public function edit($id){
        // fungsi mengambil salah satu data untuk di update dari database
         $this->id = $id;
        $this->statement = $this->dbh->prepare('SELECT * FROM seminar WHERE id=:id');
        $this->statement->bindParam(':id', $this->id);
        $this->statement->execute();
        return $this->statement->fetchAll();
    }
   
    public function epro($id,$NIK,$tanggal,$jam,$ruang){
        // proses penyimpanan data setelah di update
		$this->id = $id;
		$this->NIK = $NIK;
        $this->tanggal = $tanggal;
		$this->jam = $jam;
        $this->ruang = $ruang;
        $this->data = array(
		'id' => $this->id,
        'NIK' => $this->NIK,
        'tanggal' => $this->tanggal,
		'jam' => $this->jam,
        'ruang' => $this->ruang
        );
		$this->statement = $this->dbh->prepare('UPDATE seminar SET NIK=:NIK, tanggal=:tanggal, jam=:jam, ruang=:ruang WHERE id=:id');
        $this->statement->execute($this->data);	
        //$this->statement = $this->dbh->prepare('UPDATE seminar SET NIK=:NIK, tanggal=:tanggal, jam=:jam, ruang=:ruang WHERE id=:id');
        //$this->statement->execute($this->data);
    }
   
    public function hapus($id){
        // fungsi menghapus data dari database
        $this->id = $id;
        $this->statement = $this->dbh->prepare('DELETE FROM seminar WHERE id=:id');
        $this->statement->bindParam(':id', $this->id);
        $this->statement->execute();
    }
}

// instansi class
$test = new Database;
?>