<?php
$parameters = [
    'apikey' => 'a5620bc2-e589-4b3c-960c-63f945c8bd8a',
    'geocode' => $_POST['address'],
    'format' => 'json',
];
$response = file_get_contents('https://geocode-maps.yandex.ru/1.x/?' . http_build_query($parameters));
$responseObject = json_decode($response, true);
$addressComponents = $responseObject['response']['GeoObjectCollection']['featureMember'][0]['GeoObject']['metaDataProperty']['GeocoderMetaData']['Address']['Components'];
$coords =  str_replace(' ', ',', $responseObject['response']['GeoObjectCollection']['featureMember'][0]['GeoObject']['Point']['pos']);
$parameters = [
    'apikey' => 'a5620bc2-e589-4b3c-960c-63f945c8bd8a',
    'geocode' => $coords,
    'kind' => 'metro',
    'format' => 'json',
    'results' => 1,
];
$response = file_get_contents('https://geocode-maps.yandex.ru/1.x/?' . http_build_query($parameters));
$responseObject = json_decode($response, true);
$metro = $responseObject['response']['GeoObjectCollection']['featureMember'][0]['GeoObject']['metaDataProperty']['GeocoderMetaData']['Address']['formatted'];
$result =[];
foreach ($addressComponents as $component) {
    $result['address'][$component['kind']] = $component['name'];
}
$result['coords'] = $coords;
$result['metro'] = $metro;
echo json_encode($result, JSON_UNESCAPED_UNICODE);