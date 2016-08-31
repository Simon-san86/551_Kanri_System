<h1>新店舗の登録</h1>
<?php

	echo $this->Form->create($tenpo);
	echo $this->Form->input('name');
	echo $this->Form->input('open');
	echo $this->Form->input('closed');
	echo $this->Form->input('holiday');
	echo $this->Form->input('zip');
	echo $this->Form->input('area');
	echo $this->Form->input('district');
	echo $this->Form->input('address');
	echo $this->Form->input('tel');
	echo $this->Form->button(__('実行'));
	echo $this->Form->end();

?>