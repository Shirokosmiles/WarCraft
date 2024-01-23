<?php
        $host = "localhost";
        $db_user = "trinity";
        $db_user_passw = "trinity";
        $charset = "utf8mb4";
        $dbname = "characters";

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $db_user, $db_user_passw);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare("SELECT c.name, c.class, c.race, a.gmlevel 
                                   FROM characters c 
                                   INNER JOIN acore_auth.account_access a ON a.id = c.account 
                                   WHERE a.gmlevel != 0 AND c.online = 1");
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $class = [
                    1 => "Воин", 2 => "Паладин", 3 => "Охотник", 4 => "Разбойник", 5 => "Жрец",
                    6 => "Рыцарь Смерти", 7 => "Шаман", 8 => "Маг", 9 => "Чернокнижник", 11 => "Друид"
                ];
                $race = [
                    1 => "Человек", 2 => "Орк", 3 => "Дворф", 4 => "Ночной Эльф", 5 => "Нежить",
                    6 => "Таурен", 7 => "Гном", 8 => "Тролль", 10 => "Эльф Крови", 11 => "Дреней"
                ];
                $gmlevel = [1 => 'Модератор', 2 => 'Хелпер', 3 => 'Гейм Мастер', 4 => 'Администратор'];

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $name = $row['name'];
                    echo "<tr>";
                    echo "<td><b>{$name}<br /></b></td>";
#                    echo "<td><b>{$gmlevel[$row['gmlevel']]}</b></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4' align='center'>Нет гм, вошедших в игру</td></tr>";
            }
        } catch (PDOException $e) {
            echo "Ошибка подключения к базе данных: " . $e->getMessage();
        }
        ?>