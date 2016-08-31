<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __("ユーザーネームとパスワードを入れて下さい。") ?></legend>
        <?= $this->Form->input('username', array('label'=>'ユーザーネーム')) ?>
        <?= $this->Form->input('password', array('label'=>'パスワード')) ?>
    </fieldset>
<?= $this->Form->button(__('ログイン')); ?>
<?= $this->Form->end() ?>
</div>