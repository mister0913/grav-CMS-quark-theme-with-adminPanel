<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/Workspace/Grav CMS/grav-skeleton-onepage-site+admin-2.0.0/user/pages/02.blog/blog.md',
    'modified' => 1713661380,
    'size' => 225,
    'data' => [
        'storage_key' => '02.blog',
        'header' => [
            'title' => 'Blog',
            'hero_classes' => 'parallax text-light',
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'limit' => 5,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'pagination' => true,
                'url_taxonomy_filters' => true
            ]
        ],
        'root' => false,
        'frontmatter' => 'title: Blog
hero_classes: parallax text-light
content:
    items:
        - \'@self.children\'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true',
        'markdown' => '#Blog Post',
        'slug' => 'blog',
        'name' => 'blog.md'
    ]
];
