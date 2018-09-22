<?php
// fonction qui permet de lire le fichier csv.
function View()
{
    // variable d'ouverture de la base de donnée.
    $db = file('db.csv');
    // tableau vide qui va nous servir pour stocker les infos.
    $dbfile = [];
    // Boucle pour recuperer chaque ligne de la base de donnée et la stocké dans la varible du dessus.
    foreach ($db as $row) {
        $dbfile[] = str_getcsv($row, "~", '"');
    }
    // Boucle pour afficher chaque ligne sous forme de Card Bootstrap
    foreach (array_reverse($dbfile) as $rw) { ?>
        <div class="row">
            <div class="card w-50 mt-3 justify-content-center" style="margin: auto;">
                <div class="card-header">
                    <div class="row">
                                             <!-- Affiche la première info de la ligne -->                           <!-- Affiche la troisième info de la ligne -->
                        <h5 class="col-md-4 col-sm-12"><?php echo $rw[0] ?></h5><h7 class="font-italic col-md-6 col-sm-12 offset-md-2"><?php echo $rw[2] ?></h7>
                    </div>
                </div>
                <div class="card-body">
                                <!-- Affiche la deuxième info de la ligne -->
                    <p class="card-text"><?php echo $rw[1] ?></p>
                </div>
            </div>
        </div>
        <?php
    }
}

// Appel de la fonction.
View();
