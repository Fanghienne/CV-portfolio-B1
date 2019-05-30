<?php
try
{
    $bdd = new PDO('pgsql:host=localhost;dbname=Portfolio', 'postgres', 'LindseyStirling', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
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
          <a class="nav-link js-scroll-trigger" href="#about">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">Expériences</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Formations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Compétences</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#projet">Projets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#interests">Centres d'intérêts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="contact.php">Contactez-moi</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0"><?=$row7['nom_profil']?>
          <span class="text-primary"><?php echo $_POST['prénom'];?></span>
        </h1>
        <div class="subheading mb-5"><?php echo $_POST['rue'];?> · <?php echo $_POST['postale'];?> · <?php echo $_POST['phone'];?> ·
          <a href="mailto:auriane.labille@ynov.com"><?php echo $_POST['mail'];?></a>
        </div>
          <div>
            <p class="lead mb-5"><?php echo $_POST['présentation'];?></p>
          </div>
        <div class="social-icons">
          <a href="https://www.linkedin.com/in/auriane-labille-636198176/" target="_blank">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="https://github.com/Fanghienne" target="_blank">
            <i class="fab fa-github"></i>
          </a>
          <a href="https://twitter.com/Auriane_lbll" target="_blank">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://www.facebook.com/auriane.labille" target="_blank">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </section>


    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Expériences</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo $_POST['poste'];?></h3>
            <div class="subheading mb-3"><?php echo $_POST['lieu'];?></div>
            <p><?php echo $_POST['emploi'];?></p>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo $_POST['début'];?> - <?php echo $_POST['fin'];?></span>
          </div>
        </div>
      </div>
    </section>


    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="mb-5">Formations</h2>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo $_POST['school'];?></h3>
            <div class="subheading mb-3"><?php echo $_POST['diplôme'];?></div>
            <div><?php echo $_POST['formation'];?></div>
          </div>
          <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo $_POST['début1'];?> - <?php echo $_POST['fin1'];?></span>
          </div>
        </div>
      </div>
    </section>


    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">Compétences</h2>

        <div class="subheading mb-3">Langages de programmation &amp; outils</div>
        <ul class="list-inline dev-icons">
          <li class="list-inline-item">
            <i class="fab fa-html5"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-css3-alt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-js-square"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-wordpress"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-python"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-java"></i>
          </li>
        </ul>

        <div class="subheading mb-3">Soft skills</div>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-check"></i>
            <?php echo $_POST['soft'];?></li>
        </ul>
      </div>
    </section>
      

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="projet">
      <div class="w-100">
        <h2 class="mb-5">Projets / Réalisations</h2>
          
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
              <div class="resume-content">
                  <h3 class="mb-0">Projet <?php echo $_POST['projet'];?></h3>
                  <div class="subheading mb-3"><?php echo $_POST['lieu1'];?></div>
                  <p><?php echo $_POST['description'];?></p>
              </div>
              <div class="resume-date text-md-right">
                  <span class="text-primary"><?php echo $_POST['début2'];?> - <?php echo $_POST['fin2'];?></span>
              </div>
          </div>  
      </div>
    </section>


    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
      <div class="w-100">
        <h2 class="mb-5">Centres d'intérêts</h2>
          <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
              <div class="resume-content">
                  <h3 class="mb-0"><?php echo $_POST['domaine'];?></h3>
                  <div class="subheading mb-3"><?php echo $_POST['lieu2'];?></div>
                  <p><?php echo $_POST['loisir'];?></p>
              </div>
              <div class="resume-date text-md-right">
                  <span class="text-primary"><?php echo $_POST['début3'];?> - <?php echo $_POST['fin3'];?></span>
              </div>
          </div>
      </div>
    </section>


    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
          <h2 class="mb-0">Contactez-moi</h2>
          <div class="subheading mb-5">16 Boulevard du Tertre · 44800, Saint Herblain · 07 89 69 65 26 ·
              <a href="mailto:auriane.labille@ynov.com">auriane.labille@ynov.com</a>
          </div>
          
          <form method="POST" action="mailto:auriane.labille@gmail.com" accept-charset="utf-8">
            
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
				<input id="nom" type="text" name="nom" placeholder="Nom & prénom"/>
            </div>
              
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
				<input id="phone" type="text" name="prenom" placeholder="Numéro de téléphone"/>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-3">
                <input id="mail" type="email" name="mail" placeholder="E-mail"/>
            </div>

            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <textarea id="text" name="text" placeholder="Votre message..." rows="5" cols="50"></textarea>
            </div>
            
            <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                <input id="button" type="submit" value="Envoyer" />
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
</html>