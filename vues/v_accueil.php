 <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="img/jeux.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Divertissez <span class="primary"><strong>Vous</strong></span>
							</h2>
							<h4 class="caption subtitle">Jeux video & consoles</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Rechercher</a>
						</div>
					</li>
					<li><img src="img/telephonie.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Un nouveau portable <span class="primary"><strong>?</strong></span>
							</h2>
							<h4 class="caption subtitle">Telephonie</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Rechercher</a>
						</div>
					</li>
					<li><img src="img/electromenager.png" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Que manque t'il <span class="primary"><strong>Chez vous</strong></span> ?
							</h2>
							<h4 class="caption subtitle">Électroménager</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Rechercher</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <img src="img/pub.png" alt="pub" width="90%" height="100%">
                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="img/pub.png" alt="pub" width="90%" height="100%">
                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="img/pub.png" alt="pub" width="90%" height="100%">
                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="img/pub.png" alt="pub" width="90%" height="100%">
                </div>
<!--            <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
-->
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div> 
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Derniers Produits</h2>
                        <div class="product-carousel" >
                            <?php 
                             $u=0;
                            foreach($data as $d)
                            {

                                if($u<7){
                                $d['idoffre'];
                                $z = $d['idoffre'];
                              ?> 
                                <div class="single-product" >
                                    <div class="product-f-image">

                                        <?php echo "<img src='".$d['image']."' width='195' height='243' />";?>
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"> Troquer</a>
                                            <a href="index.php?uc=ctrlTroc&action=offredetails&idoffre=<?php echo $d['idoffre'];?>" class="view-details-link"><i class="fa fa-link"></i> Détail</a>
                                        </div>
                                    </div>

                                    <h2><?php echo $d['libelleOffre'];?></h2>
                                </div>
                                <?php }
                                $u++;
                            }
                             ?> 
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->