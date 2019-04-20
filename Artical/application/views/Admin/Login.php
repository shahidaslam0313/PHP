<?php include('header.php');?>

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            
            <?php 
              if ($error=$this->session->flashdata('Login_Fialed')):
            ?>
            
           <div class="alert alert-danger"><?php echo $error; ?> </div>
           <?php endif; ?>

            <?php echo form_open('admin/Checklogin', 'class="form-signin"') ?>
              <div class="form-label-group ">
                <!-- <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus> -->
                <?php
                $uname = array(
                        'name'          => 'username',
                        'id'            => 'username',
                        'value'       => set_value('username'),
                        'placeholder'   => 'Username',
                        'type'   => 'text',
                       'class'          =>'form-control'
                );
                
                echo form_input($uname); ?>
                <label for="username">Username</label>
                <?php echo form_error('username'); ?>
              </div>
             
             
             
              <div class="form-label-group">
                <!-- <input type="password" id="pwd" class="form-control" placeholder="Password" required> -->
                <?php
                $pwd = array(
                        'name'          => 'password',
                        'type'          => 'password',
                        'id'            => 'pwd',
                        'value'       => set_value('password'),
                        'placeholder'   => 'Password',
                       'class'          =>'form-control'
                );
                
                echo form_input($pwd); ?>
                <label for="pwd">Password</label>
                <?php echo form_error('password'); ?>
              </div>
              
              
             
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <!-- <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button> -->

              <?php
                $submit = array(
                        'type'  => 'submit',
                        'value' => 'Sign in',
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
              <!-- <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
            <?php echo anchor('admin/Regester','Dont have a account ? Signup Here','class="link-class"') ?>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include('footer.php');?>