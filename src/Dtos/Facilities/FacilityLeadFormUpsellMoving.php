<?php

namespace Thestoragescanner\Payloads\Dtos\Facilities;

use Thestoragescanner\Payloads\Enums\MovingLead\MovingLeadCustomerTypeEnum;
use Thestoragescanner\Payloads\Enums\MovingLead\MovingLeadSizeEnum;
use Thestoragescanner\Payloads\Enums\MovingLead\MovingLeadTimeframeEnum;
use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class FacilityLeadFormUpsellMoving extends DtoAbstract
{
    #[MapScalar('customer_type')]
    public MovingLeadCustomerTypeEnum $customerType;

    #[MapScalar('size')]
    public MovingLeadSizeEnum $size;

    #[MapScalar('from_address')]
    public string $fromAddress;

    #[MapScalar('to_address')]
    public string $toAddress;

    #[MapScalar('within')]
    public MovingLeadTimeframeEnum $within;
}
