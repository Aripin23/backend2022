<?php

class Animal {

    private $data = array();

    public function __construct($data)
    {
        $this->data = $data;
    }

    function index(){
    	foreach ($this->data as $value) {
    		echo $value;
    		echo "<br>";
    	}
    }

    function store($data){
        array_push($this->data,$data);
    }

    function update($index, $data){
        $this->data =  array_replace($this->data, array($index => $data));
    }

    function destroy($index){
        unset($this->data[$index]);
    }

}

$animals = ['Sapi', 'Kambing', 'Ayam'];


$animal =  new Animal($animals);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('burung');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";