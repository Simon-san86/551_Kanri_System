<h1>551の蓬莱へようこそ</h1>

<table>
	<tr>
		<th><?= $this->Paginator->sort('Tenpos.id', 'id', ['asc']) ?></th>
		<th><?= $this->Paginator->sort('Tenpos.name', '店舗', ['asc']) ?></th>
		<th><?= $this->Paginator->sort('Tenpos.open', '開店', ['asc']) ?></th>
		<th><?= $this->Paginator->sort('Tenpos.closed', '閉店', ['asc']) ?></th>
		<th>定休日</th>
		<th>電話番号</th>
		<th>その地</th>
	</tr>
	<?php foreach ($tenpos as $tenpo): ?>
	<tr>
		<td><?= $tenpo->id ?></td>
		<td><?= $this->Html->link($tenpo->name, ['action' => 'view', $tenpo->id]) ?></td>
		<td><?= $tenpo->open->i18nFormat('HH:mm') ?></td>
		<td><?= $tenpo->closed->i18nFormat('HH:mm') ?></td>
		<td><?= $tenpo->holiday ?></td>
		<td><?= $tenpo->tel ?></td>
		<td>
			<?= $this->Html->link('編集', ['action' => 'edit', $tenpo->id]) ?>
			<?= $this->Form->postlink('削除', 
				['action' => 'delete', $tenpo->id],
				['confirm' => 'ホンマ？']) ?>	
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<p><?= $this->Html->link('新規登録', ['action' => 'add']) ?></p>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>