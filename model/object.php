<?php


function getListaEsercenti(){
    //query
    $dbc= require __DIR__ . '/../database/db.php';
    //Verificare autenticazione

    $query = "SELECT * FROM `amministratore`";
    $result = $dbc->query($query);
    //return del risultato
    return($result);
}

function postEsercente($par){

    $dbc= require __DIR__ . '/../database/db.php';
    $q = "INSERT INTO amministratore (id, nome, email) VALUES ('$id', '$nome', '$email')";
    $r = @mysqli_query($dbc, $q);
    return($r);
}

function doLogin($par){

}


function creaQuestionario($parametri){
    //Qui fai il require della connesione al db
    //fai la tua queri con i valori
    //e sei aposto
}
?>