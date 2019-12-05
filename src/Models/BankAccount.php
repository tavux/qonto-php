<?php

namespace Tavux\Qonto\Models;

/**
 * Class BankAccount
 * @package Tavux\Qonto
 *
 * @property string $slug
 * @property string $iban
 * @property string $bic
 * @property string $currency
 * @property float $balance
 * @property integer $balance_cents
 * @property float $authorized_balance
 * @property integer $authorized_balance_cents
 */
class BankAccount extends QontoApiModel {

}
