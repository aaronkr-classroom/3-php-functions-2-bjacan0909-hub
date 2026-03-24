<?php
/* Nothing to see here. */
$stock = 5;
$ordered = 3;

//if 문

if ($stock > 0)  {
 $message = "In stock";
}
    elseif ($ordered > 0) {
        $message = "Coming soon";
    }
     else {
        $message = "sold out!";
     }
 // switch 문

 $day = "Tuesday";{
    switch ($day) {
        case "Monday":
            $offer = '20% off on all candy!';
            break;
        case "Tuesday":
            $offer = '20% off on mints';
            break;
        default:
            $offer = '3+1mints';
    }
    //Snipets 문
    $day = "Tuesday";
    switch ($day) {
        case "Monday":
            $offer = '20% off chocolate';
            break;
        case "Tuesday":
            $offer = '20% off on mints';
            break;
        default:
            $offer = '20% off 3+1 mints';
    }

    // match 문
    $month = "March";
    $season = match ($month) {
        'January', 'February' => '20% off mints',
        'March', 'April' => '30% off chocolate',
        default => '10% off all candy',
    };
 }
?>
<?php require 'includes/header.php'; ?>
<h2>Chocolate</h2>
<p><?= $message; ?></p>

<h2> offers on <?= $day; ?></h2>
<p><?= $offer; ?></p>

<h2> offers in <?= $month; ?></h2>
<p><?= $mth_offer; ?></p>

