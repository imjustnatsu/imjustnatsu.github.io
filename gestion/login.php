
il n'y a pas de login mais voilà une jolie calculatrice bg !
<?php
$nb1 = !empty($_POST['nombre1']) ? htmlentities($_POST['nombre1']) : 'Pas un nombre';
$nb2 = !empty($_POST['nombre2']) ? htmlentities($_POST['nombre2']) : 'Pas un nombre';
$op = !empty($_POST['operation']) ? htmlentities($_POST['operation']) : 'Erreur';
$resultat = 0;

if(isset($_POST['egal'])) {
    if (!empty($_POST['operation'])){
        switch($_POST['operation']){
            case 'M':
                $resultat = $nb1 - $nb2;
                break;
            case 'MU':
                $resultat = $nb1 * $nb2;
                break;
            case 'D':
                if($nb2 == 0){
                    $resultat = 'fdp change de nombre';
                }
                else{
                    $resultat = $nb1 / $nb2;
                }
            case 'p':
                $resultat = $nb1 + $nb2;
                break;
        }
    }
}
?>