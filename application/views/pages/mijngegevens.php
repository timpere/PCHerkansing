<?php

echo form_open('mijngegevens');


$max = $this->db->count_all_results('Persoon');
$id = rand (1, $max);
$query = $this->db->select('nickname, leeftijd, geslacht, beschrijving, persoonlijkheidstype')->from('Persoon')

    ->group_start()
    ->where('id', $id )
    ->group_end()
    ->get();

$query2 = $this->db->select('CocaCola, Google')->from('Merkvoorkeur')
    ->group_start()
    ->where('id', $id )
    ->group_end()
    ->get();

foreach ($query->result() as $row)
{
    if ($row->geslacht == 'm') {
        echo '<a href= ><div class="thumbnail"> <img src="assets/img/man.jpg" id="thumbnail"></div></a>';
    }
    else{

        echo '<a href= > <div class="thumbnail"> <img src="assets/img/vrouw.jpg" id="thumbnail"></div></a>';
    }

    echo "Naam: ". $row->nickname ."<br>";
    echo "Leeftijd: ".$row->leeftijd."<br>";
    echo "Geslacht: ".$row->geslacht . "<br>";
    echo "Type: ".$row->persoonlijkheidstype . "<br>";
    echo substr($row->beschrijving, 0,50) . "...<br>";
    echo 'Merkvoorkeuren: ' . "<br>";
    foreach ($query2->result() as $row2) {
        if($row2-> CocaCola == 1){
            echo 'Coca-Cola' . "<br>";
        }
        else{
            echo null;
        }


    }
    foreach ($query2->result() as $row2) {
        if($row2-> Google == 1){
            echo 'Google'. "<br>";
        }
        else{
            echo null;
        }

    }

    echo anchor('/mijnprofiel/login/', 'Conctact'). "<br>";
    echo anchor('/mijnprofiel/registreer/', 'Like'). "<br>";
}

?>


