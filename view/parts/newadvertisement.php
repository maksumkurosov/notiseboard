<script>
    $(".dropdown-menu li a").click(function(){

        $(".btn:first-child").html($(this).text()+' <span class="caret"></span>');

    });
</script>
<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
<div class="btn-group">
    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
        Dropdown <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li><a href="#">Choice1</a></li>
        <li><a href="#">Choice2</a></li>
        <li><a href="#">Choice3</a></li>
        <li class="divider"></li>
        <li><a href="#">Choice..</a></li>
    </ul>
</div>
<div class="container col-sm-4">
    <form method="post" action="index.php">

<!--        <div class="form-group">-->
<!--            <label for="formGroupExampleInput">Оберіть категорію</label>-->
<!--            <div class="dropdown">-->
<!--                <button class="btn btn-secondary dropdown-toggle" name="choice_category" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                    Dropdown button-->
<!--                </button>-->
<!--                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">-->
<!--                    --><?php
//                    foreach ($categoryList as $key => $item) :?>
<!--                        <a class="dropdown-item" >--><?php //print_r($item['name']) ;?><!--</a>-->
<!--                    --><?php //endforeach; ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

        <div class="form-group">
            <label for="formGroupExampleInput">Password</label>
            <textarea  ></textarea>
<!--            <input type="password" name="password" class="form-control" id="formGroupExampleInput">-->
        </div>
        <input type="submit" name="form_registration" class="btn btn-primary" value="Сохранить">
    </form>
</div>
