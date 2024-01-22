<!-- топ убийц -->
<section class="main-rating">
                <div class="content-area">
                    <div class="main-rating__switch">
                        <div class="main-rating__switch-item active" data-open-tab="online" style="cursor: pointer;">
                            <span>Онлайн</span>
                        </div>
                        <div class="main-rating__switch-item" data-open-tab="guild" style="cursor: pointer;">
                            <span>Гильдии</span>
                        </div>
                        <div class="main-rating__switch-item" data-open-tab="vip" style="cursor: pointer;">
                            <span>V.I.P Аккаунты</span>
                        </div>
                      <div class="main-rating__switch-item" data-open-tab="exp" style="cursor: pointer;">
                            <span>Время игры</span>
                        </div>
                        
                        <div class="main-rating__switch-item" data-open-tab="clans" style="cursor: pointer;">
                            <span>Квесты</span>
                        </div> 
                        <div class="main-rating__switch-item" data-open-tab="clans" style="cursor: pointer;">
                            <span>Достижения</span>
                        </div> 
                        <div class="main-rating__switch-item" data-open-tab="clans" style="cursor: pointer;">
                            <span>Аукцион</span>
                        </div> 
                        <div class="main-rating__switch-item" data-open-tab="castles" style="cursor: pointer;">
                            <span>Заблокированные</span>
                        </div>
                    </div>
                    <div class="main-rating__content">
                        <div class="main-rating__content-tab active" data-name-tab="online">
                            <div class="main-rating__table">
                                <div class="main-rating__table-row main-rating__table-row--header">
                        <div class="main-rating__table-col num"><span>№</span></div>
                        <div class="main-rating__table-col name"><span>Имя</span></div>
                        <div class="main-rating__table-col name"><span>Раса</span></div>
                        <div class="main-rating__table-col name"><span>Класс</span></div>
                        <div class="main-rating__table-col level hidable"><span>Уровень</span></div>
                        <div class="main-rating__table-col level hidable"><span>Фр.</span></div>
                        <div class="main-rating__table-col name"><span>Убийств</span></div>
                        <div class="main-rating__table-col name"><span>Арена</span></div>
                        <div class="main-rating__table-col name"><span>Хонор</span></div>
                        <div class="main-rating__table-col pvp active"><span>Золото</span></div>
                        <div class="main-rating__table-col pvp active"><span>В Игре</span></div>
                    </div>
<?php
              $sql = "SELECT `name`, `race`, `level`, `class`, `guid`, `money`, `totaltime`, `arenaPoints`, `totalHonorPoints`, `totalKills` FROM `characters` WHERE `online` = 1  AND NOT `extra_flags` > 16  ORDER BY `level` DESC LIMIT 10";
              $res  = $connectChar->query($sql);
              $arrColorsClass = [
              ["Нет класса", "red"],
              ["Воин", "warrior"],
              ["Паладин", "paladin"],
              ["Охотник", "hunter"],
              ["Разбойник", "rogue"],
              ["Жрец", "priest"],
              ["Рыцарь смерти", "dk"],
              ["Шаман", "shaman"],
              ["Маг", "mage"],
              ["Чернокнижник", "warlock"],
              ["Друид", "druid"],
              ["Друид", "druid"]
    ];


if ($data['class'] == 1){
        $class = 'Воин';
        $style_class = '#C79C6E';
    }
    if ($data['class'] == 2){
        $class = 'Паладин';
        $style_class = '#F58CBA';
    }
    if ($data['class'] == 3){
        $class = 'Охотник';
        $style_class = '#ABD473';
    }
    if ($data['class'] == 4){
        $class = 'Разбойник';
        $style_class = '#FFF569';
    }
    if ($data['class'] == 5){
        $class = 'Жрец';
        $style_class = '#FFFFFF';
    }
    if ($data['class'] == 6){
        $class = 'Рыцарь смерти';
        $style_class = '#C41F3B';
    }
    if ($data['class'] == 7){
        $class = 'Шаман';
        $style_class = '#0070DE';
    }
    if ($data['class'] == 8){
        $class = 'Маг';
        $style_class = '#69CCF0';
    }
    if ($data['class'] == 9){
        $class = 'Чернокнижник';
        $style_class = '#9482C9';
    }
    if ($data['class'] == 11){
        $class = 'Друид';
        $style_class = '#FF7D0A';
    }

    $money = $data['money'];
    $gold = (int)($money / 10000);
    $total = $money - ($gold * 10000);
    $silver = (int)($total / 100);
    $cooper = $total - ($silver * 100);

