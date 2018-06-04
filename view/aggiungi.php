<?php
function visualizza($variabile){
    ?>
    <?php require __DIR__ . '/parcials/header.php'; ?>

    <form action="/Aggiungi" method="post">
        Name: <input type="text" name="name"><br>
        id: <input type="text" name="name"><br>
        E-mail: <input type="text" name="name"><br>
        <input type="submit">
    </form>


<?php  }?>