<section>
    <h2>

    </h2>
    <section>
        <h3>Dernières Nouvelles</h3>
        <?php
            foreach(article_loader() as $id => $article){
                echo $article['content'];
            }
        ?>
    </section>
</section>