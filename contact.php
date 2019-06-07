<<<<<<< HEAD
<?php
try
{
    $bdd = new PDO('pgsql:host=localhost;dbname=Portfolio', 'postgres', 'LindseyStirling', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
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
      </ul>
    </div>
  </nav>
    
  <div class="container-fluid p-0">


    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
          <h2 class="mb-0">Contactez-moi</h2>
          <div class="subheading mb-5">16 Boulevard du Tertre · 44800, Saint Herblain · 07 89 69 65 26 ·
              <a href="mailto:auriane.labille@ynov.com">auriane.labille@ynov.com</a>
          </div>
          
          <form method="POST" action="admin.php" accept-charset="utf-8">
            
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
				<input id="nom" type="text" name="nom" placeholder="Nom"/>
            </div>
              
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
				<input id="nom" type="text" name="prénom" placeholder="Prénom"/>
            </div>
              
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
				<input id="phone" type="text" name="phone" placeholder="Numéro de téléphone"/>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                <input id="mail" type="email" name="mail" placeholder="E-mail"/>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <textarea id="text" name="text" placeholder="Votre message..." rows="5" cols="50"></textarea>
            </div>
            
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <input type="submit" value="Envoyer" />
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
    $bdd = new PDO('pgsql:host=localhost;dbname=Portfolio', 'postgres', 'LindseyStirling', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
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
      </ul>
    </div>
  </nav>
    
  <div class="container-fluid p-0">


    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
          <h2 class="mb-0">Contactez-moi</h2>
          <div class="subheading mb-5">16 Boulevard du Tertre · 44800, Saint Herblain · 07 89 69 65 26 ·
              <a href="mailto:auriane.labille@ynov.com">auriane.labille@ynov.com</a>
          </div>
          
          <form method="POST" action="admin.php" accept-charset="utf-8">
            
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
				<input id="nom" type="text" name="nom" placeholder="Nom"/>
            </div>
              
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
				<input id="nom" type="text" name="prénom" placeholder="Prénom"/>
            </div>
              
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
				<input id="phone" type="text" name="phone" placeholder="Numéro de téléphone"/>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                <input id="mail" type="email" name="mail" placeholder="E-mail"/>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <textarea id="text" name="text" placeholder="Votre message..." rows="5" cols="50"></textarea>
            </div>
            
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <input type="submit" value="Envoyer" />
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