<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Shippo\API\Models\Components;


enum AddressValidationResultsMessageCodeEnum: string
{
    case VerificationError = 'verification_error';
    case UnknownStreetLower = 'unknown_street';
    case ComponentMismatchError = 'component_mismatch_error';
    case MultipleMatch = 'multiple_match';
    case SubPremiseNumberInvalid = 'sub_premise_number_invalid';
    case SubPremiseNumberMissing = 'sub_premise_number_missing';
    case PremiseNumberInvalid = 'premise_number_invalid';
    case PremiseNumberMissing = 'premise_number_missing';
    case BoxNumberInvalid = 'box_number_invalid';
    case BoxNumberMissing = 'box_number_missing';
    case PmbNumberMissing = 'pmb_number_missing';
    case PostalCodeChange = 'postal_code_change';
    case AdministrativeAreaChange = 'administrative_area_change';
    case LocalityChange = 'locality_change';
    case DependentLocalityChange = 'dependent_locality_change';
    case StreetNameChange = 'street_name_change';
    case StreetTypeChange = 'street_type_change';
    case StreetDirectionalChange = 'street_directional_change';
    case SubPremiseTypeChange = 'sub_premise_type_change';
    case SubPremiseNumberChange = 'sub_premise_number_change';
    case DoubleDependentLocalityChange = 'double_dependent_locality_change';
    case SubadministrativeAreaChange = 'subadministrative_area_change';
    case SubnationalAreaChange = 'subnational_area_change';
    case PoBoxChange = 'po_box_change';
    case PremiseTypeChange = 'premise_type_change';
    case HouseNumberChange = 'house_number_change';
    case OrganizationChange = 'organization_change';
    case ExtraneousInformation = 'extraneous_information';
    case UspsDoorInaccessible = 'usps_door_inaccessible';
    case AdministrativeAreaPartial = 'administrative_area_partial';
    case CityPartial = 'city_partial';
    case StreetPartial = 'street_partial';
    case BuildingPartial = 'building_partial';
    case SubpremisePartial = 'subpremise_partial';
    case AdministrativeAreaFull = 'administrative_area_full';
    case CityFull = 'city_full';
    case ThoroughfareFull = 'thoroughfare_full';
    case PremisesFull = 'premises_full';
    case SubpremiseFull = 'subpremise_full';
    case GeocodedStreet = 'geocoded_street';
    case GeocodedNeighborhood = 'geocoded_neighborhood';
    case GeocodedCommunity = 'geocoded_community';
    case GeocodedState = 'geocoded_state';
    case GeocodedRooftop = 'geocoded_rooftop';
    case GeocodedInterpolatedRooftop = 'geocoded_interpolated_rooftop';
    case InvalidPostalCode = 'invalid_postal_code';
    case PostalCodeNotFound = 'postal_code_not_found';
    case EmptyRequest = 'empty_request';
    case ServiceError = 'service_error';
    case StreetDetailMissing = 'street_detail_missing';
    case InvalidCityStateZip = 'Invalid City/State/Zip';
    case DefaultMatch = 'Default Match';
    case UnknownStreetMixed = 'Unknown Street';
    case AddressNotFound = 'Address Not Found';
    case NonDeliverableZip4 = 'Non-Deliverable ZIP4';
    case MultipleResponses = 'Multiple Responses';
    case InvalidDualAddress = 'Invalid Dual Address';
    case InvalidState = 'Invalid State';
    case InvalidCity = 'Invalid City';
    case AmbiguousAddress = 'Ambiguous Address';
}
