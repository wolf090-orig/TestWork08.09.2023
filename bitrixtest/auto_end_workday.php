<?php

require_once 'data.php';
require_once 'functions.php';

foreach ($workdays as &$workday) {
    if ($workday['date_start'] !== null && $workday['date_stop'] === null) {
        $workday['date_stop'] = date('Y-m-d H:i:s');
    }
}
