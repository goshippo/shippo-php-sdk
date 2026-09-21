# BatchStatus

- `VALIDATING`: the batch is being created and validated
- `VALID`: the batch can be purchased
- `INVALID`: the batch cannot be purchased; `INVALID` BatchShipments must be removed
- `PURCHASING`: the batch is being purchased
- `PURCHASED`: the batch is finished purchasing


## Values

| Name         | Value        |
| ------------ | ------------ |
| `Validating` | VALIDATING   |
| `Valid`      | VALID        |
| `Invalid`    | INVALID      |
| `Purchasing` | PURCHASING   |
| `Purchased`  | PURCHASED    |