<?php
$us_price = 4;
$rates = [
    'uk' => 0.81,
    'eu' => 0.93,
    'jp' => 113.21,
    "kr" => 1495.29,
];

function convert_price( $price, $rate) {
    $price = [
        'pound' => $price * $rate['uk'],
        'euro' => $price * $rate['eu'],
        'yen' => $price * $rate['jp'],
        'won' => $price * $rate['kr']
    ];
    return $price;
}

$global_price = convert_price($us_price, $rates);

?>

<?php include 'includes/header.php'; ?>

<h2>Welcome!</h2>
<p>we sell chocolates to many countries!</p>
<p>US price: $<?= $us_price; ?></p>
<p>
    (UK $pound; <?= $global_price['pound']; ?>|
    EU $euro; <?= $global_price['euro']; ?>|
    JP $yen; <?= $global_price['yen']; ?> |
    KR $won; <?= $global_price['won']; ?>)
</p>

<?php include 'includes/footer.php'; ?>