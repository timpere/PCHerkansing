<h1>Welkom bij DataDate!</h1></br>
    <h2>"Hadden we eerder van deze site geweten..."</h2>
    <h2>"Een nieuw begin..."</h2>
    <h2>"Daten is dope, Data is leven..."</h2>
    <div id="promotie">Dè datingsite waar u gematcht wordt op basis van uw persoonlijkheid en likes die u geeft aan andere gebruikers van deze site.
    Reuze fijn dat u deze site heeft aangeklikt. Zoek niet verder, u zult het niet beter treffen. Wij bieden uw toekomstige partner!
    Heeft u vaak net achter het net gevist en wilt u fijn gaan daten? Dit kan, DataDate bied een rijke keuze aan mensen. Schrijf u vandaag nog in!
    Daten is ons leven, daten is Data. Daten is DataDate!
    </div>

<div id="previews">
    <div class="preview">
        <?php

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


            echo "Naam ". anchor('/mijngegevens/', $row->nickname, $row->nickname) . "<br>";
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
                    echo 'Google';
                }
                else{
                    echo null;
                }

            }
        }

        ?>

    </div>

    <div class="preview">
        <?php

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


            echo "Naam ". anchor('/mijngegevens', $row->nickname) . "<br>";
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
                    echo 'Google';
                }
                else{
                    echo null;
                }

            }
        }

        ?>
    </div>

    <div class="preview">
        <?php

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


            echo "Naam ". anchor('/mijngegevens', $row->nickname) . "<br>";
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
                    echo 'Google';
                }
                else{
                    echo null;
                }

            }
        }

        ?>

    </div>

    <div class="preview">
        <?php

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


            echo "Naam ". anchor('/mijngegevens', $row->nickname) . "<br>";
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
                    echo 'Google';
                }
                else{
                    echo null;
                }

            }
        }

        ?>

    </div>
    <div class="preview">
        <?php

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


            echo "Naam ". anchor('/mijngegevens', $row->nickname) . "<br>";
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
                    echo 'Google';
                }
                else{
                    echo null;
                }

            }
        }

        ?>

    </div>

    <div class="preview">
        <?php

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


            echo "Naam ". anchor('/mijngegevens', $row->nickname) . "<br>";
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
                    echo 'Google';
                }
                else{
                    echo null;
                }

            }
        }

        ?>

    </div>
  

</div>
    
    <a id="meer" href="javascript:location.reload(true)">Meer profielen</a>


