<script src="view/assets/js/jquery-3.3.1.min.js"></script>
<script src="view/assets/js/popper.min.js" type="script"></script>
<script src="view/assets/js/bootstrap/bootstrap.js" type="script"></script>
<script src="view/assets/js/bootstrap/bootstrap.bundle.js"></script>

<script>
    $('.select-categories li').click(function(){
        var cat_id = $(this).attr("data-id");
        console.log(cat_id);

        $.ajax({
            type: "POST",
            url: "ajax.php",
            dataType: "json",
            data: {
                category_id : cat_id
            },
            success: function (res) {
                console.log(res);
            }
        });

        // $.ajax({
        //     type: "POST",
        //     url: "/index.php",
        //     data: {
        //         category_id : cat_id
        //     },
        //     success: function (res) {
        //         console.log(res);
        //     }
        // });

    });
</script>
<script>
    $(function{
        $('#news').load("ajax/news.html");
    });
</script>
<script>
    $(#blablabla).html(<ul class="list-group select-categories">
        <?php
        foreach ($categoryList as $key =>$item):?>
        <li class="list-group-item" data-id="<?php echo ($item['id'])?>"><?php echo($item['name']) ?></li>
        <?php endforeach; ?>
        </ul>);
</script>


