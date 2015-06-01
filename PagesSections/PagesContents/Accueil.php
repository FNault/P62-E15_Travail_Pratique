<section>
    <h2>

    </h2>
    <section>
        <h3>Dernières Nouvelles</h3>
        <?php
            foreach(article_loader() as $id => $article){
                echo "<article><h3>{$article['name']}</h3><h4>{$article['title']}</h4><date>{$article['date']}</date><p>{$article['content']}</p></article>";
            }
        ?>
    </section>
</section>