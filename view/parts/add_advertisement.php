<div class="container">
    <div class="row">
        <div class="col-md-4">
            <ul class="list-group select-categories">
                <?php
                foreach ($categoryList as $key =>$item):?>
                <li class="list-group-item" data-id="<?php echo ($item['id'])?>"><?php echo($item['name']) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div id="blablabla" class="col-md-4">

        </div>
    </div>

    <script>
    </script>
    <div class="container  col-sm-4">
        <form method="post" action="index.php">

            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label for="formGroupExampleInput">Password</label>
                        <textarea  ></textarea>
                    </div>
                </div>
            </div>
            <input type="submit" name="add_advertisement" class="btn btn-primary" value="Сохранить">
        </form>
    </div>
</div>
<?php

for ( $i=1; $i<250; $i++){
    echo ' '.$i.' ';

}
?>




