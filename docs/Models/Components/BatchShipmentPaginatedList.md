# BatchShipmentPaginatedList

Array of [BatchShipment](/shippoapi/public-api/batches/batchshipment) objects. 
The response keeps the same order as in the request array.


## Fields

| Field                                                                       | Type                                                                        | Required                                                                    | Description                                                                 | Example                                                                     |
| --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- | --------------------------------------------------------------------------- |
| `next`                                                                      | *?string*                                                                   | :heavy_minus_sign:                                                          | N/A                                                                         | baseurl?page=3&results=10                                                   |
| `previous`                                                                  | *?string*                                                                   | :heavy_minus_sign:                                                          | N/A                                                                         | baseurl?page=1&results=10                                                   |
| `results`                                                                   | array<[Components\BatchShipment](../../Models/Components/BatchShipment.md)> | :heavy_minus_sign:                                                          | N/A                                                                         |                                                                             |