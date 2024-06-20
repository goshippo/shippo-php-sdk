# LiveRate


## Fields

| Field                                                                                                                                                                                | Type                                                                                                                                                                                 | Required                                                                                                                                                                             | Description                                                                                                                                                                          | Example                                                                                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| `amount`                                                                                                                                                                             | *?string*                                                                                                                                                                            | :heavy_minus_sign:                                                                                                                                                                   | Final Rate price, expressed in the currency used in the sender's country.                                                                                                            | 5.5                                                                                                                                                                                  |
| `amountLocal`                                                                                                                                                                        | *?string*                                                                                                                                                                            | :heavy_minus_sign:                                                                                                                                                                   | Final Rate price, expressed in the currency used in the recipient's country.                                                                                                         | 5.5                                                                                                                                                                                  |
| `currency`                                                                                                                                                                           | *?string*                                                                                                                                                                            | :heavy_minus_sign:                                                                                                                                                                   | Currency used in the sender's country, refers to `amount`. <br/>The <a href="http://www.xe.com/iso4217.php">official ISO 4217</a> currency codes are used, e.g. `USD` or `EUR`.      | USD                                                                                                                                                                                  |
| `currencyLocal`                                                                                                                                                                      | *?string*                                                                                                                                                                            | :heavy_minus_sign:                                                                                                                                                                   | Currency used in the recipient's country, refers to `amount_local`. <br/>The <a href="http://www.xe.com/iso4217.php">official ISO 4217</a> currency codes are used, e.g. `USD` or "EUR". | USD                                                                                                                                                                                  |
| `estimatedDays`                                                                                                                                                                      | *?int*                                                                                                                                                                               | :heavy_minus_sign:                                                                                                                                                                   | The estimated days in transit of the rate that powers the shipping option, if available.                                                                                             | 2                                                                                                                                                                                    |
| `title`                                                                                                                                                                              | *?string*                                                                                                                                                                            | :heavy_minus_sign:                                                                                                                                                                   | The name of the service group being returned                                                                                                                                         | Shipping Option 1                                                                                                                                                                    |