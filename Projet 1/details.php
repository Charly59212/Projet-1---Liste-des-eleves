<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations sur l'élève</title>
    <link rel="icon" type="image/png" sizes="16x16" href="chapeau.png">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container-bis">
        <div class="details">

        <?php
        // index and session parameters
        if (isset($_GET['index']) && isset($_SESSION['eleves'])) {
            $index = $_GET['index'];
            $eleves = $_SESSION['eleves'];

            // Students in the array
            if (isset($eleves[$index])) {
                // Student's details
                list($nom, $prenom, $age, $ville, $passions) = $eleves[$index];
                echo "<h1>Informations sur l'élève</h1>";
                echo "<p>Nom : $nom</p>";
                echo "<p>Prénom : $prenom</p>";
                echo "<p>Âge : $age ans</p>";
                echo "<p>Ville : $ville</p>";
        
                // Display the student's hobbies
                echo "<p>Passions :</p><ul>";
                foreach ($passions as $passion) {
                    echo "<li class = 'passions'>$passion</li>";
                }
                echo "<div class='button button-bis'><br><a href='index.php'>Retour à la liste</a></div>";
            } else {
                echo " ";
            }
        } 
        ?>

        </div>
    </div>

     <!-------Link for javascript page & jquery--------->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>

    </body>
</html>