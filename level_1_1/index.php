<?php
require $_SERVER['DOCUMENT_ROOT'] . '/level_1_1/classes/Product.php';

$stocks = [
    'SKLAD1' => [
        'EDA' => [
            'TOVAR1' => [
                'NAME' => '....',
                'PRICE' => 9234
            ],
            'TOVAR2' => [
                'NAME' => '....',
                'PRICE' => 7234
            ],
        ],
        'NAPITKI' => [
            'TOVAR55' => [
                'NAME' => '....',
                'PRICE' => 5234
            ],
            'TOVAR54' => [
                'NAME' => '....',
                'PRICE' => 3234
            ],
        ],
    ],
    'SKLAD2' => [
        'EDA' => [
            'TOVAR66' => [
                'NAME' => '....',
                'PRICE' => 8234
            ],
            'TOVAR67' => [
                'NAME' => '....',
                'PRICE' => 6234
            ],
        ],
        'NAPITKI' => [
            'TOVAR77' => [
                'NAME' => '....',
                'PRICE' => 234
            ],
            'TOVAR78' => [
                'NAME' => '....',
                'PRICE' => 11234
            ],
        ],
    ],
];

$products = [];

foreach ($stocks as $keyStock => $stock) {
    foreach ($stock as $keyFoods => $foods) {
        foreach ($foods as $keyProduct => $product) {
            $products[] = new Product($keyStock, $keyFoods, mb_substr($keyProduct, 5), $product['NAME'], $product['PRICE']);
        }
    }
}

uasort($products, function($a, $b)
{
    return $a->getPrice() <=> $b->getPrice();
});

$stocks = [];

foreach ($products as $keyProduct => $product) {
    $stocks[$product->getId()]['name'] = $product->getName();
    $stocks[$product->getId()]['price'] = $product->getPrice();
    $stocks[$product->getId()]['stock'] = $product->getStock();
    $stocks[$product->getId()]['foodType'] = $product->getFoodType();
}

$title = 'Задание №1';
require $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
?>
<div class="panel-container show">
    <div class="panel-content">
        <h5 class="frame-heading">
            Продукты
        </h5>
        <div class="frame-wrap">
            <table class="table m-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Food type</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($stocks as $keyStock => $stock) { ?>
                    <tr>
                        <th scope="row"><?=$keyStock;?></th>
                        <td><?=$stock['name'];?></td>
                        <td><?=$stock['price'];?></td>
                        <td><?=$stock['foodType'];?></td>
                        <td><?=$stock['stock'];?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php';
