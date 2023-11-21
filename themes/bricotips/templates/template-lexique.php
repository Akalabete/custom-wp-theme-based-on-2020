
<?php
/**
 * Template Name: template lexique
 */


 $lexique = array(
    array(
        'titre' => 'Abattant',
        'definition' => 'Châssis de fenêtre s’ouvrant horizontalement.'
    ),
    array(
        'titre' => 'Apprêt',
        'definition' => 'Couche de peinture ou de papier peint posé sur un mur pour en améliorer l’aspect final.'
    ),
    array(
        'titre' => 'Béton',
        'definition' => 'Agrégat de sable, de ciment et d’eau. Armé, il est coulé sur armature métallique. Cellulaire, il
        comporte des milliers de bulles qui lui confèrent une très bonne isolation et solidité.
'
    ),
    array(
        'titre' => 'Chaume',
        'definition' => 'Matériau de couverture fait de paille de seigle, de roseau, etc.'
    ),
    array(
        'titre' => 'Drain',
        'definition' => 'Dispositif enterré destiné à capter les eaux souterraines.'
    ),
    array(
        'titre' => 'Entrait',
        'definition' => 'Pièce de charpente horizontale joignant les arbalétriers.'
    ),
    array(
        'titre' => 'Greffer',
        'definition' => 'Remplacer la partie endommagée d’une pièce de bois par un matériau sain.'
    ),
    array(
        'titre' => 'Lambourde',
        'definition' => 'Poutre fixée le long d’un mur pour recevoir des solives sur lesquelles sont clouées les lames d’un
        parquet.'
    ),
    array(
        'titre' => 'Mortaise',
        'definition' => 'Entaille faite dans une pièce de bois pour recevoir le tenon d’une autre pièce.'
    ),
);

get_header();
?>

<main id="lexique">
    <?php
        echo do_shortcode('[banniere-titre titre="Lexique du bricolage" src="http://bricotips.local/wp-content/uploads/2023/11/banniere-image.webp"]')
    ?>
    <section>
        <?php
        foreach ($lexique as $mot) {
            ?>
            <div class="mot">
                <div class="titre">
                    <?php echo $mot['titre']; ?>
                    <div class="action">
                        <div class="down">&#9660;</div>
                        <div class="up">&#9650;</div>
                    </div>
                </div>
                <div class="definition">
                    <?php echo $mot['definition']; ?>
                </div>
            </div>
        <?php } ?>
    </section>

</main><!-- #site-content -->
<script>
    const mots = document.querySelectorAll("#lexique .mot");
    mots.forEach(mot => {
        mot.addEventListener("click", (e) => {
            if (!mot.classList.contains("open")) {
                mots.forEach(m => {
                    m.classList.remove("open");
                })
                mot.classList.add("open");
            } else mot.classList.remove("open");
        })
    })
</script>

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();






