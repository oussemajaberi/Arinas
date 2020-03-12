<?php $OPdo = new PDO('mysql:host=localhost;dbname=Arinas','root','');
$pdoS = $OPdo ->prepare('SELECT * FROM articles');
$excucteIsOk = $pdoS->excecute();
$articles = $pdoS->fetchAll();?>
<?php include('includes/header.php'); ?>


  <div class="image_blog" >
   <div class="msg_blog text-light">
     <h1 style="font-family:cav">Bienvenue dans Arinas<br> blog
     votre source<br>pour découvrir le monde <br>biocosmétiques</h1>
   </div>
  </div>
  
  <div class="container">
  <?php foreach ($articles as $article)?>

    <h2 class="titre_article">  <?= $aricles['titre']?></h2>
    <div class="row articlee">
      <div class="col-6"  data-aos="fade-right">
        <img src="<?= $articles['image']?>" height="340px">
      </div>

      <div class="col-6" style=margin-top:80px  data-aos="fade-left">
       <p>
       <?= $articles['contenu']?>
          
       </p>

       <button class="btn btn-outline-success" >Lire la suite</button>
        
      </div>
    </div>


  </div>

<?php include('includes/footer.php'); ?>