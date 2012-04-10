<h2>Register</h2>
<hr>
<div class="row-fluid">
        <div class="span6">
                <?php
                echo $this->Form->create
                        (
                        'User', array
                    (
                    'url' => array
                        (
                        'controller' => 'users',
                        'action' => 'register'
                    ),
                    'class' => 'form-horizontal'
                        )
                );

                echo $this->TwitterBootstrap->input(array(
                    "field" => "username",
                    "input" => $this->Form->text("username"),
                    "help_inline" => "*",
                    "help_block" => "Enter your username here."
                ));

                echo $this->TwitterBootstrap->input(array(
                    "field" => "password",
                    "input" => $this->Form->text("password"),
                    "help_inline" => "*",
                    "help_block" => "Enter your password here."
                ));
                ?>

                <div class="form-actions">
                        <?php echo $this->Form->submit('Register', array('class' => 'btn btn-primary', 'div' => false)); ?>
                        <?php echo $this->Form->button('Cancel', array('class' => 'btn')); ?>
                </div>
                <?php echo $this->Form->end(); ?>
        </div>
</div>
