<?php

$LENGTH = [
    //Standard is meter)
    "meter" => 1,
    "kilometer" => 1000,
    "centimeter" => 0.01,
    "millimeter" => 0.001,
    "micrometer" => 0.000001,
    "nanometer" => 0.000000001,
    "mile" => 1609.35,
    "yard" => 0.9144,
    "foot" => 0.3048,
    "inch" => 0.0254,
    "light_year" => 9460660000000000,

];

$Area = [
    //Standard is  square meter
    "Square Meter" => 1,
    "Square Kilometer" => 1000000,
    "Square Centimetter" => 0.0001,
    "Square Millimetter" => 0.000001,
    "Square Micrometter" => 0.000000000001,
    "Hectare" => 10000,
    "Square Mile" => 2589990,
    "Square Yard" => 0.83612736,
    "Square Foot" => 0.09290304,
    "Square Inch" => 0.00064516,
    "Acre" => 4046.8564224,

];

$Volume = [
    //Standard is Liter
    "Liter" => 1,
    "Cubic Meter" => 1000,
    "Cubic Kilometer" => 1000000000000,
    "Cubic Centimeter" => 0.001,
    "Cubic Millimeter" => 0.000001,
    "Milliliter" => 0.001,
    "US Gallon" => 3.78541,
    "US Quart" => 0.9463525,
    "US Pint" => 0.47317625,
    "US Cup" => 0.236588125,
    "US Fluid Ounce" => 0.0295735156,
    "US Table Spoon" => 0.0147867578,
    "US Tea Spoon" => 0.0049289193,
    "Imperial Gallon" => 4.54609,
    "Imperial Quart" => 1.1365225,
    "Imperial Pint" => 0.56826125,
    "Imperial FLuid Ounce" => 0.0284130625,
    "Imperial Table Spoon" => 0.0177581641,
    "Imperial Tea Spoon" => 0.005919388,
    "Cubic Mile" => 4168180000000,
    "Cubic Yard" => 764.55485798,
    "Cubic Foot" => 28.316846592,
    "Cubic Inch" => 0.016387064,
];

$Weight = [
    //Standard is Gram
    "Gram" => 1,
    "Kilogram" => 1000,
    "Milligram" => 0.001,
    "Metric Ton" => 1000000,
    "Long Ton" => 1016046.08,
    "Short Ton" => 907184,
    "Pound" => 453.592,
    "Ounce" => 28.3495,
    "Carrat" => 0.2,
    "Atomic Mass Unit" => 1.660540199E-24,

];

// Here Muliplication and Division won't help .
function calculateTemp($FromUnit, $ToUnit, $FromValue)
{
    // all unit to kelvin
    switch ($FromUnit) {
        case 'Kelvin':$FromValue = $FromValue;
            break;
        case 'Celsius':$FromValue = $FromValue + 273.15;
            break;
        case 'Fahrenheit':$FromValue = ($FromValue - 32) * 5 / 9 + 273.15;
            break;

    }

    //kelvin to requied unit
    switch ($ToUnit) {
        case 'Kelvin':$FromValue = $FromValue;
            break;
        case 'Celsius':$FromValue = $FromValue - 273.15;
            break;
        case 'Fahrenheit':$FromValue = ($FromValue - 273.15) * 9 / 5 + 32;
            break;
    }
    return $FromValue;
}

$Speed = [
    // Standard = meter / second
    'meter/second' => 1,
    'kilometer/hour' => 0.2777777778,
    'mile/hour' => 0.44704,
    'meter/hour' => 0.0002777778,
    'kilometer/second' => 1000,
    'mile/second' => 1609.344,
    'mile/minute' => 26.8224,
    'knot' => 0.5144444444,
    'Cosmic velocity' => 7900,
    'Light velocity' => 299792458,
];

function debug($bug)
{
    echo "<pre>";
    print_r($bug);
    echo "</pre>";
}
