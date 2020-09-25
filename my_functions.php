<?php

function saveDataToXML($data) {

    $name = $data['name']
    $xml = simplexml_load_file('feedback.xml')

    $new_entry = $xml->addChild('entry');
    $new_entry->addChild('name', $name);
    $new_entry->addChild('feedback', $feedback);
    $new_entry->addChild('date', date("d-m-Y"));

    $dom->loadXML($xml->asXML());
}