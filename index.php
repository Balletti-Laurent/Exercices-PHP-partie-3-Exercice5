<!DOCTYPE html>
<html>
    <head lang="fr">
        <meta charset="utf-8">
        <title>Exercice 5</title>
    </head>
    <body>
        <div>
            <?php
            $count = 1;
            while ($count <= 15)
            {
                echo '<p>' .$count. ' On y arrive presque.</p>';
                $count++;
            }
            for ($count = 1; $count <= 15; $count++) {
            echo '<p>' .$count. ' On y arrive presque.</p>';
            }
            ?>
        </div>
    </body>
</html>