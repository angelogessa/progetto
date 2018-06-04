<?php
function visualizza($esercente){
    foreach ($esercente as $esercente) {
        /*            echo $esercente['nome'];*/
        echo '<td>';

            echo '' . $esercente['id_amministratore'] . '">
                    <div >ID Esercente:
                        ' . $esercente['id_amministratore'] . '</span>
                        <br>
                        Nome:
                        ' . $esercente['nome'] . '</span>
                        <br>
                        Email:
                        ' . $esercente['email'] . '</span>
                    </div>
                </div>
            </a>';
        }
    }



    ?>
    <?php require __DIR__ . '/parcials/header.php'; ?>
