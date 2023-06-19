<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>La Communication</title>
</head>

    <body>
        <div class="container">
            <?php include('header.php'); ?>
            
            <main>
                <?php include('sidebar_sommaire_comm.php'); ?>

                <div class="container_cps">
                    <h1>La communication</h1>

                    <section>
                        <h2>Quels sont les bénéfices d'avoir une bonne communication ?</h2>
                        <figure>
                            <img src="./img/Benefices_communication.jpg" alt="les bénéfices de la communication">
                            <figcaption>Source : Deastance Services</figcaption>
                        </figure>
                        
                        <p>Cependant, la communication est soumise à interprétation de la part de chacun des interlocuteurs et dépend de l'environnement.</p>
                        <figure>
                            <img src="./img/interpretation_comm.jpg" alt="interprétation dans la communication">
                            <figcaption>Source : Deastance Services</figcaption>
                        </figure>
                        
                    </section>
                </div>

                <aside>
                    <h2>Bon à savoir !</h2>
                    <p>La communication ne passe pas uniquement par les mots. Ces derniers ne représentent qu'une infime partie du message. Le reste passe par le langage non verbal et le visuel, c'est à dire un ensemble de signaux conscients ou non envoyés par le corps à travers notre position par exemple.</p>
                    <figure>
                        <img src ="./img/pourcentage_langage_nonverbal.jpg" alt="camembert montrant le pourcentage de langage non verbal">
                        <figcaption>Source : Deastance Services</figcaption>
                    </figure>
                    
                </aside>
            </main>

            <?php include('footer.php'); ?>
        </div>
    </body>
</html>