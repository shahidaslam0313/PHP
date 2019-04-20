<?php

$config = [
    'Add_article_rules' => [
        [
            'field'  => 'article_title',
            'label'  => 'Article Title',
            'rules'  => 'required'
        ],
        [
            'field'  => 'article_body',
            'label'  => 'Article Body',
            'rules'  => 'required'
        ]
    ],
    'Signup_rules' => [
        [
            'field'  => 'firstname',
            'label'  => 'First Name',
            'rules'  => 'required'
        ],
        [
            'field'  => 'lastname',
            'label'  => 'Last Name',
            'rules'  => 'required'
        ],
        [
            'field'  => 'username',
            'label'  => 'Username',
            'rules'  => 'required|is_unique[users.username]'
        ],
        [
            'field'  => 'email',
            'label'  => 'Email Address',
            'rules'  => 'required|valid_email|is_unique[users.email]'
        ],
        [
            'field'  => 'password',
            'label'  => 'Password',
            'rules'  => 'required|min_length[5]|max_length[12]'
        ]
    ],
    'Signin_rules' => [
        [
            'field'  => 'username',
            'label'  => 'Username',
            'rules'  => 'required'
        ],
        [
            'field'  => 'password',
            'label'  => 'Password',
            'rules'  => 'required'
        ]
    ]
];
