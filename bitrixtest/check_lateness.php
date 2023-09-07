<?php

require_once 'data.php';
require_once 'functions.php';

foreach ($users as $user) {
    $offset = $user['offset'];
    $localTime = gmdate('H:i:s', strtotime($offset));
    if ($localTime !== '09:00:00') {
        $lateness[] = [
            'profile_id' => $user['id'],
            'date' => date('Y-m-d'),
        ];
    }
}
