
    <!-- ##### Gallery Area Start ##### -->
    <section class="our-hotels-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <div class="line-"></div>
                        <h2>Our Gallery</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Hotel Info -->
                <?php 
                $getall = getAllgalleryImages();
                while($row=mysqli_fetch_assoc($getall)){
                    $img = $row['gallery_image'];
                    $img_src = "server/uploads/gallery/".$img;?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-hotel-info mb-100">
               
                        <div class="hotel-img">
                            <img src="<?php echo $img_src; ?>" alt="">
                        </div>
                    </div>
                </div>
                <?php } ?>
               
            </div>
        </div>
    </section>
    <!-- ##### Gallery Area End ##### -->
