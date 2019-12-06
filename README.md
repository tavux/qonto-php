# *qonto-php*

## What is *Qonto*  ?

Qonto is a new bank company for freelancers & companies (more infos : [qonto.eu](qonto.eu))

## What is **qonto-php** ?

*Qonto* provides an API for companies to get data from their bank account.

*qonto-php* is a client, implemented in PHP, to request this API.

*qonto-php* only supports the second version of Qonto API.

## How to install it ?

`composer require tavux/qonto-php` 

## How to use it ?

#### *Qonto* API Documentation
 
[Qonto API v2 Documentation](https://api-doc.qonto.eu/2.0/welcome/authentication)

#### *qonto-php* Documentation

```php
    /**
     * @param string $slug
     * @param string $iban
     * @param array $status
     * @param string $updated_at_from
     * @param string $updated_at_to
     * @param string $settled_at_from
     * @param string $settled_at_to
     * @param string $sort_by
     * @param integer $current_page
     * @param integer $per_page
     * @return \Tavux\Qonto\Models\Transactions
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listTransactions($slug, $iban=null, $status=null, $updated_at_from=null, $updated_at_to=null, $settled_at_from=null, $settled_at_to=null, $sort_by=null, $current_page=null, $per_page=null);

    /**
     * @param integer $current_page
     * @param integer $per_page
     * @return \Tavux\Qonto\Models\Labels
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listLabels($current_page=null, $per_page=null);

    /**
     * @param integer $current_page
     * @param integer $per_page
     * @return \Tavux\Qonto\Models\Memberships
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function listMemberships($current_page=null, $per_page=null);

    /**
     * @param int $id
     * @return Attachment
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAttachment($id);

    /**
     * @param int $id
     * @return Organization
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getOrganization($id);

    /**
     * Change credentials to connect to Qonto API
     * @see https://api-doc.qonto.eu/2.0/welcome/authentication
     *
     * @param string $login
     * @param string $secret_key
     */
    public function setCredentials($login, $secret_key);
```

#### Example 
```php
use \Tavux\Qonto\QontoClient;

$qonto = new QontoClient('login', 'secret_key');

try {
    $organization = $qonto->getOrganization('company_id');
    $transactions = $qonto->listTransactions(
        $organization->bank_accounts[0]->slug,
        $organization->bank_accounts[0]->iban,
        null,
        null,
        null,
        null,
        null,
        null,
        1,
        null
    );
    $labels = $qonto->listLabels();
    $memberships = $qonto->listMemberships();

    var_dump($organization, $transactions->transactions, $labels->labels, $memberships->memberships);
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    echo $e->getMessage();
}
```

## Author
*qonto-php* has been initiated by [Tavux](https://tavux.tech).

## License
MIT Licence. Refer to the [LICENSE](https://github.com/tavux/qonto-php/blob/master/LICENSE) file to get more info.
