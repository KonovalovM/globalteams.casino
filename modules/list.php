<?php
    $sth = $pdo->prepare("SELECT * FROM lists");

    $sth->setFetchMode(\PDO::FETCH_ASSOC);
    $sth->execute();
    $lists = $sth->fetchAll();

    foreach ($lists as $list):
?>
        <div class="list flex">
            <div class="flag"><?php echo $list["flag"];?></div>
        <li>
            <img src='<?php echo $list["logo"];?>'>
        </li>
        <li>
            <h1 class="name"><?php echo $list["name"];?></h1>
            <p><?php echo $list["welcome_bonus_1"];?></p>
            <h2><?php echo $list["welcome_bonus_2"];?></h2>
            <p><?php echo $list["welcome_bonus_3"];?></p>
            <p><?php echo $list["welcome_bonus_4"];?></p>
        </li>
        <li class="user_rating_li">
            <p class="user_rating">Rating(<?php echo $list["user_rating"];?>)</p>
            <p class="rating_stars"></p>
        </li>
        <li class="rating" ><h1><?php echo $list["rating"];?></h1></li>

        <li class="buttom_li">
            <form class="form" action="../modules/add_info.php" method="post">
                <input type="hidden" name="button_id" value="<?php echo $list["id"];?>" name="button"/>
                <button type="submit" class="button">Play</button>
            </form>
        </li>
        </div>

        <?php
    endforeach;

