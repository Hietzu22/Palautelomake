<?php

function saveDataToXML($data) {

    $name = $data['name']
    $xml = simplexml_load_file('feedback.xml')

    $new_entry = $xml->addChild('entry');
    $new_entry = $xml->addChild('name', $name);
    $new_entry = $xml->addChild('feedback', $feedback);
    $new_entry = $xml->addChild('date', date("d-m-Y"));

    $dom->loadXML($xml->asXML());
}