<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/Workspace/Grav CMS/grav-skeleton-onepage-site+admin-2.0.0/user/themes/x-corporation/blueprints.yaml',
    'modified' => 1713481724,
    'size' => 3789,
    'data' => [
        'name' => 'X-Corporation',
        'description' => 'Grav Theme based on X-Corporation HTML theme of uiCookies.',
        'version' => '1.3.1',
        'icon' => 'briefcase',
        'author' => [
            'name' => 'Hung Tran',
            'email' => 'flatfiledeveloper@gmail.com',
            'url' => 'https://flatfiledeveloper.com/'
        ],
        'homepage' => 'https://github.com/tranduyhung/grav-theme-x-corporation',
        'demo' => 'https://grav-theme-x-corporation.flatfiledeveloper.com/',
        'keywords' => 'corporate, corporation, theme, template, bootstrap, responsive, html5, uicookies, business, agency, lightweight, fast, company, tech startup, consultancy, firm, creative, studio,',
        'bugs' => 'https://github.com/tranduyhung/grav-theme-x-corporation/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'favicon' => [
                    'type' => 'file',
                    'destination' => 'user/themes/x-corporation/img',
                    'multiple' => false,
                    'accept' => [
                        0 => 'image/*'
                    ],
                    'label' => 'THEME_X_CORPORATION.ADMIN.FAVICON.LABEL',
                    'help' => 'THEME_X_CORPORATION.ADMIN.FAVICON.HELP'
                ],
                'copyright' => [
                    'type' => 'textarea',
                    'label' => 'THEME_X_CORPORATION.ADMIN.COPYRIGHT_TEXT.LABEL',
                    'help' => 'THEME_X_CORPORATION.ADMIN.COPYRIGHT_TEXT.HELP'
                ],
                'logo' => [
                    'type' => 'file',
                    'destination' => 'user/themes/x-corporation/img',
                    'multiple' => false,
                    'accept' => [
                        0 => 'image/*'
                    ],
                    'label' => 'THEME_X_CORPORATION.ADMIN.LOGO.LABEL',
                    'help' => 'THEME_X_CORPORATION.ADMIN.LOGO.HELP'
                ],
                'google_maps_api_key' => [
                    'type' => 'text',
                    'label' => 'THEME_X_CORPORATION.ADMIN.GOOGLE_MAPS_API_KEY.LABEL',
                    'help' => 'THEME_X_CORPORATION.ADMIN.GOOGLE_MAPS_API_KEY.HELP'
                ],
                'footer_icons' => [
                    'type' => 'list',
                    'label' => 'THEME_X_CORPORATION.ADMIN.FOOTER_ICONS.LABEL',
                    'help' => 'THEME_X_CORPORATION.ADMIN.FOOTER_ICONS.HELP',
                    'style' => 'vertical',
                    'fields' => [
                        '.icon' => [
                            'type' => 'text',
                            'label' => 'THEME_X_CORPORATION.ADMIN.FOOTER_ICONS.ICON.LABEL',
                            'placeholder' => 'THEME_X_CORPORATION.ADMIN.FOOTER_ICONS.ICON.HELP'
                        ],
                        '.url' => [
                            'type' => 'text',
                            'label' => 'THEME_X_CORPORATION.ADMIN.FOOTER_ICONS.URL.LABEL',
                            'placeholder' => 'THEME_X_CORPORATION.ADMIN.FOOTER_ICONS.URL.HELP'
                        ]
                    ]
                ],
                'footer_blocks' => [
                    'type' => 'list',
                    'label' => 'THEME_X_CORPORATION.ADMIN.FOOTER_BLOCKS.LABEL',
                    'help' => 'THEME_X_CORPORATION.ADMIN.FOOTER_BLOCKS.DESC',
                    'style' => 'vertical',
                    'fields' => [
                        '.title' => [
                            'type' => 'text',
                            'label' => 'THEME_X_CORPORATION.ADMIN.FOOTER_BLOCKS.TITLE.LABEL',
                            'placeholder' => 'THEME_X_CORPORATION.ADMIN.FOOTER_BLOCKS.TITLE.HELP'
                        ],
                        '.content' => [
                            'type' => 'textarea',
                            'rows' => 5,
                            'label' => 'THEME_X_CORPORATION.ADMIN.CONTENT.LABEL',
                            'placeholder' => 'THEME_X_CORPORATION.ADMIN.CONTENT.HELP'
                        ],
                        '.logo' => [
                            'type' => 'toggle',
                            'toggleable' => false,
                            'label' => 'THEME_X_CORPORATION.ADMIN.FOOTER_BLOCKS.LOGO.LABEL',
                            'help' => 'THEME_X_CORPORATION.ADMIN.FOOTER_BLOCKS.LOGO.HELP',
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ],
                        '.icons' => [
                            'type' => 'toggle',
                            'toggleable' => false,
                            'label' => 'THEME_X_CORPORATION.ADMIN.FOOTER_BLOCKS.ICONS.LABEL',
                            'help' => 'THEME_X_CORPORATION.ADMIN.FOOTER_BLOCKS.ICONS.HELP',
                            'options' => [
                                1 => 'PLUGIN_ADMIN.YES',
                                0 => 'PLUGIN_ADMIN.NO'
                            ],
                            'validate' => [
                                'type' => 'bool'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