while ($data =  $res->fetch_assoc()) {
                  if ($data["race"] == "1" || $data["race"] == "3" || $data["race"] == "4" || $data["race"] == "7" || $data["race"] == "11") {
                    $faction_src = "template/indra/images/alliance.png";
                  } else {
                    $faction_src = "template/indra/images/horde.png";
                  }
              ?>  

<div class="main-rating__table-row">
        <div class="main-rating__table-col num"><span><?php echo $data["guid"]; ?></span></div>
        <div class="main-rating__table-col name"><span><?php echo $data["name"]; ?></span></div>
        <div class="main-rating__table-col level hidable"><span><img src="<?php echo  $race; ?>" alt="Расса" width="25px" heidht="25px"></span></div>
        <div class="main-rating__table-col"><span class="$style_class"><?php echo $arrColorsClass[$data["class"]][0]; ?></span></div>
        <div class="main-rating__table-col pvp active"><span><?php echo $data["level"] ?></span></div>
        <div class="main-rating__table-col hidable"><span><img src="<?php echo  $faction_src; ?>" alt="Расса" width="25px" heidht="25px"></span></div>
        <div class="main-rating__table-col num"><span><?php echo $data["totalKills"] ?></span></div>
        <div class="main-rating__table-col name"><span><?php echo $data["arenaPoints"] ?></span></div>
        <div class="main-rating__table-col level hidable"><span><?php echo $data["totalHonorPoints"] ?></span></div>
        <div class="main-rating__table-col pvp"><span><font color="gold"><?php echo  $gold; ?> г.</font> <font color="silver"><?php echo  $silver; ?> с.</font> <font color="coral"><?php echo  $cooper; ?> м.</font></span></div>
        <div class="main-rating__table-col hidable"><span><?php echo $data["totaltime"] ?></span></div>
        </div>
<?php } ?>  
                            </div>
                        </div>

                        <div class="main-rating__content-tab" data-name-tab="pvp">
                            <div class="main-rating__table">
                                <div class="main-rating__table-row main-rating__table-row--header">
                        <div class="main-rating__table-col num"><span>№</span></div>
                        <div class="main-rating__table-col name"><span>Character</span></div>
                        <div class="main-rating__table-col level hidable"><span>Level</span></div>
                        <div class="main-rating__table-col clan hidable"><span>Clan</span></div>
                        <div class="main-rating__table-col pvp active"><span>PVP</span></div>
                    </div>
                                <div class="main-rating__table-row main-rating__table-row--header">
                                  <!--  <div class="main-rating__table-col num">
                                        <span>Ранг</span>
                                    </div>
                                    <div class="main-rating__table-col name">
                                        <span>Персонаж</span>
                                    </div>
                                    <div class="main-rating__table-col level hidable">
                                        <span>Уровень</span>
                                    </div>
                                    <div class="main-rating__table-col clan hidable">
                                        <span>Гильдия</span>
                                    </div>
                                    <div class="main-rating__table-col pvp active">
                                        <span>PvP-убийств</span>
                                    </div>-->
                                   <!-- <div class="main-rating__table-col hidable">
                                        <span>Золота</span>
                                    </div> -->
                                </div>
                                
        <div class="main-rating__table-row">
        <div class="main-rating__table-col num"><span></span></div>
        <div class="main-rating__table-col name"><span></span></div>
        <div class="main-rating__table-col level hidable"><span></span></div>
        <div class="main-rating__table-col clan hidable"><span></span></div>
        <div class="main-rating__table-col pvp active"><span></span></div>
        <div class="main-rating__table-col hidable"><span></span></div>
        </div>
    
                            </div>
                        </div>

                        <div class="main-rating__content-tab" data-name-tab="guild">
                            <div class="main-rating__table">
                                <div class="main-rating__table-row main-rating__table-row--header">
                        <div class="main-rating__table-col name"><span>Название</span></div>
                        <div class="main-rating__table-col level hidable"><span>Мастер Гильдии</span></div>
                        <div class="main-rating__table-col clan hidable"><span>Дата создания</span></div>
                        <div class="main-rating__table-col pvp hidable"><span>Кол-во людей</span></div>
                    </div>
                         <?php
                  $sql = "SELECT * FROM `guild`";
                  $res  = $connectChar->query($sql);


                  $arrGuild = [];
                  $i = 0;
                  while ($data = $res->fetch_assoc()) {

                    $guildid = $data["guildid"];
                    $sql = "SELECT COUNT(*) AS `val` FROM `guild_member` WHERE `guildid` = $guildid";
                    $count_member = mysqli_fetch_assoc($connectChar->query($sql));

                    $leader_guid = $data["leaderguid"];
                    $sql = "SELECT `name` FROM `characters` WHERE `guid` = $leader_guid";
                    $name_lider = mysqli_fetch_assoc($connectChar->query($sql));

                    array_push($arrGuild, [
                      "name" => $data["name"],
                      "lider_name" => $name_lider["name"],
                      "create_data" => date("d.m.Y", $data["createdate"]),
                      "count_member" => $count_member["val"]
                    ]);
                  } ?>

                  <?php

                  $sortByMember = array_column($arrGuild, 'count_member');
                  array_multisort($sortByMember, SORT_DESC, $arrGuild);

                  if (count($arrGuild) > 10) {
                    $count = 10;
                  } else {
                    $count = count($arrGuild);
                  }

                  for ($i = 0; $i <  $count; $i++) { ?>       
        <div class="main-rating__table-row">
        <div class="main-rating__table-col num"><span><?php echo $arrGuild[$i]["name"] ?></span></div>
        <div class="main-rating__table-col name"><span><?php echo $arrGuild[$i]["lider_name"] ?></span></div>
        <div class="main-rating__table-col level hidable"><span><?php echo $arrGuild[$i]["create_data"] ?></span></div>
        <div class="main-rating__table-col clan hidable"><span><?php echo $arrGuild[$i]["count_member"] ?></span></div>
        </div>
<?php     } ?>
                            </div>
                        </div>
                        <div class="main-rating__content-tab" data-name-tab="exp">
                            <div class="main-rating__table">
                                <div class="main-rating__table-row main-rating__table-row--header">
                                    <div class="main-rating__table-col num">
                                        <span>№</span>
                                    </div>
                                    <div class="main-rating__table-col name">
                                        <span>Character</span>
                                    </div>
                                    <div class="main-rating__table-col level active">
                                        <span>Level</span>
                                    </div>
                                    <div class="main-rating__table-col clan hidable">
                                        <span>Clan</span>
                                    </div>
                                    <div class="main-rating__table-col pvp hidable">
                                        <span>PVP/PK</span>
                                    </div>
                                </div>
                                <div class="main-rating__table-row">
                                    <div class="main-rating__table-col num">
                                        <span>1</span>
                                    </div>
                                    <div class="main-rating__table-col name">
                                        <span>Reason</span>
                                    </div>
                                    <div class="main-rating__table-col level active">
                                        <span>54</span>
                                    </div>
                                    <div class="main-rating__table-col clan hidable">
                                        <span>OldSchool</span>
                                    </div>
                                    <div class="main-rating__table-col pk hidable">
                                        <span>0 / 0</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-rating__content-tab" data-name-tab="clans">
                            <div class="main-rating__table">
                                <div class="main-rating__table-row main-rating__table-row--header">
                                    <div class="main-rating__table-col num">
                                        <span>№</span>
                                    </div>
                                    <div class="main-rating__table-col name">
                                        <span>Clan</span>
                                    </div>
                                    <div class="main-rating__table-col ally hidable">
                                        <span>Alliance</span>
                                    </div>
                                    <div class="main-rating__table-col members hidable">
                                        <span>Members</span>
                                    </div>
                                    <div class="main-rating__table-col crp active">
                                        <span>Level</span>
                                    </div>
                                </div>
                            <div class="main-rating__table-row">
                                    <div class="main-rating__table-col num">
                                        <span>1</span>
                                    </div>
                                    <div class="main-rating__table-col name">
                                        <span>Reason</span>
                                    </div>
                                    <div class="main-rating__table-col level active">
                                        <span>54</span>
                                    </div>
                                    <div class="main-rating__table-col clan hidable">
                                        <span>OldSchool</span>
                                    </div>
                                    <div class="main-rating__table-col pk hidable">
                                        <span>0 / 0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-rating__content-tab" data-name-tab="castles">
                            <div class="main-rating__table">
                                <div class="main-rating__table-row main-rating__table-row--header">
                                    <div class="main-rating__table-col name">
                                        <span>Персонаж</span>
                                    </div>
                                    <div class="main-rating__table-col clan active">
                                        <span>Дата блокировки</span>
                                    </div>
                                    <div class="main-rating__table-col rate hidable">
                                        <span>Причина</span>
                                    </div>
                                    <div class="main-rating__table-col side hidable">
                                        <span>Дата разблокировки</span>
                                    </div>
                                    <div class="main-rating__table-col siege hidable">
                                        <span>Заблокировал</span>
                                    </div>
                                </div> 
                                <!-- бан -->
          <?php

          $sql = "SELECT cb.*, c.name, c.race, c.class FROM `character_banned` cb INNER JOIN `characters` c ON cb.guid = c.guid ORDER BY cb.banDate DESC LIMIT 25";
