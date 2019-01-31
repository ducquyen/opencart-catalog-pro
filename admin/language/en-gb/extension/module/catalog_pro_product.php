<?php
// Heading
$_['heading_title']         = 'Products';

// Text
$_['text_config_not_found'] = 'Configuration file not found. Enter the module settings and click "Save."';
$_['text_success_save_title'] = 'Save';
$_['text_success_save']     = 'Changes saved';
$_['text_image_note']       = '<span class="label label-warning">Important!</span> Images are sorted by drag and drop.';
$_['text_more_two_categories'] = 'More than 2 categories selected';

// Columns
$_['column_product_id']     = 'ID';
$_['column_name']           = 'Name';
$_['column_image']          = 'Image';
$_['column_model']          = 'Model';
$_['column_price']          = 'Price';
$_['column_quantity']       = 'Quantity';
$_['column_status']         = 'Status';
$_['column_sku']            = 'SKU';
$_['column_category']       = 'Category';
$_['column_actions']        = '';

// action buttons
$_['action_buttons']        = array (
    'main' => 'General',
    'data' => 'Data',
    'link' => 'Links',
    'attrs' => 'Attribute',
    'options' => 'Option',
    'discount' => 'Discount',
    'bonus' => 'Special',
    'seo' => 'SEO',
    'design' => 'Design',
);

// action buttons
$_['modal']        = array (
    'title' => array(
        'main' => 'General',
        'data' => 'Data',
        'link' => 'Links',
        'attrs' => 'Attribute',
        'options' => 'Option',
        'discount' => 'Discount',
        'bonus' => 'Special',
        'seo' => 'SEO',
        'design' => 'Design',
    ),
    'fields' => array(
        'name' => 'Product Name',
        'description' => 'Description',
        'meta_title' => 'Meta Tag Title',
        'meta_description' => 'Meta Tag Description',
        'meta_keywords' => 'Meta Tag Keywords',
        'tags' => 'Product Tags',
        'model' => 'Model',
        'sku' => 'SKU (Stock Keeping Unit)',
        'upc' => 'UPC (Universal Product Code)',
        'ean' => 'EAN (European Article Number)',
        'jan' => 'JAN (Japanese Article Number)',
        'isbn' => 'ISBN (International Standard Book Number)',
        'mpn' => 'MPN (Manufacturer Part Number)',
        'location' => 'Location',
        'price' => 'Price',
        'tax_class_id' => 'Tax Class',
        'quantity' => 'Quantity',
        'minimum' => 'Minimum Quantity',
        'subtract' => 'Subtract Stock',
        'stock_status_id' => 'Out Of Stock Status',
        'shipping' => 'Requires Shipping',
        'date_available' => 'Date Available',
        'length' => 'Length',
        'width' => 'Width',
        'height' => 'Height',
        'length_class_id' => 'Length Class',
        'weight' => 'Weight',
        'weight_class_id' => 'Weight Class',
        'status' => 'Status',
        'sort_order' => 'Sort Order',
        'manufacturer' => 'Manufacturer',
        'category' => 'Categories',
        'filter' => 'Filters',
        'stores' => 'Stores',
        'downloads' => 'Downloads',
        'related' => 'Related Products',
    ),
    'notes' => array (
        'tags' => 'To add a tag, enter its data and press Enter',
        'minimum' => 'The minimum quantity of goods in the order (less than this quantity of goods, adding to the basket will be prohibited)',
        'stock_status_id' => 'The status is shown when the item is out of stock.',
    ),
    'text' => array (
        'yes' => 'Yes',
        'no' => 'No',
        'status_yes' => 'Enabled',
        'status_no' => 'Disabled',
    ),
);

// DataTable
$_['datatable_empty_table'] = 'No data available';
$_['datatable_info']        = 'Displays entries from _START_ to _END_ (from _TOTAL_ entries)';
$_['datatable_info_empty']  = 'Showing records from 0 to 0 (of 0 records)';
$_['datatable_info_filtered'] = '(filtered from _MAX_ records)';
$_['datatable_info_post_fix'] = '';
$_['datatable_thousands']   = '.';
$_['datatable_length_menu'] = 'Display _MENU_ records';
$_['datatable_loading']     = 'Loading...';
$_['datatable_processing']  = 'Processing...';
$_['datatable_search']      = 'Search:';
$_['datatable_zero_records'] = 'No matches found';
$_['datatable_sort_asc']    = ' activate to sort the column in ascending order';
$_['datatable_sort_desc']   = ' activate to sort the column descending';

// Status values
$_['status_yes']            = 'Enable';
$_['status_no']             = 'Disable';
$_['filter_status_yes']     = 'Enabled';
$_['filter_status_no']      = 'Disabled';

// Edit text
$_['edit']                  = array (
    'title' => array (
        'name' => 'Name',
        'model' => 'Model',
        'sku' => 'Sku',
        'price' => 'Price',
        'quantity' => 'Quantity of products',
        'image' => 'Product Image',
        'category' => 'Category',
    ),
    'buttons' => array (
        'cancel' => 'Cancel',
        'save' => 'Save',
        'remove' => 'Remove',
    ),
    'price' => array (
        'current' => 'Price:',
        'specials' => 'Promotions:',
        'special_add' => 'Add promotion',
        'table' => array(
            'group' => 'Customer group',
            'priority' => 'A priority',
            'price' => 'Price',
            'date_from' => 'Start date',
            'date_to' => 'End date',
        ),
    ),
    'image' => array (
        'current' => 'Main image:',
        'additional' => 'Additional Images:',
        'image_add' => 'Add image',
        'table' => array(
            'image' => 'Image',
            'sort' => 'The sort order',
        ),
    ),
);


