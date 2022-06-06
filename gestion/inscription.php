<!DOCTYPE html>
<?php
if(isset($_POST['enregistrer'])){
        $ide = $_POST['id'];
        $matriculee = $_POST['matricule'];
        $prenome = $_POST['prenom'];
        $mdpe = $_POST['mdp'];
} elseif(isset($_POST['gen'])){
        $ide = $_POST['id'];
        $id = $ide;
        $matriculee = $_POST['matricule'];
        $matricule = $matriculee;
        $prenome = $_POST['prenom'];
        $prenom = $prenome;
        $mdpe = $_POST['mdp'];
        $mdp = $mdpe;
        $quantitee = $_POST['quantite'];
        $quantite = $quantitee;
}
?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Formulaire d'inscription</title>
    <style>
        body{
            background-color: #0C0215;
        }
        body{
            color: white;
        }
        .quant{
            height:20px;
            width:40px;
        }
        .enre{
            height:30px;
            width:150px;
        }
        input { width: 50px; text-align: right; }
        input{
            height:20px;
            width:200px;
        }
    </style>
</head>
<body>
<h1>Inscription</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <label for="id">Identifiant (pseudo)<br><input id="id" name="id" class="" value="<?php if(empty($id)){
            $id = ''; echo $id;} else{
            echo $id;}?>" /></label>
    <input type="hidden" name="ide" value="<?php if (empty($ide)){
        $ide = ''; echo $ide;} else{
        echo $ide;
    }?>"/>
    <br>
    <label for="matricule">Matricule<br><input id="matricule" name="matricule" value="<?php if (empty($matricule)){
            $matricule = ''; echo $matricule;} else{
            echo $matricule;
        }?>" /></label>
    <input type="hidden" name="matriculee" value="<?php if (empty($matriculee)){
        $matriculee = ''; echo $matriculee;} else{
        echo $matriculee;
    }?>"/>
    <br>
    <label for="prenom">Prenom<br><input type="text" id="prenom" name="prenom" class="" value="<?php if (empty($prenom)){
            $prenom = ''; echo $prenom;} else{
            echo $prenom;
        }?>"  /></label>
    <input type="hidden" name="prenome" value="<?php if (empty($prenome)){
        $prenome = ''; echo $prenome;} else{
        echo $prenome;
    }?>"/>
    <br>
    <label for="mdp">Mot de passe (Veuillez utiliser le générateur) PS: j'ai la flemme de les sécurisé<br><input type="text" id="mdp" name="mdp" class=""value="<?php if (empty($mdp)){
            $mdp = ''; echo $mdp;} else{
            echo $mdp;
        }?>"/>
    <input type="hidden" name="mdpe" value="<?php if (empty($mdpe)){
        $mdpe = ''; echo $mdpe;} else{
        echo $mdpe;
    }?>"/>
    <br>
    <label for="gen">Générateur de mdp<br><input type="text" disabled="disabled" id="gen" name="gen" value="
    <?php
        if(isset($gen)){
            $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $shfl = str_shuffle($comb);
            $pwd = substr($shfl,0,$_POST['quantite']);
            echo $pwd;}
        elseif(empty($gen)){
            $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $shfl = str_shuffle($comb);
            if(empty($_POST['quantite'])){$taille = 8;}else{$taille = $_POST['quantite'];}
            $pwd = substr($shfl,0,$taille);
            echo $pwd;
        }
        ?>"/></label>
    <br>
    <label for="quantite">Taille </label><input id="quantite" name="quantite" type="number" value="<?php if (empty($quantite)){
            $quantite = 8; echo $quantite;} else{
            echo $quantite;
        }?>" class="quant"/>
    <input type="hidden" name="quantitee" value="<?php if (empty($quantitee)){
            $quantitee = ''; echo $quantitee;} else{
            echo $quantitee;
        }?>"/>
    <button name="gen" value="generer">Génerer un nouveau mdp</button>
    <br><br>
    <button class = 'enre' name="enregistrer" value="enregister">Enregistrer</button>
    <a href="./login.php"> <br>
        Je suis déjà inscris / j'ai un compte
    </a>
    <a href="./mdprecover.php"> <br>
        mot de passe oublié
    </a>
</form>
</body>
</html>
