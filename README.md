# October CMS Notice plugin

## About

This is a Notice plugin for [October CMS](https://octobercms.com).
It can be used to show calendar, news, or downloadable notices per category.

## Supported fields

**Records**
id, category_id, title, show_home, section, date, link, message, media, published, sort_order

**Categories**
id, slug, parent_id, nest_left, nest_right, nest_depth

## Features

- Notice by category, Notice by section, Notice list
- Upload multiple files (File Manager file)
- Upload single image  (File Manager image)
- Select image (Media Manger)
- Sorting
- Snippets

## How to use

- Under your October CMS plugins directory create a directory called: fes/notice
- Checkout this repository

# noticeByCategory component

Use the **noticeByCategory** component to list active notice items by category

* **noRecordsMessage** - No records message
* **sortColumn** - Column to sort on
* **sortDirection** - Direction to sort asc|desc
* **categoryId** - Category to display

The component has the following properties:

# noticeBySection component

Use the **noticeBySection** component to list active notice items by section

The component has the following properties:

* **noRecordsMessage** - No records message
* **sortColumn** - Column to sort on
* **sortDirection** - Direction to sort asc|desc
* **section** - Section to display

# noticeList component

Use the **noticeList** component to list active notice items

The component has the following properties:

* **noRecordsMessage** - No records message
* **sortColumn** - Column to sort on
* **sortDirection** - Direction to sort asc|desc

> **Note**: noticeByCategory, noticeBySection and noticeList are also available as snippets
