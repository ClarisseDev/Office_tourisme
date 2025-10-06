<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="css/header-template-css.css">
    <title>PHP</title>
</head>
<body>

<!---Header-->
    <?php
        include "templates/header-template.php";
    ?>
    <main>
        <section id="pepites">
            <h2>Nos pépites</h2>
            <div class="carrousel">
                <div class="flexContainer">
                    <figure class="slide">
                        <img src="https://www.thewowstyle.com/wp-content/uploads/2015/01/nature-images..jpg" alt="">
                        <figcaption>Légende</figcaption>
                    </figure>
                    <figure class="slide">
                        <img src="http://www.photo-paysage.com/albums/Paysages/Lac-riviere-cascade/paradis-lac-cascade-plitvice.jpg" alt="">
                        <figcaption>Légende</figcaption>
                    </figure>
                    <figure class="slide">
                        <img src="https://stileex.xyz/wp-content/uploads/2019/01/image-a-telecharger-gratuitement.jpg" alt="">
                        <figcaption>Légende</figcaption>
                    </figure>
                    <figure class="slide">
                        <img src="https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832_960_720.jpg" alt="">
                        <figcaption>Légende</figcaption>
                    </figure>
                    <figure class="slide">
                        <img src="https://actionphototours.com/wp-content/uploads/2018/04/Cascade-Lake.jpg" alt="">
                        <figcaption>Légende</figcaption>
                    </figure>
                </div>
            </div>
        </section> 
        <section id="hebergements">
            <h2>Hébergements</h2>
            <div class="flexContainer">
                <article class="flexContainer">
                    <figure><img src="https://static.toiimg.com/photo/msid-100182318,width-96,height-65.cms" alt="Camping"></figure>
                    <h3>Campings</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam, voluptates.</p>
                    <p>Molestiae, aliquid beatae. Libero sit, et quibusdam necessitatibus officia iure!</p>
                    <div class="flexContainer">
                        <a href="" class="btn">Réserver</a>
                        <a href="" class="btn">Partager</a>
                    </div>
                </article>
                <article class="flexContainer">
                    <figure><img src="https://cache.marriott.com/marriottassets/marriott/GVALC/gvalc-deluxe-7352-hor-clsc.jpg?interpolation=progressive-bilinear&" alt="Hôtels">
                    <h3>Hôtels</h3></figure>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, pariatur!</p>
                    <p>Eligendi, nostrum illo ratione ipsa vitae provident tenetur hic facere?</p>
                    <div class="flexContainer">
                        <a href="" class="btn">Réserver</a>
                        <a href="" class="btn">Partager</a>
                    </div>
                </article>
                <article class="flexContainer">
                    <figure><img src="https://www.gites-de-france-savoie.com/img/location_maison_individuelle_gites_de_france_savoie_-__73g153108_-_marthod-1665588344.jpg" alt="Gîtes"></figure>
                    <h3>Gîtes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur, aperiam!</p>
                    <p>Voluptatum atque quibusdam dignissimos error provident ipsam, aspernatur cupiditate. Adipisci.</p>
                    <div class="flexContainer">
                        <a href="" class="btn">Réserver</a>
                        <a href="" class="btn">Partager</a>
                    </div>
                </article>
            </div>
        </section> 
        <section id="randos">
            <h2>Envie de <br><span>Rando</span></h2>
            <div class="flexContainer">
                <form action=""></form>
                <article>
                    <figure>
                        <img src="https://www.mongr.fr/data/1000/Images/Conseils/hemis-0638150-1200px.jpg" alt="">
                    </figure>
                    <div class="entityItemContent">
                        <p class="entityItemContentSubtitle">Pédestre</p>
                        <h3 class="entityItemContentTitle">
                            <a href="">Le Tour Du Lac De Jouarres</a>
                        </h3>
                        <p class="entryMeta">
                            <span class="entryMetaCity">HOMPS</span>
                            <span>6,4 km</span>
                            <span>Facile</span>             
                        </p>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/61/1d/fd/611dfd6ffd027d575227d6b8573ff478.jpg" alt="">
                    </figure>
                    <div class="entityItemContent">
                        <p class="entityItemContentSubtitle">Pédestre</p>
                        <h3 class="entityItemContentTitle">
                            <a href="">Le Tour Du Lac De Jouarres</a>
                        </h3>
                        <p class="entryMeta">
                            <span class="entryMetaCity">HOMPS</span>
                            <span>6,4 km</span>
                            <span>Facile</span>             
                        </p>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="https://www.trekking-mont-blanc.com/wp-content/uploads/Quel-mat%C3%A9riel-de-randonn%C3%A9e-pour-l%C3%A9t%C3%A9-min.jpg" alt="">
                    </figure>
                    <div class="entityItemContent">
                        <p class="entityItemContentSubtitle">Pédestre</p>
                        <h3 class="entityItemContentTitle">
                            <a href="">Le Tour Du Lac De Jouarres</a>
                        </h3>
                        <p class="entryMeta">
                            <span class="entryMetaCity">HOMPS</span>
                            <span>6,4 km</span>
                            <span>Facile</span>             
                        </p>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="https://i-det.unimedias.fr/sites/art-de-vivre/files/styles/large/public/adobestock_88979533_alpes_randonnee_famille.jpg?auto=compress%2Cformat&crop=faces%2Cedges&cs=srgb&fit=crop&h=600&w=900" alt="">
                    </figure>
                    <div class="entityItemContent">
                        <p class="entityItemContentSubtitle">Pédestre</p>
                        <h3 class="entityItemContentTitle">
                            <a href="">Le Tour Du Lac De Jouarres</a>
                        </h3>
                        <p class="entryMeta">
                            <span class="entryMetaCity">HOMPS</span>
                            <span>6,4 km</span>
                            <span>Facile</span>             
                        </p>
                    </div>
                </article>
            </div>
        </section>
        <section id="agenda">
            <h2>Agenda</h2>
            <article class="flexContainer">
                <figure>
                    <img src="https://paris.recreplanet.fr/sites/paris.recreplanet.fr/files/visuel_article.jpg" alt="">
                    <figcaption class="flexContainer">Légende</figcaption>
                    <div class="picto">+</div>
                </figure>
                <div class="content flexContainer">
                    <h3>Marionnettes</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt delectus similique doloremque enim sequi, ullam quaerat! Exercitationem aspernatur illo omnis, tempore fugiat earum possimus dicta. Id distinctio, harum ipsum aperiam sit esse tempore sint sapiente laborum quam reprehenderit facilis at tenetur nostrum. Consectetur veritatis, perspiciatis sed delectus dicta error assumenda!</p>
                    <a href="" class="btn">Lire</a>
                </div>
            </article>
            <article class="flexContainer">
                <figure>
                    <img src="https://img.lemde.fr/2022/11/18/0/339/5832/3888/1440/960/60/0/2fb861e_1668788142068-dsc00978.jpg" alt="">
                    <figcaption class="flexContainer">Légende</figcaption>
                </figure>
                <div class="content flexContainer">
                    <h3>Soirée jeux</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt delectus similique doloremque enim sequi, ullam quaerat! Exercitationem aspernatur illo omnis, tempore fugiat earum possimus dicta. Id distinctio, harum ipsum aperiam sit esse tempore sint sapiente laborum quam reprehenderit facilis at tenetur nostrum. Consectetur veritatis, perspiciatis sed delectus dicta error assumenda!</p>
                    <a href="" class="btn">Lire</a>
                </div>
            </article>
            <article class="flexContainer">
                <figure>
                    <img src="https://dam.beatvenues.be/a0WP50000012vrFMAQ_original.jpg" alt="">
                    <figcaption class="flexContainer">Légende</figcaption>
                </figure>
                <div class="content flexContainer">
                    <h3>Paul MIRABEL</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt delectus similique doloremque enim sequi, ullam quaerat! Exercitationem aspernatur illo omnis, tempore fugiat earum possimus dicta. Id distinctio, harum ipsum aperiam sit esse tempore sint sapiente laborum quam reprehenderit facilis at tenetur nostrum. Consectetur veritatis, perspiciatis sed delectus dicta error assumenda!</p>
                    <a href="" class="btn">Lire</a>
                </div>
            </article>
            <article class="flexContainer">
                <figure>
                    <img src="https://vivreaulycee.fr/wp-content/uploads/2020/03/theatre4.jpg" alt="">
                    <figcaption class="flexContainer">Légende</figcaption>
                </figure>
                <div class="content flexContainer">
                    <h3>Théâtre</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt delectus similique doloremque enim sequi, ullam quaerat! Exercitationem aspernatur illo omnis, tempore fugiat earum possimus dicta. Id distinctio, harum ipsum aperiam sit esse tempore sint sapiente laborum quam reprehenderit facilis at tenetur nostrum. Consectetur veritatis, perspiciatis sed delectus dicta error assumenda!</p>
                    <a href="" class="btn">Lire</a>
                </div>
            </article>
        </section>
        <section>
            section05
        </section>
    </main>

    <?php
        include "templates/footer.html";
    ?>
</body>
</html>