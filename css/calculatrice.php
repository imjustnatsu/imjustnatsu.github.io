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


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <link rel='stylesheet' type='text/css' media='screen' href='style_ex.css'>
    <title>Création d'un compte sur iBaie </title>
    <style>
        body{
            background-color: #0C0215;
            color: white;
        }
        label.radio {
            display: inline;
        }
        label.radio::after {
            content: "";
        }
        input:required{
            color: red;
        }
        fieldset {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
<h1>Calculatrice</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <input type="hidden" name="status" value="<?php echo isset($_POST['status']) ? htmlentities($_POST['status']) : ''; ?>">
    <fieldset>
        <input type="number" name="nombre1">
        <select id="livraison" name="operation">
            <option value="M">-</option>
            <option value="p">+</option>
            <option value="D">/</option>
            <option value="MU">*</option>
        </select>
        <input type="number" name="nombre2">
        <button type="" name="egal">=</button>
        <?php
        echo $resultat;
        ?>
    </fieldset>
    <button type="reset" name="reset2"><u>Réinitialiser</u></button>
</form>
</body>
</html>