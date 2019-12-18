<div class="users index large-4 medium-4 large-offset-4 columns content">
    <div class="panel">
        <h3 class="text-center">SISPRO Registro de Usuário</h3>
        <?= $this->Form->create($user);?>
            <?= $this->Form->input('first_name');?>
            <?= $this->Form->input('last_name');?>
            <?= $this->Form->input('bio');?>
            <?= $this->Form->input('email');?>
            <?= $this->Form->input('password');?>

            <?= $this->Form->submit('Register', array('class' => 'button'));?>
        <?= $this->Form->end();?>
    </div>

</div>
