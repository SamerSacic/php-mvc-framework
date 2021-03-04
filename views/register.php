<h1 class="mt-5">Create an account</h1>
<?php  $form = \app\core\form\Form::begin('', 'post'); ?>
    <?php echo $form->field($model, 'first_name'); ?>
    <?php echo $form->field($model, 'last_name'); ?>
    <?php echo $form->field($model, 'email'); ?>
    <?php echo $form->field($model, 'password')->passwordField(); ?>
    <?php echo $form->field($model, 'password_confirm')->passwordField(); ?>
    <button type="submit" class="btn btn-primary">Register</button>
<?php \app\core\form\Form::end(); ?>
