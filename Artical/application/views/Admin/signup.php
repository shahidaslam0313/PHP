<?php include('header.php');?>

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
          <?php 
    if ($error = $this->session->flashdata('msg')) :
      $msg_class = $this->session->flashdata('msg_class')
      ?>

    <div class="<?= $msg_class?>"><?php echo $error; ?> </div>
    <?php endif; ?>
            <h5 class="card-title text-center">Signup</h5>
           
            <?php echo form_open('Admin/signup', 'class="form-signin"') ?>
            
              <div class="form-label-group ">
              
                <?php
                $firstname = array(
                        'name'          => 'firstname',
                        'id'            => 'fname',
                        'value'         => set_value('firstname'),
                        'placeholder'   => 'First Name',
                        'type'          =>  'text',
                       'class'          =>'form-control'
                );
                
                echo form_input($firstname); ?>
                <label for="fname">First Name</label>
                <?php echo form_error('firstname'); ?>
              </div>

              <div class="form-label-group ">
                <?php
                $lastname = array(
                        'name'          => 'lastname',
                        'id'            => 'lname',
                        'value'         => set_value('lastname'),
                        'placeholder'   => 'Last Name',
                        'type'          =>  'text',
                       'class'          =>'form-control'
                );
                
                echo form_input($lastname); ?>
                <label for="lname">Last Name</label>
                <?php echo form_error('lastname'); ?>
              </div>

              <!-- --------------------- -->
             
              <div class="form-label-group ">
                <?php
                $username = array(
                        'name'          => 'username',
                        'id'            => 'username',
                        'value'         => set_value('username'),
                        'placeholder'   => 'Username',
                        'type'          =>  'text',
                       'class'          =>'form-control'
                );
                
                echo form_input($username); ?>
                <label for="username">Username</label>
                <?php echo form_error('username'); ?>
              </div>

              <!-- ............ -->
              <div class="form-label-group ">
                              <?php
                $email = array(
                        'name'          => 'email',
                        'id'            => 'email',
                        'value'         => set_value('email'),
                        'placeholder'   => 'Email Address',
                        'type'          =>  'email',
                       'class'          =>'form-control'
                );
                
                echo form_input($email); ?>
                <label for="email">Email Address</label>
                <?php echo form_error('email'); ?>
              </div>
             
              <div class="form-label-group">
              
                <?php
                $password = array(
                        'name'          => 'password',
                        'type'          => 'password',
                        'id'            => 'pwd',
                        'value'       => set_value('password'),
                        'placeholder'   => 'Password',
                       'class'          =>'form-control'
                );
                
                echo form_input($password); ?>
                <label for="pwd">Password</label>
                <?php echo form_error('password'); ?>
              </div>
              <!-- <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button> -->

              <?php
                $submit = array(
                        'type'  => 'submit',
                        'value' => 'Signup',
                       'class'  =>'btn btn-lg btn-primary btn-block text-uppercase'
                );
                
                echo form_submit($submit); ?>
                 <?php
                $reset = array(
                        'type'  => 'reset',
                        'value' => 'Reset',
                       'class'  =>'btn btn-lg btn-danger btn-block text-uppercase'
                );
                
                echo form_reset($reset); ?>
              <hr class="my-4">
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include('footer.php');?>