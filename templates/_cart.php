
<table class ="donations" ><!-- begin table -->

    <tr>
        <td colspan="5"><h2>Shopping Cart</h2></td>
    </tr>
    <tr>
        <th id="totals">Product</th>
        <th id="totals">Price</th>
        <th id="totals">Quantity</th>
        <th id="totals">sub-total</th>
        <th id="totals">(remove)</th>
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


    <tr class="odd">
    <td id="refresh"><?= $product->getDescription() ?></td>
    <td>&euro; <?= $product->getPrice() ?></td>
    <td><?= $quantity ?></td>
    <td><?= $subTotal ?></td>
        <td><form action="index.php" method="get">
                <input type="hidden" name="action" value="removeFromCart">
                <input type="hidden" name="id" value="<?= $product->getId() ?>">
                <input type="submit" value="Remove"></form></td>
    </tr>

<?php
//-----------------------------
endforeach;
//-----------------------------
?>

    <div><hr></div>
    <tr id="idtotal">
        <td colspan="3">Total</td>
        <td>&euro; <?= $total ?></td>
        <td><form action="index.php?action=emptyCart" method="post"><input type="hidden" name="action" value="">
                <input type="submit" value="Clear Cart"></form></td>
    </tr>

    <tr>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td colspan="1"></td>
    </tr>

</table>

