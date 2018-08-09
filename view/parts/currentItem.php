<section>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="row product">
                                    <img  src="<?php echo $item['image']; ?>" alt="" />
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="product-information"><!--/product-information-->
                                    <img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
                                    <h2><?php echo $item['category'];?></h2>
                                    <span>US $<?php echo $item['price'];?></span>

                                 </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5>Описание товара</h5>
                                    <?php echo $item['description'];?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


<style>
    .row.product img {
        height: 150px;
        width: 300px
    }
</style>