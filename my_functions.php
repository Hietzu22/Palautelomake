<?php

function saveDataToXML($data) {

    $name = $data['name'];
    $feedback = $data['feedback'];
    $xml = simplexml_load_file('feedback.xml');

    $new_entry = $xml->addChild('entry');
    $new_entry->addChild('name', $name);
    $new_entry->addChild('feedback', $feedback);
    $new_entry->addChild('date', date("d-m-Y"));

    $dom = new DOMDocument("1.0");
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($xml->asXML());
    $dom->save('feedback.xml');
}