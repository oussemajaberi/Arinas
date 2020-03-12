<?php $objetPdo = new PDO('mysql:host=localhost;dbname=Arinas','root','');
$pdoStart = $objetPdo ->prepare('SELECT * FROM produits WHERE id = ?');
$pdoStart->excecute([$_GET['id']]);
$produits = $pdoStart->fetchAll();
var_dump($_GET);?>
<?php include('includes/header.php'); ?>

<div class="container d-flex justify-content-center my-5">
 <div class="pr_details" style="margin:70px 0 200px;">
     <div class="col">
         <img src="<? $produits['image']?>" width=120rem>
     </div>

     <div class="col">
         <p class="pr_arinas">produit Arinas</p>
         <h2 class="pr_arinas_name"><?=$produits['name']?></h2>
         <h2 style="font-weight:300"><?= $produits['prix'] ?> <span style="font-weight:300;">DT</span></h2>
         <p>
         <?= $produits['description']?>
         
         </p>
         <h6 class="pr_arinas_qt" style="display:inline;">Quantité :</h6>
             <span class="pr_arinas_qt_span mx-4"> 1</span>
             <a href="formulaire_info.php" style="text-decoration:none"><span class="pr_arinas_qt_add" >Commander </span></a>
        
        <hr>
        <p>Ingredient <span>+</span></p>
        <hr><br>
        
        <hr>
     </div>
    
 </div>
</div>
<?php include('includes/footer.php'); ?>