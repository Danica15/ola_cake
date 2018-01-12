<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Registrar Usuario'); ?></legend>
        <?php echo $this->Form->input('Nombre de usuario');
        echo $this->Form->input('Contraseña');
        echo $this->Form->input('Rol', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('REGISTRARSE')); ?>
</div>