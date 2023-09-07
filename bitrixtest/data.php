<?php

$users = [
    1 => [
        'id' => 1,
        'login' => 'user1',
        'name' => 'Иван',
        'last_name' => 'Иванов',
        'offset' => '+0300',
    ],
    2 => [
        'id' => 2,
        'login' => 'user2',
        'name' => 'Петр',
        'last_name' => 'Петров',
        'offset' => '+0200',
    ],
    // И других пользователей
];

$workdays = [
    1 => [
        'id' => 1,
        'profile_id' => 1,
        'date_start' => null,
        'date_stop' => null,
    ],
    2 => [
        'id' => 2,
        'profile_id' => 2,
        'date_start' => null,
        'date_stop' => null,
    ],
    // И другие рабочие дни
];

$workdayPauses = [
    1 => [
        'id' => 1,
        'workday_id' => 1,
        'date_start' => null,
        'date_stop' => null,
    ],
    2 => [
        'id' => 2,
        'workday_id' => 2,
        'date_start' => null,
        'date_stop' => null,
    ],
    // И другие записи о приостановках
];

$lateness = [
    1 => [
        'id' => 1,
        'profile_id' => 1,
        'date' => null,
    ],
    2 => [
        'id' => 2,
        'profile_id' => 2,
        'date' => null,
    ],
    // И другие записи опозданий
];
