<?php


namespace Tavux\Qonto\Models;

/**
 * Class Transaction
 * @package Tavux\Qonto\Models
 *
 * @property string $transaction_id
 * @property float $amount
 * @property integer $amount_cents
 * @property array $attachment_ids
 * @property float $local_amount
 * @property integer $local_amount_cents
 * @property string $side
 * @property string $operation_type
 * @property string $currency
 * @property string $local_currency
 * @property string $label
 * @property string $settled_at
 * @property string $emitted_at
 * @property string $updated_at
 * @property string $status
 * @property string $note
 * @property string $reference
 * @property float $vat_amount
 * @property integer $vat_amount_cents
 * @property float $vat_rate
 * @property string $initiator_id
 * @property array $label_ids
 * @property boolean $attachment_lost
 * @property boolean $attachment_required
 *
 */
class Transaction extends QontoApiModel
{
}
