<?php require_once(dirname(__DIR__).'/view/shared/header.php') ?>

  <div class="content">
    <div class="content-wrapper">
      <?php echo $message ?>
      <?php if ($show == true): ?>
        <?php foreach ($_SESSION['product'] as $id=>$product): ?>
          <table>
            <th>商品名</th><th>価格</th><th>単位</th><th>数量</th><th>小計</th><th>取消</th>
            <tr>
              <td><a class="font-size-static" href="detail.php?id=<?php echo $id ?>">
                <?php echo $product['name'] ?></a></td>
              <td><?php echo $product['price'] ?>円</td>
              <td><?php echo $product['quantity'].$product['unit'] ?></td>
              <td class="td-centering"><?php echo $product['count'] ?></td>
                <?php
                  $subtotal = $product['price'] * $product['count'];
                  $total += $subtotal;
                ?>
              <td><?php echo $subtotal ?>円</td>
              <td><a class="font-size-static" href="cart-delete.php?id=<?php echo $id ?>">削除</a></td>
            </tr>
            <tr>
              <td class="td-centering" colspan="4">合計金額</td><td><?php echo $total ?>円</td>
            </tr>
          </table>
          <p>内容をご確認いただき、購入を確定してください。</p>
          <a class="btn imp-btn" href="purchase-output.php">購入を確定する</a>
        <?php endforeach ?>
      <?php endif ?>
    </div>
  </div>
<?php require_once(dirname(__DIR__).'/view/shared/footer.php') ?>
