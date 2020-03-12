<?php $objetPdo = new PDO('mysql:host=localhost;dbname=Arinas','root','');
$pdoStart = $objetPdo ->prepare('SELECT * FROM produits');
$excucteIsOk = $pdoStart->excecute();
$produits = $pdoStart->fetchAll();?>
<?php include('includes/header.php'); ?>
<div class="all-pg">
 <div class="container produit_pg">
   <h2 class="">Product</h2>
   <hr>
   <?php foreach ($produits as $produit)?>
   <div class="filter mb-5"><i class="fas fa-filter"></i></div>
   <div class="row mb-5">
       <div class="col  mb-5" style="text-align:center" >
         
       <a href="details_produit.php?id>=<?= $produit['id']?>">
               <img src= "<?= $produits['image']?>" width="60rem" class="img-fluid">
               <h5 class="mt-3 mb-2"><?= $produits['name']?></h5>
            </a>
           <p><?= $produits['prix']?></p>
        </a>
       </div>

     
   </div>
 </div>
</div>
<?php include('includes/footer.php'); ?>