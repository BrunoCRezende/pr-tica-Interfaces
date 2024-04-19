<?php

namespace App;

use App\Pokemon;

class Charmander implements Pokemon{

    public function Atacar($nomeAtk, $custoAtk){

        $classe = 'Charmander';

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