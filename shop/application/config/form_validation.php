<?php

$config = [
    // 'Add_article_rules' => [
    //     [
    //         'field'  => 'article_title',
    //         'label'  => 'Article Title',
    //         'rules'  => 'required'
    //     ],
    //     [
    //         'field'  => 'article_body',
    //         'label'  => 'Article Body',
    //         'rules'  => 'required'
    //     ]
    // ],
    'Signup_rules' => [
        [
            'field'  => 'firstname',
            'label'  => 'First Name',
            'rules'  => 'trim|required'
        ],
        [
            'field'  => 'lastname',
            'label'  => 'Last Name',
            'rules'  => 'trim|required'
        ],
        [
            'field'  => 'username',
            'label'  => 'Username',
            'rules'  => 'trim|required|is_unique[signup.username]'
        ],
        [
            'field'  => 'phone_number',
            'label'  => 'Phone Number',
            'rules'  => 'required'
        ],
        [
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required'
        ],
        [
            'field' => 'confirm_password',
            'label' => 'Confirm Password',
            'rules' => 'required'
        ]
    ]
    // 'Signin_rules' => [
    //     [
    //         'field'  => 'username',
    //         'label'  => 'Username',
    //         'rules'  => 'required'
    //     ],
    //     [
    //         'field'  => 'password',
    //         'label'  => 'Password',
    //         'rules'  => 'required'
    //     ]
    // ]
];
