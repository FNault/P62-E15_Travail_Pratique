<section>
    <?php
        if(isset($_POST['Username']) && isset($_POST['Password']) && $_POST['Username'] != "" && $_POST['Password'] != ""){
            login();
        }
    ?>
    <form action="Index.php?Page=Admin" method="post">
        <label>Pseudo<input type="text" name="Username" id="Username"/></label>
        <label>Mot de Passe<input type="password" name="Password" id="Password"/></label>
        <label><input type="submit" value="Connexion"/></label>
    </form>
</section>