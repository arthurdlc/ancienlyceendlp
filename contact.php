<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Contact | Site des anciens élèves et amis du lycée</title>
        <link rel='stylesheet' type='text/css' href="style.css">
        <style>
            .boutton{
                background-color : rgb(45,170,225);
                font-size : 30px ;
                color : white;
                
            }

            body{   margin-left:1%;
                background: white;
                font-family : arial ;
            }
            .error{
                color:red;
                font-size : 15px ;
            }

        </style>
    </head>
    <body> 
        <header>
        <img src="img/Logos_AnciensNDLP.png" width="100px" valign="top">
        <ul>
            <li><a href="Contact.html">Contact</a></li>
            <li><a href="Membres.html">Membres</a></li>
            <li><a href="Projet.html">Projets</a></li>
            <li><a href="Histoire.html">Histoire</a></li>
            <li><a href="index.html" style="color: rgb(45, 170, 225);">Accueil</a></li>
        </ul><hr>
        <h1 style="text-decoration : {rgb(0, 14, 50) ;}" >Contactez-nous :</h1><br><hr width="60%"> <br><br><br>
        <p>
            Adresse Postale : ................. <br><br>
            Email : amis-ndlp@ik.me <br> <br>
            Tel : --.--.--.--.-- <br> <br>
        </p>

        <?php 
    //Define variables and set to empty values
    $name = $prenom = $email = $comment = "";
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Define variables and set to empty values
    $nameErr = $prenomErr = $emailErr = "";
    
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if (empty($_POST['name'])) 
        { $nameErr = " Champs obligatoire" ;}
        else {$name = test_input($_POST["name"]);
        if (!preg_match('/^[a-zA-Z \p{L}]+$/ui', $name)) {      // cette commande permet de mettre un message d'erreur en cas de non conformitée du formulaire
            $nameErr = " Only letters and white space allowed";
        }}

        if (empty($_POST['prenom'])) 
        { $prenomErr = "Champs obligatoire " ;}
        else {$prenom = test_input($_POST["prenom"]);
        if (!preg_match('/^[a-zA-Z \p{L}]+$/ui', $prenom)) {
            $prenomErr = "Seul les lettres sont tolérée dans le champs";
        }}

        if (empty($_POST['email'])) 
        { $emailErr = " Champs obligatoire" ;}
        else {$email = test_input($_POST["email"]);
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = " Invalid email format";
        }}

        if (empty($_POST['comment'])) 
        { $commentErr = "" ;}
        else {$comment = test_input($_POST["comment"]);}
    }
    ?>
    <center>
    <form method="POST" action="<?php print(htmlspecialchars($_SERVER["PHP_SELF"]));?>">
<legend align="center"> Nom :</legend>
    <input type="text" name="name" value="<?php print($name);?>">
    <span class="error">*<?php echo $nameErr;?></span><br><br>



<legend align="center">Prénom</legend> 
    <input type="text" name="prenom" value="<?php print($prenom);?>">
                    <span class="error">*<?php echo $prenomErr;?></span><br><br>



<legend align="center">Email :</legend> 
    <input type="text" name="email" value="<?php print($email);?>">
    <span class="error">*<?php echo $emailErr;?></span><br><br>


<legend align="center">Comment :</legend>        
    <textarea name="comment" rows=5 cols=40 value="<?php print($comment);?>"></textarea><br><br>
   
    <input class="boutton" type="submit" && type="reset" name="submit" value="↑ Envoyer ↑"><br><br>
    </center> 
</form>

</body>
</html>