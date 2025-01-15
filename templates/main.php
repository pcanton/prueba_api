<main>
    <section>
        <img src="<?= $poster_url; ?>" widht="200" alt="Poster de <?= $title; ?>" style="border-radius: : 16px" />
    </section>
    <hgroup>
        <h3><?= $data["title"]; ?> - <?= $until_message ?></h3>
        <p> Fecha de estreno: <?= $release_date ?></p>
        <p> La siguiente pelicula es : <?= $following_production["title"]; ?></p>
    </hgroup>

</main>