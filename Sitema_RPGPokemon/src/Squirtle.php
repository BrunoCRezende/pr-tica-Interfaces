<?php

namespace App;

use App\Pokemon;

class Squirtle implements Pokemon{

    public function Atacar($nomeAtk, $custoAtk){

        $classe = 'Squirtle';

        echo "
        \n --------------------------------------
        \n Classe: $classe
        \n Nome do Ataque: $nomeAtk.
        \n Custo do Ataque: $custoAtk.
        \n --------------------------------------
        ";

    }
    
}

?>