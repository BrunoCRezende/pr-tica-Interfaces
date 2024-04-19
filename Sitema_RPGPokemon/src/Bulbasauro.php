<?php

namespace App;

use App\Pokemon;

class Bulbasauro implements Pokemon{

    public function Atacar($nomeAtk, $custoAtk){

        $classe = 'Bulbasauro';

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