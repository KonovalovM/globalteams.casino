<?php
if (!isset ($_GET['sort'])){
    $sort = 'id';
} else {
    $sort = $_GET['sort'];
}

$sth = $pdo->prepare("SELECT id, date_time, user_ip, button_id, COUNT(*) as count_of_clicks FROM info GROUP by SUBSTR(date_time, 1, 4), SUBSTR(date_time, 7, 2), user_ip, button_id ORDER BY " . $sort . " ASC ");


$sth->setFetchMode(\PDO::FETCH_ASSOC);
$sth->execute();
$lists = $sth->fetchAll();

foreach ($lists as $list):
    ?>
    <div class="info flex">
        <p><?php echo substr($list["date_time"], 0, 4);?>
        <p><?php echo substr($list["date_time"], 5, 2);?>
        <p><?php echo $list["user_ip"];?></p>
        <p><?php echo $list["button_id"];?></p>
        <p><?php echo $list["count_of_clicks"];?></p>
    </div>
    </div>

<?php
endforeach;

