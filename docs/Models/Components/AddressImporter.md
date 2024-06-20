# AddressImporter

Object that represents the address of the importer


## Fields

| Field                                                                                                                                                                                                                                                                                                                             | Type                                                                                                                                                                                                                                                                                                                              | Required                                                                                                                                                                                                                                                                                                                          | Description                                                                                                                                                                                                                                                                                                                       | Example                                                                                                                                                                                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `name`                                                                                                                                                                                                                                                                                                                            | *?string*                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                | First and Last Name of the addressee                                                                                                                                                                                                                                                                                              | Shwan Ippotle                                                                                                                                                                                                                                                                                                                     |
| `company`                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                | Company Name                                                                                                                                                                                                                                                                                                                      | Shippo                                                                                                                                                                                                                                                                                                                            |
| `street1`                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                | First street line, 35 character limit. Usually street number and street name (except for DHL Germany, see street_no).                                                                                                                                                                                                             | Blumenstraße                                                                                                                                                                                                                                                                                                                      |
| `street2`                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                | Second street line, 35 character limit.                                                                                                                                                                                                                                                                                           |                                                                                                                                                                                                                                                                                                                                   |
| `street3`                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                | Third street line, 35 character limit. <br/>Only accepted for USPS international shipments, UPS domestic and UPS international shipments.                                                                                                                                                                                         |                                                                                                                                                                                                                                                                                                                                   |
| `streetNo`                                                                                                                                                                                                                                                                                                                        | *?string*                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                | Street number of the addressed building. <br/>This field can be included in street1 for all carriers except for DHL Germany.                                                                                                                                                                                                      | 22                                                                                                                                                                                                                                                                                                                                |
| `city`                                                                                                                                                                                                                                                                                                                            | *?string*                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                | Name of a city                                                                                                                                                                                                                                                                                                                    | München                                                                                                                                                                                                                                                                                                                           |
| `state`                                                                                                                                                                                                                                                                                                                           | *?string*                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                | **required for purchase for some countries**<br><br/>State/Province values are required for shipments from/to the US, AU, and CA. UPS requires province for some <br/>countries (i.e Ireland). To receive more accurate quotes, passing this field is recommended. Most carriers <br/>only accept two or three character state abbreviations. | CA                                                                                                                                                                                                                                                                                                                                |
| `zip`                                                                                                                                                                                                                                                                                                                             | *?string*                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                | Postal code of an Address.                                                                                                                                                                                                                                                                                                        | 80331                                                                                                                                                                                                                                                                                                                             |
| `country`                                                                                                                                                                                                                                                                                                                         | *?string*                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                | Example: `US` or `DE`. All accepted values can be found on the <br/><a href="http://www.iso.org/" target="blank">Official ISO Website</a>.<br/>Sending a country is always required.                                                                                                                                              | DE                                                                                                                                                                                                                                                                                                                                |
| `phone`                                                                                                                                                                                                                                                                                                                           | *?string*                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                | Addresses containing a phone number allow carriers to call the recipient when delivering the Parcel. This <br/>increases the probability of delivery and helps to avoid accessorial charges after a Parcel has been shipped.                                                                                                      | 80331                                                                                                                                                                                                                                                                                                                             |
| `email`                                                                                                                                                                                                                                                                                                                           | *?string*                                                                                                                                                                                                                                                                                                                         | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                | E-mail address of the contact person, RFC3696/5321-compliant.                                                                                                                                                                                                                                                                     | shippotle@shippo.com                                                                                                                                                                                                                                                                                                              |
| `isResidential`                                                                                                                                                                                                                                                                                                                   | *?bool*                                                                                                                                                                                                                                                                                                                           | :heavy_minus_sign:                                                                                                                                                                                                                                                                                                                | Indicates whether the address provided is a residential address or not.                                                                                                                                                                                                                                                           | true                                                                                                                                                                                                                                                                                                                              |