// Validation
$_['validate']              = array (
    'title' => 'Data error',
    'action' => 'Required parameter not passed "action"',
    'id' => 'Product with this ID was not found in the store database',

    'name.min' => 'Name must be longer than {{limit}} characters',
    'name.max' => 'Name should not be longer {{limit}} characters',
    'name.required' => 'Name is required',

    'model.min' => 'The value of the field "Model" must be longer than {{limit}} characters',
    'model.max' => 'The value of the field "Model" must not be longer than {{limit}} characters',
    'model.required' => 'The field "Model" is required',

    'sku.min' => 'The value of the field "SKU" must be longer than {{limit}} characters',
    'sku.max' => 'The value of the field "SKU" should not be longer {{{limit}} characters',

    'quantity.min' => 'The value of the field "Quantity" must be greater than {{limit}}',
    'quantity.required' => 'The field "Quantity" is required',
    'quantity.invalid' => 'The field "Quantity" must be a number',

    'price.min' => 'The value of the field "Price" must be greater {{limit}}',
    'price.required' => 'The field "Price" is required',
    'price.invalid' => 'The field "Price" must be a number',

    'price_special.min' => 'The value of the field "Promotion price" must be greater than {{limit}}',
    'price_special.required' => 'The field "Promotion price" is required',
    'price_special.invalid' => 'The field "Promotion price" must be a number',

    'priority.min' => 'The value of the field "Priority of the promotion" must not be less than {{limit}}',
    'priority.invalid' => 'The field "Priority of the promotion" must be a number',

    'date_start.max' => 'The field "Start date of the promotion" must not exceed the filled field "End date of the action" and "2100-01-01"',
    'date_start.invalid' => 'The field "Start date of the promotion" must be a date in the format YYYY-MM-DD',
    'date_end.min' => 'The field "End date of the promotion" must be at least the filled field "Date of the start of the action" and "1900-01-01"',
    'date_end.invalid' => 'The field "End Date of promotion" must be a date in the format YYYY-MM-DD',

    'sort_order.min' => 'The value of the "Sort Order" field must be greater than {{limit}}',
    'sort_order.required' => 'The "Sort Order" field is required',
    'sort_order.invalid' => 'The "Sort Order" field must be a number',

    'meta_title.min' => 'The meta tag "Title" must be longer than {{limit}} characters',
    'meta_title.max' => 'The meta tag "Title" should not be longer {{limit}} characters',
    'meta_title.required' => 'Meta-tag "Title" is required to fill',

    'meta_description.max' => 'The meta tag "Description" must not be longer {{limit}} characters',
    'meta_keyword.max' => 'Meta tag "Keyword" should not be longer {{limit}} characters',

    'upc.max' => 'The value of the "UPC" field must not be longer than {{limit}} characters',
    'ean.max' => 'The value of the "EAN" field must not be longer than {{limit}} characters',
    'jan.max' => 'The value of the "JAN" field must not be longer than {{limit}} characters',
    'isbn.max' => 'The value of the "ISBN" field must not be longer than {{limit}} characters',
    'mpn.max' => 'The value of the "MPN" field must not be longer than {{limit}} characters',

    'location.max' => 'The value of the field "Location" should not be longer than {{limit}} characters',

    'tax_class_id.in' => 'The value of the field "Tax Class" is filled incorrectly',

    'minimum.min' => 'The value of the field "Minimum Quantity" must be at least {{limit}} characters',
    'minimum.required' => 'The field "Minimum Quantity" is required',
    'minimum.invalid' => 'The field "Minimum Quantity" must be a number',

    'stock_status_id.in' => 'The value of the "Out Of Stock Status" field is incorrect',
    'shipping.in' => 'The value of the "Requires Shipping" field is incorrect',
    'length_class_id.in' => 'The value of the "Length Class" field is incorrect',
    'weight_class_id.in' => 'The value of the "Weight Class" field is incorrect',
    'status.in' => 'The value of the field "Status" is filled incorrectly.',

    'date_available.invalid' => 'The "Date Available" field must be a date in the format YYYY-MM-DD',

    'length.min' => 'The value of the field "Length" must be at least {{limit}} characters',
    'length.invalid' => 'The field "Length" must be a number',
    'width.min' => 'The value of the field "Width" must be at least {{limit}} characters',
    'width.invalid' => 'The field "Width" must be a number',
    'height.min' => 'The value of the field "Height" must be at least {{limit}} characters',
    'height.invalid' => 'The field "Height" must be a number',
    'weight.min' => 'The value of the field "Weight" must be at least {{limit}} characters',
    'weight.invalid' => 'The field "Weight" must be a number',

    'manufacturer.in' => 'The value of the "Manufacturer" field is incorrect',
    'filters.in' => 'The value of the "Filters" field is incorrect',
    'stores.in' => 'The value of the "Stores" field is incorrect',
    'downloads.in' => 'The value of the "Downloads" field is incorrect',
    'category.in' => 'The value of the "Categories" field is incorrect',

);
