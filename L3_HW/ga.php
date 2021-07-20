<?php

$req = curl_init('https://www.google-analytics.com/collect');

curl_setopt_array($req, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_POSTFIELDS =>
        'v=1&t=event&tid=UA-29145394-1&cid=636e6df6-90f8-47fc-bda6-3442099910a7&ec=TestEvet&ea=submit&el=TestEventLabel&ev=100'
));

$response = curl_exec($req);
