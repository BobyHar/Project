<?php 
//class mei
class mei{
	//property class mei
	public $nama_saya;

	//method pada class mei
	function beri_nama($saya){
		$this->nama_saya=$saya;
	}
}
//class turunan atau sub-class dari class mei
// kita menghubungkan class dengan syntaks extends
class teman extends mei{
	//property class teman
	public $nama_teman;

	//method pada class teman
	function berinama_teman($teman){
		$this->nama_teman=$teman;
	}
}

//instanasi class teman
$kawan= new teman;

//method beri nama adalah method pada class mei, tapi kiyta bisa mengaksesnya
//karena menghubungkan calss teman dengan class mei 

$kawan->beri_nama("embun");
$kawan->berinama_teman("jessen");

//menampilkan isi properti
echo "Nama Saya: ". $kawan->nama_saya."<br/>";
echo "Nama kawan Saya: ". $kawan->nama_teman."<br/>";
?>