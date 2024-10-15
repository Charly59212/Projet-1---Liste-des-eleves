<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des élèves</title>
    <link rel="icon" type="image/png" sizes="16x16" href="chapeau.png">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h1>Liste des élèves</h1>

    <?php
        // Array of students with name, first name, age, city, and hobbies
        $eleves = [
            0 => ["Durand", "Brian", "15", "Lille", ["ski", "roller", "skate"]],
            1 => ["Meyer", "André", "14", "Roubaix", ["football", "vélo", "trotinette"]],
            2 => ["Martin", "Emilie", "16", "Tourcoing", ["livres", "séries TV", "sorties"]],
            3 => ["Giraud", "Lucie", "14", "Hellemmes", ["animaux", "jeux vidéos", "shopping"]],
            4 => ["Dumont", "Jérome", "15", "Tournai", ["légo", "timbres", "tennis"]],
            5 => ["Masson", "Nathan", "15", "Marquette", ["pétanque", "jardinage", "lecture"]],
            6 => ["Roussel", "Amélie", "14", "Lille", ["dessin", "mangas", "musique"]],
            7 => ["Morin", "Lucien", "16", "Valenciennes", ["oiseaux", "nature", "pêche"]],
            8 => ["Perrin", "Anne", "15", "Lille", ["voyages", "photo", "natation"]],
            9 => ["Legrand", "Thomas", "15", "Maubeuge", ["mécanique", "cinéma", "course à pied"]],
            10 => ["Garcia", "Julie", "14", "Loos", ["couture", "maquillage", "cosplay"]]
        ];

        // Store the array in a session
        $_SESSION['eleves'] = $eleves;

        // Loop to display student's
        foreach ($eleves as $index => $eleve) {
            // Extract last name & first name
            list($nom, $prenom) = $eleve;
            echo "<div class='row'>
            <div class='text'>$prenom $nom : </div>
            <div class='button'><a href='details.php?index=$index'>Détails</a></div>
          </div>";        }
    ?>

    </div>

    <!-------Link for javascript page & jquery--------->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>

    </body>
</html>