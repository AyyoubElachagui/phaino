<html >
<head >
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png" type="image/ico" >
	<title>Générateur d'Attestation COVID Permanente</title>
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
    <!-- Link Css  -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- link ajax with jquery -->
    <!--<script src="../js/create_attestation.js"></script>-->
</head>

<body>
    <h1 class="text-center mt-5"> Générateur d' Attestation Covid Permanente </h1>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-9 col-sm-10 mt-5 bg-light rounded shadow px-5 py-3">
                <form method="POST" action="create_attest.php" >
                    <fieldset style="padding: 2">
                        <legend class='text-center'>Données de formulaire</legend>
                            <div class="md-form ">
                                <input type="text" id="nom" name="nom" class="form-control" required>
                                <label for="nom" class="pl-2 ">Votre nom</label>
                            </div>
                            <p class="ex" >(ex : Dupont)</p>
                            <div class="md-form mt-4">
                                <input type="text" id="prenom" name="prenom" class="form-control" required>
                                <label for="prenom">Votre prénom</label>
                            </div>
                            <p class="ex">(ex : Jean)</p>
                            <div class="md-form mt-4">
                                <input type="text" id="adresse" name="adresse" class="form-control" required>
                                <label for="adresse">Votre adresse</label>
                            </div>
                            <p class="ex">(ex : 12 rue droite)</p>
                            <div class="md-form mt-4">
                                <input type="text" id="code_postal" name="code_postal" class="form-control" required>
                                <label for="code_postal">Votre Code Postal</label>
                            </div>
                            <p class="ex">(ex : 13210)</p>
                            <div class="md-form mt-4">
                                <input type="text" id="lieu" name="lieu" class="form-control" required>
                                <label for="lieu">Votre Ville de résidence</label>
                            </div>
                            <p class="ex">(ex : Marseille)</p>
                            <div class="md-form mt-4">
                                <input type="text" id="date_naissance" name="date_naissance" class="form-control" required>
                                <label for="date_naissance">Votre Date de naissance</label>
                            </div>
                            <p class="ex">(ex : 12/05/1998)</p>
                            <div class="md-form mt-4">
                                <input type="text" id="lieu_naissance" name="lieu_naissance" class="form-control" required>
                                <label for="lieu_naissance">Votre Lieu de naissance</label>
                            </div>
                            <p class="ex">(ex : Lyon)</p>
                            <div class="mt-4">
                                <p>Votre Motif : </p><br>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <input type="radio" name="motif" id="motif" value="travail" ><label class="motiv">Travail</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="radio" name="motif" id="motif" checked  value="sante"><label class="motiv">Santé</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="radio" name="motif" id="motif" value="famille"><label class="motiv">Famille</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="radio" name="motif" id="motif" value="handicap"><label class="motiv">Handicap</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="radio" name="motif" id="motif" value="convocation"><label class="motiv">Convocation</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="radio" name="motif" id="motif" value="missions"><label class="motiv">Missions</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="radio" name="motif" id="motif" value="transit"><label class="motiv">Transit</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="radio" name="motif" id="motif" value="animaux"><label class="motiv">Animaux</label>
                                    </div>
                                </div>
                            </div>
                            
                    </fieldset>
                    <div class="row justify-content-center">
                        <input type="submit" value="Envoyer" name="sumbit" id="envoyer" class="mr-5 mt-5 btn btn-primary" name="B1">
                        <input type="reset" value="Rétablir" id="retablir" class="ml-5 mt-5 btn btn-warning" name="B2">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
