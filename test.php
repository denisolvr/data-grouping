<?php
require_once 'Array_Manipulation.php';

$data = [
    [
        "First Name" => "Denis",
        "Surname" => "Oliveira",
        "Company" => "RTDE LLP",
        "Street" => "12, Kapel Street",
        "City" => "Limerick",
        "County" => "Co. Limerick",
        "Country" => "Ireland"
    ],
    [
        "First Name" => "Mickey",
        "Surname" => "Murphy",
        "Company" => "Soluction LLP",
        "Street" => "9127 Cabra",
        "City" => "Galway",
        "County" => "Co. Galway",
        "Country" => "Ireland"
    ],
    [
        "First Name" => "Boris",
        "Surname" => "O'Connel",
        "Company" => "Associates",
        "Street" => "Ap 3883 Mantra. Street",
        "City" => "Galway",
        "County" => "Co. Galway",
        "Country" => "Ireland"
    ],
    [
        "First Name" => "Madison",
        "Surname" => "Oliveira",
        "Company" => "Industries",
        "Street" => "73 Roast Roast",
        "City" => "Galway",
        "County" => "Co. Galway",
        "Country" => "Ireland"
    ],
    [
        "First Name" => "Lemon",
        "Surname" => "Juice",
        "Company" => "OC PC",
        "Street" => "Ap #33 Temple Bar",
        "City" => "Dublin",
        "County" => "Co. Dublin",
        "Country" => "Ireland"
    ],
    [
        "First Name" => "Rigel",
        "Surname" => "Murphy",
        "Company" => "Foundation",
        "Street" => "Box 730, JarjarBin St.",
        "City" => "Dublin",
        "County" => "Co. Dublin",
        "Country" => "Ireland"
    ],
    [
        "First Name" => "Sava",
        "Surname" => "Clava",
        "Company" => "Limited",
        "Street" => "P.O. Box 1, 22 Clare St.",
        "City" => "Limerick",
        "County" => "Co. Limerick",
        "Country" => "Ireland"
    ],
    [
        "First Name" => "Java",
        "Surname" => "Script",
        "Company" => "Consulting",
        "Street" => "123 Vinn Rd.",
        "City" => "Limerick",
        "County" => "Co. Limerick",
        "Country" => "Ireland"
    ],
    [
        "First Name" => "Oreo",
        "Surname" => "Bolacha",
        "Company" => "ACDC Limited",
        "Street" => "P.O. Box 12312312, 11 Za Street",
        "City" => "Limerick",
        "County" => "Co. Limerick",
        "Country" => "Ireland"
    ]
];

    $array_manipulation = new Array_Manipulation($data);

    var_dump($array_manipulation->groupArray(['Surname', 'City']));