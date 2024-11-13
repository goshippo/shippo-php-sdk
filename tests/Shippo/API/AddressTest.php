<?php
declare(strict_types=1);
namespace Shippo\API;
require 'vendor/autoload.php';

use Shippo\API;
use Shippo\API\Models\Components\Address;
use Shippo\API\Models\Components\AddressPaginatedList;

final class AddressTest extends IntegrationTestCase
{
    

    public function testListAllAddresses() 
    {
        $response = $this->getSdk()->addresses->list(
            page: 1,
            results: 10,
            shippoApiVersion: '2018-02-08'

        );

        $this->assertEquals(200, $response->statusCode);
        $this->assertNotNull($response->addressPaginatedList);
        $this->assertInstanceOf(AddressPaginatedList::class, $response->addressPaginatedList);
    }
}