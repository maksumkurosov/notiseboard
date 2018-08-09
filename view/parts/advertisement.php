<div class="container">
    <?php foreach ($info as $advertisement) :?>
        <div class="row product">
            <div class="col-md-2"><img src="<?=$advertisement['image'];?>"></div>
            <div class="col-md-8 content-product">
                <a href="?item=<?php echo $advertisement['id'] ?>" ><?=$advertisement['note'];?></a>
                <div class="data-product"><?='Опубліковано :' . $advertisement['data'];?></div>
            </div>
            <div class="col-md-2"><?=$advertisement['price'].'$ USA';?></div>
        </div>

    <?php endforeach; ?>
</div>

<style>
    .row.product {
        margin-bottom: 20px;
        margin-top: 10px;
        border: 3px solid black;
    }
        .row.product img {
            height: 100px;
            width: 200px
        }

    .content-product {
        padding-left: 60px;
    }

    .data-product {
        margin-top: 40px;
    }
</style>

