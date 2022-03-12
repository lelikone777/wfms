<?php if(!empty($session['cart'])): ?>
	<div class="table-responsive">
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>Фото</th>
					<th>Наименование</th>
					<th>Количество</th>
					<th>Цена</th>

					<th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
				</tr>
				<tbody> 
					<?php foreach($session['cart'] as $id => $item): ?>
						<tr>
							<td><?= \yii\helpers\Html::img("@web/images/products/{$item['img']}", ['alt' => $item['name'], 'height' => 50]) ?></td>
							<td><?= $item['name'] ?></td>
							<td><?= $item['qty'] ?></td>
							<td><?= $item['price'] ?></td>
							<td><span data-id="<?= $id ?>" class="del-item glyphicon glyphicon-remove  text-danger" aria-hidden="true"></span></td>
						</tr>
					<?php endforeach; ?>
					<tr>
						<td colspan="4">Итого:</td>
						<td><?= $session['cart.qty'] ?></td>
					</tr>
					<tr>
						<td colspan="4">На сумму:</td>
						<td><?= $session['cart.sum'] ?></td>
					</tr>
				</tbody>
			</thead>
		</table>
	</div>
<?php else: ?>
<h1>Корзина пуста:(</h1>
<?php endif; ?>