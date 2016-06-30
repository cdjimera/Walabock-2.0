        <div class="product-big-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-bit-title text-center">
                            <h2>Détails de l'offre</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    
                    
                    
                   <?php
                   foreach($complete as $c){ 
                       $c['idoffre']; 
                      $nomcategori= $c['libelleCat'];
                      $nomoffre = $c['libelleOffre'];
                   ?>
                    
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="index.php">Acceuil</a>
                            <a href="index.php?uc=ctrlTroc&action=listeoffre">Catégorie</a>
                            <a href="index.php?uc=ctrlTroc&action=voirlesoffres&categorie=<?php echo $nomcategori;?>"><?php echo $nomcategori ?></a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
							<h2 class="product-name">Offre</h2>
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <?php echo "<img src='".$c['image']."' >";?>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $c['libelleOffre'];?></h2>
                                    <div class="product-inner-price">
                                        <ins>d'une valeur de : <?php echo $c['valeur']; ?> euro </ins> 
                                    </div>    
                                    
                                    <form action="" class="cart">
                                        
                                        de la part de :<h2 class="product-name"><?php echo $c['login']; ?></h2>
                                    </form>   
                                    
                                    <div class="product-inner-category">
                                        <p>Category: <a href="index.php?uc=ctrlTroc&action=voirlesoffres&categorie=<?php echo $nomcategori;?>"><?php echo $c['libelleCat']; ?></a>. 
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2> Description</h2>  
                                                <p><?php echo $c['descriptif']; ?></p>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <?php
 }      
 ?>
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Produit Proposer</h2>
                            <div class="related-products-carousel">
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-1.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Sony Smart TV - 2015</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$700.00</ins> <del>$100.00</del>
                                    </div> 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-2.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                    <div class="product-carousel-price">
                                        <ins>$899.00</ins> <del>$999.00</del>
                                    </div> 
                                </div>
                                
                                
                                
                                                                   
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>