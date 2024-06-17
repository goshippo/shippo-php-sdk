# Alcohol

Indicates that a shipment contains Alcohol (Fedex and UPS only).


## Fields

| Field                                                                                    | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `containsAlcohol`                                                                        | *?bool*                                                                                  | :heavy_minus_sign:                                                                       | Mandatory for Fedex and UPS. Specifies that the package contains Alcohol.                |
| `recipientType`                                                                          | [?\Shippo\API\Models\Components\RecipientType](../../Models/Components/RecipientType.md) | :heavy_minus_sign:                                                                       | Mandatory for Fedex only. License type of the recipient of the Alcohol Package.          |