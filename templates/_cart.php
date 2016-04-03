
<hr>
<h3>shopping cart</h3>
<table>
    <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>sub-total</th>
        <th>(remove)</th>
    </tr>
<?php
//-----------------------------
$total = 0;
//testing shopping cart

//$shoppingCart = $this->getShoppingCart();

//$products = Product::getAll();
foreach($shoppingCart as $id=>$quantity):

    $product = \Itb\Product::getOneById($id);
    $subTotal = $product->getPrice() * $quantity;
    $total += $subTotal;
//-----------------------------
?>
    <tr>
    <td><?= $product->getDescription() ?></td>
    <td>&euro; <?= $product->getPrice() ?></td>
    <td><?= $quantity ?></td>
    <td><?= $subTotal ?></td>
    <td><a href="/index.php?action=removeFromCart&id=<?= $product->getId() ?>">(remove from cart)</a></td>

    </tr>

<?php
//-----------------------------
endforeach;
//-----------------------------
?>

    <tr>
        <td colspan="3">Total</td>
        <td>&euro; <?= $total ?></td>
    </tr>

</table>

<a href="/index.php?action=emptyCart">EMPTY CART</a>

