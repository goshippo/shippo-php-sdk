# WebhookPayloadTransaction

Content of the webhook posted to the external URL


## Fields

| Field                                                                               | Type                                                                                | Required                                                                            | Description                                                                         |
| ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- |
| `event`                                                                             | [?Components\WebhookEventTypeEnum](../../Models/Components/WebhookEventTypeEnum.md) | :heavy_minus_sign:                                                                  | Type of event that triggered the webhook.                                           |
| `test`                                                                              | *?bool*                                                                             | :heavy_minus_sign:                                                                  | Determines whether the webhook is a test webhook or not.                            |
| `data`                                                                              | [?Components\Transaction](../../Models/Components/Transaction.md)                   | :heavy_minus_sign:                                                                  | N/A                                                                                 |