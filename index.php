<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Comparison & logic operation results</title>
</head>

<body>
    <main>
        <div>
            <h3> <strong>Задание 1.&nbsp;</strong> Таблица истинности PHP
            </h3>
            <p></p>
            <table>
                <thead>
                    <tr>
                        <th>A</th>
                        <th>B</th>
                        <th>!A</th>
                        <th>A || B</th>
                        <th>A && B</th>
                        <th>A xor B</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $AB = [[0, 0], [0, 1], [1, 0], [1, 1]];
                    for ($i = 0; $i < count($AB); $i++) {
                        $A = $AB[$i][0];
                        $B = $AB[$i][1];
                        echo '<tr>';
                        echo "<td>$A</td>";
                        echo "<td>$B</td>";
                        echo '<td>' . (int)!$A . '</td>';
                        echo '<td>' . (int)($A || $B) . '</td>';
                        echo '<td>' . (int)($A && $B) . '</td>';
                        echo '<td>' . (int)($A xor $B) . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
            <p></p>
            <h3> <strong>Задание 2.&nbsp;</strong> Таблица сравнения
            <p></p>
            </h3>
            <h4>2.1 Гибкое сравнение в PHP</h4>
            <p></p>
            <table>
                <thead>
                    <tr>
                        <?php
                        $VT = ['true', 'false',    '1',    '0',    '-1',    '"1"', 'null', '"php"'];
                        $VA = [true, false,    1,    0,    -1,    "1", null, "php"];
                        echo '<th></th>';
                        for ($i = 0; $i < count($VT); $i++) {
                            echo '<th>' . $VT[$i] . '</th>';
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($VT); $i++) {
                        $A = $VA[$i];
                        echo '<tr>';
                        echo '<th>' . $VT[$i] . '</th>';
                        for ($ii = 0; $ii < count($VA); $ii++) {
                            $B =  $VA[$ii];
                            $V = ($A == $B) ? 'true' : 'false';
                            $EV = (($A == $B) === ($A === $B)) ? '' : 'class="not_equal"';
                            echo "<td $EV>" . $V . '</td>';
                        }
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
                    <p></p>
            <h4>2.2 Жесткое сравнение в PHP</h4>
            <p></p>
            <table>
                <thead>
                    <tr>
                        <?php
                        $VT = ['true', 'false',    '1',    '0',    '-1',    '"1"', 'null', '"php"'];
                        $VA = [true, false,    1,    0,    -1,    "1", null, "php"];
                        echo '<th></th>';
                        for ($i = 0; $i < count($VT); $i++) {
                            echo '<th>' . $VT[$i] . '</th>';
                        }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($VT); $i++) {
                        $A = $VA[$i];
                        echo '<tr>';
                        echo '<th>' . $VT[$i] . '</th>';
                        for ($ii = 0; $ii < count($VA); $ii++) {
                            $B =  $VA[$ii];
                            $V = ($A === $B) ? 'true' : 'false';
                            $EV = (($A == $B) === ($A === $B)) ? '' : 'class="not_equal"';
                            echo "<td $EV>" . $V . '</td>';
                        }
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
            <p></p>
            <h4>2.3 Вывод о разнице "гибкого и "жесткого" сравнения в PHP:</h4>
            <p></p>
            <p>Перед гибким (мягким) сравнении производится приведедние операндов к единому типу.<br>
                При "жестком" сравнении приведения типов не происходит и для равества операндов необходимо совпадение не только значений, но и их типов.</div></p>
        </div>
    </main>
</body>

</html>