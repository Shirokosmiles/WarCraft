

<?php
$conn = mysqli_connect("$host", "$login", "$pass", "$bd_forum");

if (!$conn) {
die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM xf_thread ORDER BY thread_id DESC LIMIT 5";

if($result = mysqli_query($conn, $sql)){

$rowsCount = mysqli_num_rows($result);
foreach($result as $row){


echo "";
?>


                                <div class="header__server-item-online-item">
<a href="http://<?=$settings['forum']; ?>/threads/<?php echo"$row[title]"; ?>.<?php echo"$row[thread_id]"; ?>" class="forums-list__link">
                            <div class="header__server-item-online">
                                <div>
                                    <div class="header__server-item-online-item">
                                        Автор: <span><?php echo"$row[last_post_username]"; ?></span>
                                    </div>
                                    <div class="header__server-item-online-item">
                                        <?php echo"$row[title]"; ?>: <span><?php $timestamp = $row['last_post_date'];
echo(date("d.m.Y H:i:s", $timestamp));?></span>
                                    </div>
                                </div>
                            </div>
</div>
<?php
}
mysqli_free_result($result);
} else{
echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>