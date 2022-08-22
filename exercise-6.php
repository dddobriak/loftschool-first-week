<?php

echo '<table>';
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($mult = 1; $mult <= 10; $mult++) {
        $res = $i * $mult;
        if ($i & 1 && $mult & 1) {
            $index_res = "[$res]";
        } elseif (!($i & 1) && !($mult & 1)){
            $index_res = "($res)";
        } else {
            $index_res = $res;
        }
        echo "<td>$index_res</td>";
    }
    echo '</tr>';
}
echo '</table>';