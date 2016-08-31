<h1>検索</h1>

<?php

	echo $this->Form->create();
	echo $this->Form->input('地区', array(
		'options' => array(
			'なんば・心斎橋・天王寺地区',
			'梅田・北大阪地区',
			'近鉄沿線・奈良地区',
			'阪急沿線・神戸地区',
			'京阪沿線・京都・滋賀地区',
			'ユニバーサルシティ地区',
			'南海沿線・和歌山地区'
			)
		)
	);
	echo $this->Form->button(__('実行'));
	echo $this->Form->end();

?>

<h2>結果</h2>
<table>
	<tr>
		<th>Id</th>
		<th>店舗</th>
		<th>定休日</th>
		<th>電話番号</th>
		<th>その地</th>
	</tr>
	<?php foreach ($tenpos as $tenpo): ?>
	<tr>
		<td><?= $tenpo->id ?></td>
		<td><?= $this->Html->link($tenpo->name, ['action' => 'view', $tenpo->id]) ?></td>
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