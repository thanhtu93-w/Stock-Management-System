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
        // Chuyển $page = $_GET['page']; thành $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $new_content = str_replace('$page = $_GET[\'page\'];', '$page = isset($_GET[\'page\']) ? $_GET[\'page\'] : 1;', $content);
        if ($content !== $new_content) {
            file_put_contents($file, $new_content);
            echo "Fixed $file\n";
        } else {
            echo "Already fixed or not found in $file\n";
        }
    }
}
?>
