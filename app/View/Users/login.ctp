<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Por favor, ingrese su usuario y contraseña'); ?>
        </legend>
        <?php echo $this->Form->input('Usuario');
        echo $this->Form->input('Contraseña');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('ENTRAR')); ?>
</div>