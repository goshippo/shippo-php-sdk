# UserParcelTemplateWithoutCarrierTemplateCreateRequest


## Fields

| Field                                                                                                                                                           | Type                                                                                                                                                            | Required                                                                                                                                                        | Description                                                                                                                                                     | Example                                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `distanceUnit`                                                                                                                                                  | [Components\DistanceUnitEnum](../../Models/Components/DistanceUnitEnum.md)                                                                                      | :heavy_check_mark:                                                                                                                                              | The measure unit used for length, width and height.                                                                                                             | in                                                                                                                                                              |
| `height`                                                                                                                                                        | *string*                                                                                                                                                        | :heavy_check_mark:                                                                                                                                              | The height of the package, in units specified by the `distance_unit` attribute. Required, but if using a preset carrier template then this field must be empty. | 6                                                                                                                                                               |
| `length`                                                                                                                                                        | *string*                                                                                                                                                        | :heavy_check_mark:                                                                                                                                              | The length of the package, in units specified by the `distance_unit` attribute. Required, but if using a preset carrier template then this field must be empty. | 10                                                                                                                                                              |
| `name`                                                                                                                                                          | *string*                                                                                                                                                        | :heavy_check_mark:                                                                                                                                              | The name of the User Parcel Template                                                                                                                            | My Custom Template                                                                                                                                              |
| `width`                                                                                                                                                         | *string*                                                                                                                                                        | :heavy_check_mark:                                                                                                                                              | The width of the package, in units specified by the `distance_unit` attribute. Required, but if using a preset carrier template then this field must be empty.  | 8                                                                                                                                                               |
| `weight`                                                                                                                                                        | *?string*                                                                                                                                                       | :heavy_minus_sign:                                                                                                                                              | The weight of the package, in units specified by the weight_unit attribute.                                                                                     | 12                                                                                                                                                              |
| `weightUnit`                                                                                                                                                    | [?Components\WeightUnitEnum](../../Models/Components/WeightUnitEnum.md)                                                                                         | :heavy_minus_sign:                                                                                                                                              | The unit used for weight.                                                                                                                                       | lb                                                                                                                                                              |