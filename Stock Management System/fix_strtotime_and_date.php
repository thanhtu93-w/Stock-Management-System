<?php
ini_set('display_errors', 0);
// Script to fix strtotime issues and undefined date keys across the project
$all_files = [
    'view_supplier_details.php',
    'view_stock_sales_payments.php',
    'view_stock_sales.php',
    'view_stock_entries_payments.php',
    'view_stock_entries.php',
    'view_stock_details.php',
    'view_payments.php',
    'view_customer_details.php',
    'update_stock_sales.php',
    'update_stock_entries.php',
    'sales_stock_report.php',
    'sales_report.php',
    'purchase_report.php',
    'payment_receipt_print.php',
    'edit_stock_sales.php',
    'edit_purchase.php',
    'all_report.php',
    'add_stock_sales_payments.php',
    'add_stock_sales.php',
    'add_stock_entry.php',
    'add_stock_entries_payments.php',
    'add_sales_print.php',
    'add_purchase.php'
];

foreach ($all_files as $file) {
    if (file_exists($file)) {
        $content = file_get_contents($file);
        
        // Pattern: strtotime($var) -> strtotime((string)($var ?? ''))
        $new_content = preg_replace('/strtotime\s*\(\s*([^)]+)\s*\)/', 'strtotime((string)($1 ?? \'\'))', $content);
        
        // Pattern: $row['date'] -> ($row['date'] ?? '')
        $new_content = preg_replace('/(\$row|\$line)\[[\'"]date[\'"]\]/i', '($1[\'date\'] ?? \'\')', $new_content);

        if ($content !== $new_content) {
            file_put_contents($file, $new_content);
            echo "Fixed: $file\n";
        }
    }
}
?>
