<?php

namespace Thestoragescanner\Payloads\Dtos\Facilities;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapObject;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class FacilityLeadFormUpsell extends DtoAbstract
{
    #[MapScalar('facility_lead_form_id')]
    public int $facilityLeadFormId;

    #[MapScalar('insurance')]
    public bool $insurance;

    #[MapObject('moving')]
    public ?FacilityLeadFormUpsellMoving $moving = null;
}
