<<<<<<< HEAD
<?php
try
{
    $bdd = new PDO('pgsql:host=localhost; dbname=Portfolio', 'postgres', 'LindseyStirling', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
$sth1 = $bdd->query('SELECT * FROM admin.admin');
$row1 = $sth1->fetch(PDO::FETCH_ASSOC);

$sth2 = $bdd->query('SELECT * FROM admin.comp');
$row2 = $sth2->fetch(PDO::FETCH_ASSOC);

$sth3 = $bdd->query('SELECT * FROM admin.contact');
$row3 = $sth3->fetch(PDO::FETCH_ASSOC);

$sth4 = $bdd->query('SELECT * FROM admin.exp');
$row4 = $sth4->fetch(PDO::FETCH_ASSOC);

$sth5 = $bdd->query('SELECT * FROM admin.form');
$row5 = $sth5->fetch(PDO::FETCH_ASSOC);

$sth6 = $bdd->query('SELECT * FROM admin.interet');
$row6 = $sth6->fetch(PDO::FETCH_ASSOC);

$sth7 = $bdd->query('SELECT * FROM admin.profil');
$row7 = $sth7->fetch(PDO::FETCH_ASSOC);

$sth8 = $bdd->query('SELECT * FROM admin.projet');
$row8 = $sth8->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Actuellement étudiante en informatique âgée de 18 ans, je débute dans le monde du travail avec dynamisme.">
    <meta name="keywords" content="portfolio CV Auriane Labille étudiant étudiante informatique">
    <title>Auriane LABILLE</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Police d'écriture -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="fontawesome-free/css/all.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Auriane Labille</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="profile">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">Expériences</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">Formations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">Compétences</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">Projets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">Centres d'intérêts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="contact.php">Contactez-moi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="admin.php">Paramètres</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Paramètres</h2>
        
          <form method="post" enctype="multipart/form-data" action="admin.php">
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
              <div class="resume-content">
                <h3 class="mb-5">Présentation simple</h3>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="file" accept="image/*"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="text" name="nom" placeholder="Nom & prénom"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="text" name="rue" placeholder="Rue"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="text" name="postale" placeholder="Code postale & ville"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="text" name="phone" placeholder="Téléphone"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="text" name="mail" placeholder="Adresse mail"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <textarea id="text" name="présentation" placeholder="Entrez une description..." rows="5" cols="50"></textarea>
                </div>
                
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <input type="submit" value="Envoyer"/>
                </div>
              </div>
            </div>
          
          
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
              <div class="resume-content">
                <h3 class="mb-5">Présentation détaillée</h3>
                  
                <div class="subheading mb-3">Expériences professionnelles</div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="poste" placeholder="Poste"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="lieu" placeholder="Lieu"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="début" placeholder="Date de début"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="fin" placeholder="Date de fin"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <textarea id="text" name="emploi" placeholder="Entrez une description..." rows="5" cols="50"></textarea>
                </div>
                  
                <div class="subheading mb-3">Parcours scolaire</div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="school" placeholder="École"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="diplôme" placeholder="Formation"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="début1" placeholder="Date de début"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="fin1" placeholder="Date de fin"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <textarea id="text" name="formation" placeholder="Entrez une description..." rows="5" cols="50"></textarea>
                </div>
                  
                <div class="subheading mb-3">Compétences</div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="soft" placeholder="Soft skill"/>
                </div>
                  
                <div class="subheading mb-3">Centres d'intérêts</div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="domaine" placeholder="Domaine"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="lieu2" placeholder="Lieu"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="début3" placeholder="Date de début"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="fin3" placeholder="Date de fin"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <textarea id="text" name="loisir" placeholder="Entrez une description..." rows="5" cols="50"></textarea>
                </div>
                  
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <input type="submit" value="Envoyer"/>
                </div>
              </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
              <div class="resume-content">
                <h3 class="mb-5">Réalisations / projets</h3>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="projet" placeholder="Nom du projet"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="lieu1" placeholder="Lieu"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="début2" placeholder="Date de début"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="fin2" placeholder="Date de fin"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <textarea id="text" name="description" placeholder="Entrez une description..." rows="5" cols="50"></textarea>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <input type="submit" value="Envoyer"/>
                </div>
              </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
              <div class="resume-content">
                <h3 class="mb-5">Page de contact</h3>
                <div class="subheading mb-3">Textes</div>
                  <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <input type="texte" placeholder="Coordonnées"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <input type="submit" value="Envoyer"/>
                </div>
                <div class="subheading mb-3">Messages</div>
                  <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <p>Nom : </p>
                    <p><?php echo $_POST['nom'];?></p>
                </div>
                  <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <p>Prénom : </p>
                    <p><?php echo $_POST['prénom'];?></p>
                </div>
                  <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <div>
                        <p>Adresse mail : </p>
                        <p><?php echo $_POST['mail'];?></p>
                    </div>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <div>
                        <p>Numéro de téléphone : </p>
                        <p><?php echo $_POST['phone'];?></p>
                    </div>
                </div>
                
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <div>
                        <p>Message : </p>
                        <p><?php echo $_POST['text'];?></p>
                    </div>
                </div>
                
              </div>
            </div>
        </form>
      </div>

    </section>

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.bundle.js"></script>

  <!-- Plugin JavaScript -->
  <script src="js/jquery.easing.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/main.js"></script>
</body>
=======
<?php
try
{
    $bdd = new PDO('pgsql:host=localhost; dbname=Portfolio', 'postgres', 'LindseyStirling', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
$sth1 = $bdd->query('SELECT * FROM admin.admin');
$row1 = $sth1->fetch(PDO::FETCH_ASSOC);

$sth2 = $bdd->query('SELECT * FROM admin.comp');
$row2 = $sth2->fetch(PDO::FETCH_ASSOC);

$sth3 = $bdd->query('SELECT * FROM admin.contact');
$row3 = $sth3->fetch(PDO::FETCH_ASSOC);

$sth4 = $bdd->query('SELECT * FROM admin.exp');
$row4 = $sth4->fetch(PDO::FETCH_ASSOC);

$sth5 = $bdd->query('SELECT * FROM admin.form');
$row5 = $sth5->fetch(PDO::FETCH_ASSOC);

$sth6 = $bdd->query('SELECT * FROM admin.interet');
$row6 = $sth6->fetch(PDO::FETCH_ASSOC);

$sth7 = $bdd->query('SELECT * FROM admin.profil');
$row7 = $sth7->fetch(PDO::FETCH_ASSOC);

$sth8 = $bdd->query('SELECT * FROM admin.projet');
$row8 = $sth8->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Actuellement étudiante en informatique âgée de 18 ans, je débute dans le monde du travail avec dynamisme.">
    <meta name="keywords" content="portfolio CV Auriane Labille étudiant étudiante informatique">
    <title>Auriane LABILLE</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Police d'écriture -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
    <link href="fontawesome-free/css/all.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Auriane Labille</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="profile">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">Expériences</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">Formations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">Compétences</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">Projets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.php">Centres d'intérêts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="contact.php">Contactez-moi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="admin.php">Paramètres</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Paramètres</h2>
        
          <form method="post" enctype="multipart/form-data" action="admin.php">
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
              <div class="resume-content">
                <h3 class="mb-5">Présentation simple</h3>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="file" accept="image/*"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="text" name="nom" placeholder="Nom & prénom"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="text" name="rue" placeholder="Rue"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="text" name="postale" placeholder="Code postale & ville"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="text" name="phone" placeholder="Téléphone"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="text" name="mail" placeholder="Adresse mail"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <textarea id="text" name="présentation" placeholder="Entrez une description..." rows="5" cols="50"></textarea>
                </div>
                
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <input type="submit" value="Envoyer"/>
                </div>
              </div>
            </div>
          
          
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
              <div class="resume-content">
                <h3 class="mb-5">Présentation détaillée</h3>
                  
                <div class="subheading mb-3">Expériences professionnelles</div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="poste" placeholder="Poste"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="lieu" placeholder="Lieu"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="début" placeholder="Date de début"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="fin" placeholder="Date de fin"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <textarea id="text" name="emploi" placeholder="Entrez une description..." rows="5" cols="50"></textarea>
                </div>
                  
                <div class="subheading mb-3">Parcours scolaire</div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="school" placeholder="École"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="diplôme" placeholder="Formation"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="début1" placeholder="Date de début"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="fin1" placeholder="Date de fin"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <textarea id="text" name="formation" placeholder="Entrez une description..." rows="5" cols="50"></textarea>
                </div>
                  
                <div class="subheading mb-3">Compétences</div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="soft" placeholder="Soft skill"/>
                </div>
                  
                <div class="subheading mb-3">Centres d'intérêts</div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="domaine" placeholder="Domaine"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="lieu2" placeholder="Lieu"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="début3" placeholder="Date de début"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="fin3" placeholder="Date de fin"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <textarea id="text" name="loisir" placeholder="Entrez une description..." rows="5" cols="50"></textarea>
                </div>
                  
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <input type="submit" value="Envoyer"/>
                </div>
              </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
              <div class="resume-content">
                <h3 class="mb-5">Réalisations / projets</h3>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="projet" placeholder="Nom du projet"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="lieu1" placeholder="Lieu"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="début2" placeholder="Date de début"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <input type="texte" name="fin2" placeholder="Date de fin"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <textarea id="text" name="description" placeholder="Entrez une description..." rows="5" cols="50"></textarea>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <input type="submit" value="Envoyer"/>
                </div>
              </div>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
              <div class="resume-content">
                <h3 class="mb-5">Page de contact</h3>
                <div class="subheading mb-3">Textes</div>
                  <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <input type="texte" placeholder="Coordonnées"/>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <input type="submit" value="Envoyer"/>
                </div>
                <div class="subheading mb-3">Messages</div>
                  <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <p>Nom : </p>
                    <p><?php echo $_POST['nom'];?></p>
                </div>
                  <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <p>Prénom : </p>
                    <p><?php echo $_POST['prénom'];?></p>
                </div>
                  <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <div>
                        <p>Adresse mail : </p>
                        <p><?php echo $_POST['mail'];?></p>
                    </div>
                </div>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <div>
                        <p>Numéro de téléphone : </p>
                        <p><?php echo $_POST['phone'];?></p>
                    </div>
                </div>
                
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                    <div>
                        <p>Message : </p>
                        <p><?php echo $_POST['text'];?></p>
                    </div>
                </div>
                
              </div>
            </div>
        </form>
      </div>

    </section>

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.bundle.js"></script>

  <!-- Plugin JavaScript -->
  <script src="js/jquery.easing.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/main.js"></script>
</body>
>>>>>>> 5eb794bc3cedbb8598ab43b0c1a2a8809fe97ecd
</html>