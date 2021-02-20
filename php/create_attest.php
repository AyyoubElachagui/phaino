<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png" type="image/ico" >
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
        $nom_site = "/phaino/php/";
            $nom = ucfirst($_POST['nom']);
            $prenom = ucfirst($_POST['prenom']);
            $date_naissance = $_POST['date_naissance'];
            $lieu_naissance = ucfirst($_POST['lieu_naissance']);
            $adresse = $_POST['adresse'];
            $lieu = ucfirst($_POST['lieu']);
            $code_postal = $_POST['code_postal'];
            $motif = $_POST['motif'];
        $nom = fctRetirerAccents($nom);
        $prenom = fctRetirerAccents($prenom);
        $lieu_naissance = fctRetirerAccents($lieu_naissance);
        $adresse = fctRetirerAccents($adresse);
        $lieu = fctRetirerAccents($lieu);

        // *** ATTENTION *** Si l'on d�sire filtrer les gens qui y ont droit d�commanter les lignes 18 � 27 et 65 � 67 
        if (($nom<>"Xxxx") and ($nom<>"Yyyy") and ($nom<>"Zzzz"))    // *** ATTENTION *** ne pas oublier la majuscule en d�but de nom
        {
        ?>
        <div class="text-center mt-5">
            <div class="mt-5">
                <h1>Votre Nom n'est pas autoris� � utiliser cette application</h1>
                <a href="/phaino/php/create_attestation.php" title="Retour � la saisie" class="btn btn-light">Validez pour retourner � la saisie</a>
            </div>
        </div>
        <?php
}else{
// il y a aussi le dernier } � la fin du fichier � d�commenter
        ?>
 <?php
                        $var = substr($prenom,0,3).substr($nom,0,3);

                        $fp=fopen("attestation_squelette.php","r");
                        $i=0;
                        while (!feof($fp))
                        {
                            $data[$i]=fgets($fp,4096);
                            $i=$i+1;
                        }
                        fclose($fp);

                        $fic = "attestation/attestation".$var.".php";
                        if (file_exists($fic))
                        {
                            unlink($fic);
                        }

                        $fp1=fopen($fic,"a+");
                        $data[4] = str_replace("@",$nom,$data[4]);
                        $data[5] = str_replace("#",$prenom,$data[5]);
                        $data[6] = str_replace("~",$date_naissance,$data[6]);
                        $data[7] = str_replace("&",$lieu_naissance,$data[7]);
                        $data[8] = str_replace("333",$adresse,$data[8]);
                        $data[9] = str_replace("444",$lieu,$data[9]);
                        $data[10] = str_replace("555",$code_postal,$data[10]);
                        $data[11] = str_replace("666",$motif,$data[11]);

                        for ($z=0; $z<+$i;$z++)
                        {
                            fputs($fp1,$data[$z]);
                        }
                        ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-10 img-ca">
                <img src="../img/Printer-amico.png" width="500" class='ml-5 mt-5' >
                <div class="card_l rounded">
                    <p>Pour Imprimer Votre Attestation</p>
                       
                        Votre lien attestation : <a href="<?php echo $nom_site.$fic; ?>" class='link'><?php echo $nom_site.$fic; ?></a>	

                        
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-10">
                <img src="../img/Emails-bro.png" width="500" class='mr-5 mt-5' >
                <div class="card_r rounded">
                    <p>Envoyer Votre Attestation via Email</p>
                    <form action="send_attestation.php" method="POST" class="submit">
                        <div class="md-form ">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-outline">
                                        <input type="text" name="link" value="<?php echo $nom_site.$fic; ?>" style="display : none">
                                        <input type="email" id="form1" class="form-control" name='email' required/>
                                        <label class="form-label pl-3" for="form1">Votre Boite Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <input type="submit" value="Envoyer" class="btn border">
                                </div>
                            </div>   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
                        }

                        function fctRetirerAccents($varMaChaine)
                                {
                                    $search  = array('�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�', '�');
                                    //Pr�f�rez str_replace � strtr car strtr travaille directement sur les octets, ce qui pose probl�me en UTF-8
                                    $replace = array('A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 'a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y');

                                    $varMaChaine = str_replace($search, $replace, $varMaChaine);
                                    return $varMaChaine; //On retourne le r�sultat
                                }
                        ?>

</body>
</html>