$res  = $connectChar->query($sql);

while ($ban_data = $res->fetch_assoc()) {
    $char_id = $ban_data["guid"]; // предполагаем, что в character_banned есть поле guid для идентификации персонажа
    
    $sql = "SELECT `name`, `race`, `class` FROM `characters` WHERE `guid` = $char_id";
    $char_data = mysqli_fetch_assoc($connectChar->query($sql));
    $banDate = date("d.m.Y", $ban_data["banDate"]);
    $unbanDate = $ban_data["unbandate"] == $ban_data["bandate"] ? "Никогда" : date("d.m.Y", $ban_data["unbandate"]);
    $banReason = $ban_data["banreason"];
    $bannedBy = $ban_data["bannedby"];
    ?>
    
    <div class="main-rating__table-row">
        <div class="main-rating__table-col name">
           <!-- <span class="emblem">
                <img src="images/path_to_race_emblem_based_on_race_id" alt="emblem">
            </span> -->
            <span><?php echo ucfirst(strtolower($char_data["name"])); ?></span>
        </div>
        <div class="main-rating__table-col clan active">
            <span><?php echo date("d.m.Y", $ban_data["bandate"]) ?></span>
        </div>
        <div class="main-rating__table-col rate hidable">
            <span><?php echo $banReason ?></span>
        </div>
        <div class="main-rating__table-col side hidable">
            <div class="side"><?php echo date("d.m.Y", $ban_data["unbandate"]) ?></div>
        </div>
        <div class="main-rating__table-col siege hidable">
            <span><?php echo $bannedBy ?></span>
        </div> 
    </div>
    <?php
}
?>
                                
                            </div>
                        </div>
                        <!-- бан -->
                    </div>
                </div>
            </section>
<!-- топ убийц -->
        </div>