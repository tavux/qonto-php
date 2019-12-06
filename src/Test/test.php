<?php
require __DIR__ . '/../../vendor/autoload.php';

use \Tavux\Qonto\QontoClient;

$qonto = new QontoClient('login', 'password');

try {
    $organization = $qonto->getOrganization('company_id');
    $transactions = $qonto->listTransactions($organization->bank_accounts[0]->slug);
    $labels = $qonto->listLabels();
    $memberships = $qonto->listMemberships();

    var_dump($organization, $transactions, $labels, $memberships);
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    echo $e->getMessage();
}


