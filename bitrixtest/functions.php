<?php

require_once 'data.php';

function startWorkday($profileId) {
    global $workdays;
    $workdayId = array_search(['profile_id' => $profileId, 'date_start' => null], $workdays);
    if ($workdayId !== false) {
        $workdays[$workdayId]['date_start'] = date('Y-m-d H:i:s');
    }
}

function stopWorkday($profileId) {
    global $workdays;
    $workdayId = array_search(['profile_id' => $profileId, 'date_stop' => null], $workdays);
    if ($workdayId !== false) {
        $workdays[$workdayId]['date_stop'] = date('Y-m-d H:i:s');
    }
}

function pauseWorkday($workdayId) {
    global $workdayPauses;
    $pauseId = array_search(['workday_id' => $workdayId, 'date_start' => null], $workdayPauses);
    if ($pauseId !== false) {
        $workdayPauses[$pauseId]['date_start'] = date('Y-m-d H:i:s');
    }
}
