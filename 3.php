<?php
$temperature = 10;
if ($temperature < 0) {
    echo "Мороз";
} elseif ($temperature <= 20) {
    echo "Прохладно";
} else {
    echo "Тепло";
}