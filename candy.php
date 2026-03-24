<?php
declare(strict_types=1);

$candy = [
    'Toffee' => ['stock' => 3.00, 'price' => 12],
    'Mints' => ['stock' => 2.00, 'price' => 26],
    'Fudge' => ['stock' => 4.00, 'price' => 8],
];

$tax = 10; // 세금 %

// Functions 함수들
function get_reorder_msg(float $stock): string {
    return ($stock < 10) ? 'yes' : 'no';
}
// function 는 실수 , 가능 int  정수라 불가능
function get_total_value(float $stock, float $price): float {
    return $price * $stock;
}
//
function get_tax_due(float $price, float $stock): float {
    global $tax;
    return get_total_value($stock, $price) * ($tax / 100);
}
?>

<?php include 'includes/header.php'; ?>

<h1>This is CONTACT</h1>

<h2>Candy Stock Control</h2>

<table>
    <tr>
        <th>Candy</th>
        <th>Stock</th>
        <th>Re-order</th>
        <th>Total value</th>
        <th>Tax due</th>
    </tr>

    <?php foreach ($candy as $product => $data) { ?>
        <tr>
            <td><?= $product; ?></td>
            <td><?= $data['stock']; ?></td>
            <td><?= get_reorder_msg($data['stock']); ?></td>
            <td><?= get_total_value($data['stock'], $data['price']); ?></td>
            <td><?= get_tax_due(stock:$data['stock'], price:$data['price']); ?></td>
        </tr>
    <?php } ?>

</table>

<?php include 'includes/footer.php'; ?>