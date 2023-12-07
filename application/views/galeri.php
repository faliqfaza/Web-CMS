    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
    	style="background-image: url(<?= base_url('assets/pato/'); ?>images/background-galeri.jpeg);">
    	<h2 class="tit6 t-center">
    		Galeri
    	</h2>
    </section>



    <!-- Gallery -->
    <div class="section-gallery p-t-118 p-b-100">

    	<div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">
    		<!-- - -->
            <?php foreach ($galeri as $ga){ ?>
    		<div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events guests">
    			<img src="<?= base_url('assets/upload/galeri/'.$ga['foto']) ?>" alt="">

    			<div class="overlay-item-gallery trans-0-4 flex-c-m">
    				<a class="btn-show-gallery flex-c-m fa fa-search" href="<?= base_url('assets/upload/galeri/'.$ga['foto']) ?>"
    					data-lightbox="gallery"></a>
    			</div>
    		</div>
            <?php } ?>
    	</div>
    </div>
