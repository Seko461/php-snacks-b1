<?php 

$matches = [
    [
        "team" => "Olimpia Milano",
        "guest" => "Cantù",
        "teamScore" => 55,
        "guestScore" => 60
    ],
    [
        "team" => "Cremona",
        "guest" => "Brescia",
        "teamScore" => 61,
        "guestScore" => 68
    ],
    [
        "team" => "Virtus Bologna",
        "guest" => "Reggiana",
        "teamScore" => 92,
        "guestScore" => 62
    ],
    [
        "team" => "Venezia",
        "guest" => "VL Pesaro",
        "teamScore" => 59,
        "guestScore" => 46
    ]

    ];


for($i = 0; $i < count($matches); $i++){
    $match = $matches[$i];
    echo $match["team"] . " " . "-" . " " . $match["guest"] . " | " . $match["teamScore"] . "-" . $match["guestScore"] . "<br>";
};

foreach($matches as $match){
    echo $match["team"] . " - " . $match["guest"] . " | " . $match["teamScore"] . "-" . $match["guestScore"] . "<br>";
};

?>
