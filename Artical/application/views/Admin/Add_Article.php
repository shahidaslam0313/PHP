<?php include('header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-sm-4 col-lg-5 mx-auto">
            <h1>Add Article</h1>
            
            <?php echo form_open('admin/Addarticle') ?>
            <?php echo form_hidden('user_id',$this->session->userdata("id")); ?>
            <div class="form-label-group ">
                <!-- <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus> -->
                <?php
                $title = array(
                  'name'          => 'article_title',
                  'id'            => 'title',
                  'value'         => set_value('article_title'),
                  'placeholder'   => 'Title',
                  'type'          => 'text',
                  'class'         => 'form-control'
                );

                echo form_input($title); ?>
                <label for="title">Title</label>
                <?php echo form_error('article_title'); ?>
            </div>
      
            <div class="form-label-group ">
                <?php
                $art_body = array(
                  'name'          => 'article_body',
                  'type'          => 'text',
                  'id'            => 'art_body',
                  'value'       => set_value('article_body'),
                  'placeholder'   => 'Artical Body',
                  'class'          => 'form-control'
                );

                echo form_textarea($art_body); ?>
                <!-- <label for="art_body">Password</label> -->
                <?php echo form_error('article_body'); ?>
            </div>
                
                <?php
                $submit = array(
                        'type'  => 'submit',
                        'value' => 'Add Artical',
                       'class'  =>'btn  btn-success btn-block text-uppercase'
                );
                
                echo form_submit($submit); ?>
                 <?php
                $reset = array(
                        'type'  => 'reset',
                        'value' => 'Reset',
                       'class'  =>'btn  btn-danger btn-block text-uppercase'
                );
                
                echo form_reset($reset); ?>
              
        </div>
    </div>
</div>

<?php include('footer.php'); ?> 