<?php
    if(isset($_POST['Username']) &&  isset($_POST['Password'])):
?>
    <section>
        <h1>Bonjour <?php $user = login();
           echo $user[0]['name']; ?></h1>

    </section>
<?php
    else:
?>
    <h1>Vous n'avez pas l'authorisation d'accéder a cette page!!!</h1>
<?php
    endif;
?>