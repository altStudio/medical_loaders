<?php

/*
 * You can place your custom package configuration in here.
 */
/** @noinspection PhpFullyQualifiedNameUsageInspection */
return [
    'providers' => [
        \AltStudio\Medical\Docdoc\Provider::class => [
            'test' => env('MEDICAL_DOCDOC_MODE', 'true'),
            'login' => env('MEDICAL_DOCDOC_LOGIN', ''),
            'password' => env('MEDICAL_DOCDOC_PASSWORD', ''),
            'max_tries' => 1,
            'retry_after' => 90,

            'models' => [
                'City' => AltStudio\Medical\Docdoc\Models\City::class,
                'Area' => AltStudio\Medical\Docdoc\Models\Area::class,
                'DiagnosticGroup' => AltStudio\Medical\Docdoc\Models\DiagnosticGroup::class,
                'District' => AltStudio\Medical\Docdoc\Models\District::class,
                'DoctorDetails' => AltStudio\Medical\Docdoc\Models\DoctorDetails::class,
                'Metro' => AltStudio\Medical\Docdoc\Models\Metro::class,
                'Review' => AltStudio\Medical\Docdoc\Models\Review::class,
                'Service' => AltStudio\Medical\Docdoc\Models\Service::class,
                'Speciality' => AltStudio\Medical\Docdoc\Models\Speciality::class,
                'Clinic' => AltStudio\Medical\Docdoc\Models\Clinic::class,
                'Doctor' => AltStudio\Medical\Docdoc\Models\Doctor::class,
                'Slot' => AltStudio\Medical\Docdoc\Models\Slot::class,
            ]
        ],
    ]
];
