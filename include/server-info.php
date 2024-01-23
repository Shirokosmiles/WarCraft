<?php
        $connectChar = new mysqli($host, $login, $pass, $bd_char);
        $connectAuth = new mysqli($host, $login, $pass, $bd_auth);
        $connectChar->query("SET NAMES `utf8` COLLATE `utf8_general_ci`");
        $connectAuth->query("SET NAMES `utf8` COLLATE `utf8_general_ci`");

        if ($connectChar->connect_error || $connectChar->connect_error) {
          echo "Ошибка подключения к базе данных";
        } else {
          $status = @fsockopen($host, $port, $login, $pass, .5) ? true : false;
          if ($status) {
            $state = "<span class=\"online\">работает.</span>";
          } else {
            $state = "<span class=\"offline\">не работает.</span>";
          }

          $sql = "SELECT max(`maxplayers`) AS `maxonline` FROM `uptime`";
          $maxOnline = mysqli_fetch_assoc($connectAuth->query($sql));

          $sql = "SELECT COUNT(*) AS `horde` FROM `characters` WHERE `race` IN (2, 5, 6, 8, 10)";
          $all_horde = mysqli_fetch_assoc($connectChar->query($sql));

          $sql = "SELECT COUNT(*) AS `alliance` FROM `characters` WHERE `race` IN (1, 3, 4, 7, 11)";
          $all_alliance = mysqli_fetch_assoc($connectChar->query($sql));

          $sql = "SELECT COUNT(*) AS `acc_count` FROM `account`";
          $acc_count = mysqli_fetch_assoc($connectAuth->query($sql));

           ?>
<?php
          $sql = "SELECT COUNT(*) AS `cur_online` FROM `characters` WHERE `online` = 1  AND NOT `extra_flags` > 16 ";
          $cur_online = mysqli_fetch_assoc($connectChar->query($sql));

          $sql = "SELECT COUNT(*) AS `horde_online` FROM `characters` WHERE `online` = 1 AND `race` IN (2, 5, 6, 8, 10) AND NOT `extra_flags` > 16 ";
          $horde_online = mysqli_fetch_assoc($connectChar->query($sql));

          $sql = "SELECT COUNT(*) AS `alliance_online` FROM `characters` WHERE `online` = 1 AND `race` IN (1, 3, 4, 7, 11) AND NOT `extra_flags` > 16 ";
          $alliance_online = mysqli_fetch_assoc($connectChar->query($sql));

          ?>
           <div class='server-section-slider-for-item-info-line-online'>
                                <div class='server-section-slider-for-item-info-line-online-count'>
                                    <img src='../template/indra/images/online-count.png' alt=''>
                                    <?php echo $cur_online["cur_online"]; ?>
                                </div>
                                <?php echo  $state; ?>
                               </div>
<?php } ?>



<?php
$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$webdb");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realms where id = 1 and version = 'lich'";
if($result = mysqli_query($conn, $sql))

{
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
            echo "              
                  <div class='server-section-slider-for-item-info-line-title'>
                                $row[name] <span>$row[version]</span></div>
                        <br />
                        <br />
                        <br />
                        <br />
                        <div class='server-section-slider-for-item-text'>
                            $row[description]
                        </div>
                        <div class='server-section-slider-for-item-specifics'>
                            <div>Опыт:<span> $row[rate]</span></div>
                            <div>Профессии:<span> $row[proffesion]</span></div>
                            <div>Золото:<span> $row[gold]</span></div>
                            <div>Репутация:<span> $row[rep]</span></div>
                            <div>Добыча:<span> $row[loot]</span></div>
                            <div>Очки чести:<span> $row[honor]</span></div>
                        </div>
                        </div>
                  
              ";
                }
    $result->free();
} 
else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?> 