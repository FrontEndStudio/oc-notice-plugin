<?php return [
    'plugin' => [
        'name' => 'Notice',
        'description' => 'Plugin to display notices per category'
    ],
    'components' => [
        'by_category_name' => 'Notice by category',
        'by_category_description' => 'List active notice items by category',
        'by_section_name' => 'Notice by section',
        'by_section_description' => 'List active notice items by section',
        'list_name' => 'Notice list',
        'list_description' => 'List active notice items',

        'sorting' => 'Sorting',
        'sort_column' => 'Column',
        'sort_column_description' => 'Column to sort on',
        'sort_direction' => 'Direction',
        'order_direction_asc' => 'asc',
        'order_direction_desc' => 'desc',
        'no_records' => 'No records message',
        'no_records_description' => 'Message to display in the list in case if there are no records. Used in the default component\'s partial.',
        'no_records_default' => 'No records found',
        'category_id' => 'Category',
        'category_id_description' => 'Category to display',
        'section' => 'Section',
        'section_description' => 'Section to display'
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
        'link' => 'Link',
        'date' => 'Date',
        'message' => 'Message',
        'image' => 'Image',
        'file' => 'File',
        'sort_order' => 'Sort Order'
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
