<?php

namespace Thestoragescanner\Payloads\Dtos\Facilities;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class FacilitySpecs extends DtoAbstract
{
    #[MapScalar('monday_open')]
    public ?string $mondayOpen;

    #[MapScalar('monday_close')]
    public ?string $mondayClose;

    #[MapScalar('tuesday_open')]
    public ?string $tuesdayOpen;

    #[MapScalar('tuesday_close')]
    public ?string $tuesdayClose;

    #[MapScalar('wednesday_open')]
    public ?string $wednesdayOpen;

    #[MapScalar('wednesday_close')]
    public ?string $wednesdayClose;

    #[MapScalar('thursday_open')]
    public ?string $thursdayOpen;

    #[MapScalar('thursday_close')]
    public ?string $thursdayClose;

    #[MapScalar('friday_open')]
    public ?string $fridayOpen;

    #[MapScalar('friday_close')]
    public ?string $fridayClose;

    #[MapScalar('saturday_open')]
    public ?string $saturdayOpen;

    #[MapScalar('saturday_close')]
    public ?string $saturdayClose;

    #[MapScalar('sunday_open')]
    public ?string $sundayOpen;

    #[MapScalar('sunday_close')]
    public ?string $sundayClose;

    #[MapScalar('spec_247access')]
    public ?bool $spec247Access;

    #[MapScalar('spec_drivein')]
    public ?bool $specDriveIn;

    #[MapScalar('spec_cctv')]
    public ?bool $specCctv;

    #[MapScalar('spec_elevator')]
    public ?bool $specElevator;

    #[MapScalar('spec_climatecontrol')]
    public ?bool $specClimateControl;

    #[MapScalar('spec_firealarm')]
    public ?bool $specFireAlarm;

    #[MapScalar('spec_entrancecontrol')]
    public ?bool $specEntranceControl;

    #[MapScalar('spec_onsiteemployees')]
    public ?bool $specOnsiteEmployees;

    #[MapScalar('spec_trolliesavailable')]
    public ?bool $specTrolliesAvailable;

    #[MapScalar('spec_trailerforrent')]
    public ?bool $specTrailerForRent;

    #[MapScalar('spec_parking')]
    public ?bool $specParking;

    #[MapScalar('spec_collectiondelivery')]
    public ?bool $specCollectionDelivery;
}
