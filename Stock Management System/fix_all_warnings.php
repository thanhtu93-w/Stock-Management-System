<?php
$files = [
    'view_supplier_details.php',
    'view_stock_sales_payments.php',
    'view_stock_sales.php',
    'view_stock_entries_payments.php',
    'view_stock_entries.php',
    'view_stock_details.php',
    'view_stock_availability.php',
    'view_payments.php',
    'view_customer_details.php'
];

foreach ($files as $file) {
    if (file_exists($file)) {
        $content = file_get_contents($file);
        
        // Sửa $limit = $_GET['limit'];
        $new_content = str_replace('$limit=$_GET[\'limit\'];', '$limit=isset($_GET[\'limit\']) ? $_GET[\'limit\'] : 10;', $content);
        $new_content = str_replace('$limit = $_GET[\'limit\'];', '$limit = isset($_GET[\'limit\']) ? $_GET[\'limit\'] : 10;', $new_content);

        // Đảm bảo dấu nháy cho ['num'] (nếu còn sót)
        $new_content = str_replace('$total_pages[num]', '$total_pages[\'num\']', $new_content);

        if ($content !== $new_content) {
            file_put_contents($file, $new_content);
            echo "Updated $file\n";
        }
    }
}
?>
