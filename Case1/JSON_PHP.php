<?php
    $url = "http://mort.moi.gov.tw/opendata/facilityList.do?method=exportJson";  // Your json data url
    $data = file_get_contents($url);  // PHP get data from url
    $json = json_decode($data, true);  // Decode json data
    // �B�z���o�� json ���
?>