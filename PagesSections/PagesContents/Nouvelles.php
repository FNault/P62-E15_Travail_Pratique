<?php

?>
<section>
    <h2>

    </h2>
    <section>
        <h3>Nouvelles du site</h3>
        <form action="<?php echo 'Index.php?Page=Nouvelles' ; ?>" method="POST">
            <select name="Filter" id="Filter">
                <option value="All">Tous les thèmes</option>
                <?php
                    foreach(article_loader() as $id => $article){
                        echo "<option>{$article['theme']}</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Trier les Articles"/>
        </form>
        <?php

        ?>
    </section>
</section>