<?php


$utenti = [
    ['nome' => 'Ivan', 'cognome' => 'Dido', 'genere' => 'M'],
    ['nome' => 'Dua', 'cognome' => 'Lipa', 'genere' => 'F'],
    ['nome' => 'Optimus', 'cognome' => 'Prime', 'genere' => 'NB']
];

    foreach($utenti as $elemento){
        foreach($elemento as $chiave => $valore){
        if($valore=='M'){ echo "Buongiorno Sig." .$elemento['nome'] ." " .$elemento['cognome'] ."\n";}
        else if($valore=='F'){ echo "Buongiorno Sig.ra " .$elemento['nome'] ." " .$elemento['cognome']."\n";}
        else if($valore=='NB'){ echo "Buongiorno " .$elemento['nome'] ." " .$elemento['cognome']."\n";}
    }
}

