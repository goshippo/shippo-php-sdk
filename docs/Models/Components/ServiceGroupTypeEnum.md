# ServiceGroupTypeEnum

The type of the service group.

- `LIVE_RATE`: Shippo will make a rating request and return real-time rates for the shipping group, only falling back to the specified flat rate amount if no rates match a service level in the service group.
- `FLAT_RATE`: returns a shipping option with the specified flat rate amount.
- `FREE_SHIPPING`: returns a shipping option with a price of $0 only if the total cost of items exceeds the amount defined by `free_shipping_threshold_min`


## Values

| Name           | Value          |
| -------------- | -------------- |
| `LiveRate`     | LIVE_RATE      |
| `FlatRate`     | FLAT_RATE      |
| `FreeShipping` | FREE_SHIPPING  |