<?php

namespace Thestoragescanner\Payloads\Dtos\Facilities;

use Thestoragescanner\Payloads\Dtos\DtoAbstract;
use Thestoragescanner\Payloads\Mapper\Attributes\MapScalar;

class FacilitySpecs extends DtoAbstract
{
    #[MapScalar('monday_open')]
    public ?string $mondayOpen = null;

    #[MapScalar('monday_close')]
    public ?string $mondayClose = null;

    #[MapScalar('tuesday_open')]
    public ?string $tuesdayOpen = null;

    #[MapScalar('tuesday_close')]
    public ?string $tuesdayClose = null;

    #[MapScalar('wednesday_open')]
    public ?string $wednesdayOpen = null;

    #[MapScalar('wednesday_close')]
    public ?string $wednesdayClose = null;

    #[MapScalar('thursday_open')]
    public ?string $thursdayOpen = null;

    #[MapScalar('thursday_close')]
    public ?string $thursdayClose = null;

    #[MapScalar('friday_open')]
    public ?string $fridayOpen = null;

    #[MapScalar('friday_close')]
    public ?string $fridayClose = null;

    #[MapScalar('saturday_open')]
    public ?string $saturdayOpen = null;

    #[MapScalar('saturday_close')]
    public ?string $saturdayClose = null;

    #[MapScalar('sunday_open')]
    public ?string $sundayOpen = null;

    #[MapScalar('sunday_close')]
    public ?string $sundayClose = null;

    #[MapScalar('spec_247access')]
    public ?bool $spec247Access = null;

    #[MapScalar('spec_drivein')]
    public ?bool $specDriveIn = null;

    #[MapScalar('spec_cctv')]
    public ?bool $specCctv = null;

    #[MapScalar('spec_elevator')]
    public ?bool $specElevator = null;

    #[MapScalar('spec_climatecontrol')]
    public ?bool $specClimateControl = null;

    #[MapScalar('spec_firealarm')]
    public ?bool $specFireAlarm = null;

    #[MapScalar('spec_entrancecontrol')]
    public ?bool $specEntranceControl = null;

    #[MapScalar('spec_onsiteemployees')]
    public ?bool $specOnsiteEmployees = null;

    #[MapScalar('spec_trolliesavailable')]
    public ?bool $specTrolliesAvailable = null;

    #[MapScalar('spec_trailerforrent')]
    public ?bool $specTrailerForRent = null;

    #[MapScalar('spec_parking')]
    public ?bool $specParking = null;

    #[MapScalar('spec_collectiondelivery')]
    public ?bool $specCollectionDelivery = null;

    #[MapScalar('spec_certifiedalarmsystem')]
    public ?bool $specCertifiedAlarmSystem = null;

    #[MapScalar('spec_electricityavailable')]
    public ?bool $specElectricityAvailable = null;

    #[MapScalar('spec_multiuse')]
    public ?bool $specMultiuse = null;

    #[MapScalar('spec_restroomsonsite')]
    public ?bool $specRestroomsOnsite = null;

    #[MapScalar('spec_wifi')]
    public ?bool $specWifi = null;
}
