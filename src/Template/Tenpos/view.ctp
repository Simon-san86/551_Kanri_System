
<h1><?= h($tenpo->name) ?></h1>
<p><?= h($tenpo->open->i18nFormat('HH:mm')) ?>～<?= h($tenpo->closed->i18nFormat('HH:mm')) ?></p>
<p><?= h($tenpo->holiday) ?></p>
<p>〒<?= h($tenpo->zip) ?></p>
<p><?= h($tenpo->address) ?></p>
<p><?= h($tenpo->tel) ?></p>

<p><?= $this->Html->link("Back", ['action' => 'index']) ?></p>
<p><?= $this->Html->link("編集", ['action' => 'edit', $tenpo->id]) ?></p>