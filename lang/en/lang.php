<?php return [
    'plugin' => [
        'name' => 'Notice',
        'description' => 'Plugin to display notices per category'
    ],
    'components' => [
        'list_title' => 'Notice list',
        'list_description' => 'List active notice items',
        'list_sorting' => 'Sorting',
        'list_sort_column' => 'Column',
        'list_sort_column_description' => 'Column to sort on',
        'list_sort_direction' => 'Direction',
        'list_order_direction_asc' => 'asc',
        'list_order_direction_desc' => 'desc'
    ],
    'create_category' => 'Create Category',
    'action' => [
        'record' => [
            'menu' => 'Records',
            'menu-create' => 'New Record',
            'deleted-success' => 'Succesfully deleted those records'
        ],
        'category' => [
            'menu' => 'Categories',
            'deleted-success' => 'Succesfully deleted those categories'
        ]
    ],
    'record' => [
        'id' => 'Id',
        'title' => 'Title',
        'category' => 'Category',
        'show_home' => 'Show on homepage',
        'published' => 'Published',
        'section' => 'Section',
        'calendar' => 'Calendar',
        'news' => 'News',
        'download' => 'Download',
        'date' => 'Date',
        'link' => 'Link (optional)',
        'message' => 'Message',
        'image' => 'Image',
        'file' => 'File',
        'sort_order' => 'Sort Order',
    ],
    'category' => [
        'name' => 'Name',
        'slug' => 'Slug',
        'record_count' => 'Number of records'
    ],
    'permissions' => [
        'records' => [
            'tab' => 'Adjust notice',
            'label' => 'Adjust notice'
        ]
    ]

];
