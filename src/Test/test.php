<?php
require __DIR__ . '/../../vendor/autoload.php';

use \Tavux\Qonto\Qonto;

$qonto = new Qonto('croissant-sas-1111', 'bcd0c05d5423');

try {
    $organization = $qonto->getOrganization('croissant-sas-1111');
    $transactions = $qonto->listTransactions($organization->bank_accounts[0]->slug);
    $labels = $qonto->listLabels();
    $memberships = $qonto->listMemberships();

    var_dump($organization, $transactions, $labels, $memberships);
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    echo $e->getMessage();
}


