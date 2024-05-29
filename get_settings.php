<?php

// Query Settings
$sql_settings = mysqli_query($mysqli, "SELECT * FROM settings WHERE company_id = 1");
$row = mysqli_fetch_array($sql_settings);

// Database version
DEFINE("CURRENT_DATABASE_VERSION", $row['config_current_database_version']);

// Microsoft OAuth
$config_azure_client_id = $row['config_azure_client_id'];
$config_azure_client_secret = $row['config_azure_client_secret'];

// Mail - SMTP
$config_smtp_host = $row['config_smtp_host'];
$config_smtp_port = intval($row['config_smtp_port']);
$config_smtp_encryption = $row['config_smtp_encryption'];
$config_smtp_username = $row['config_smtp_username'];
$config_smtp_password = $row['config_smtp_password'];
$config_mail_from_email = $row['config_mail_from_email'];
$config_mail_from_name = $row['config_mail_from_name'];
// Mail - IMAP
$config_imap_host = $row['config_imap_host'];
$config_imap_port = intval($row['config_imap_port']);
$config_imap_encryption = $row['config_imap_encryption'];
$config_imap_username = $row['config_imap_username'];
$config_imap_password = $row['config_imap_password'];

// Defaults
$config_start_page = $row['config_start_page'];
$config_default_transfer_from_account = intval($row['config_default_transfer_from_account']);
$config_default_transfer_to_account = intval($row['config_default_transfer_to_account']);
$config_default_payment_account = intval($row['config_default_payment_account']);
$config_default_expense_account = intval($row['config_default_expense_account']);
$config_default_payment_method = $row['config_default_payment_method'];
$config_default_expense_payment_method = $row['config_default_expense_payment_method'];
$config_default_calendar = intval($row['config_default_calendar']);
$config_default_net_terms = intval($row['config_default_net_terms']);
$config_default_hourly_rate = floatval($row['config_default_hourly_rate']);

// Invoice
$config_invoice_prefix = $row['config_invoice_prefix'];
$config_invoice_next_number = intval($row['config_invoice_next_number']);
$config_invoice_footer = $row['config_invoice_footer'];
$config_invoice_from_name = $row['config_invoice_from_name'];
$config_invoice_from_email = $row['config_invoice_from_email'];
$config_invoice_late_fee_enable = intval($row['config_invoice_late_fee_enable']);
$config_invoice_late_fee_percent = floatval($row['config_invoice_late_fee_percent']);

// Recurring Invoices
$config_recurring_prefix = $row['config_recurring_prefix'];
$config_recurring_next_number = intval($row['config_recurring_next_number']);

// Quotes
$config_quote_prefix = $row['config_quote_prefix'];
$config_quote_next_number = intval($row['config_quote_next_number']);
$config_quote_footer = $row['config_quote_footer'];
$config_quote_from_name = $row['config_quote_from_name'];
$config_quote_from_email = $row['config_quote_from_email'];

// Projects
$config_project_prefix = $row['config_project_prefix'];
$config_project_next_number = intval($row['config_project_next_number']);

// Tickets
$config_ticket_prefix = $row['config_ticket_prefix'];
$config_ticket_next_number = intval($row['config_ticket_next_number']);
$config_ticket_from_name = $row['config_ticket_from_name'];
$config_ticket_from_email = $row['config_ticket_from_email'];
$config_ticket_email_parse = intval($row['config_ticket_email_parse']);
$config_ticket_client_general_notifications = intval($row['config_ticket_client_general_notifications']);
$config_ticket_autoclose = intval($row['config_ticket_autoclose']);
$config_ticket_autoclose_hours = intval($row['config_ticket_autoclose_hours']);
$config_ticket_new_ticket_notification_email = $row['config_ticket_new_ticket_notification_email'];

// Cron
$config_enable_cron = intval($row['config_enable_cron']);
$config_cron_key = $row['config_cron_key'];

// Alerts & Notifications
$config_recurring_auto_send_invoice = intval($row['config_recurring_auto_send_invoice']);
$config_enable_alert_domain_expire = intval($row['config_enable_alert_domain_expire']);
$config_send_invoice_reminders = intval($row['config_send_invoice_reminders']);
$config_invoice_overdue_reminders = intval($row['config_invoice_overdue_reminders']);

// Online Stripe Payment
$config_stripe_enable = intval($row['config_stripe_enable']);
$config_stripe_publishable = $row['config_stripe_publishable'];
$config_stripe_secret = $row['config_stripe_secret'];
$config_stripe_account = intval($row['config_stripe_account']);
$config_stripe_expense_vendor = intval($row['config_stripe_expense_vendor']);
$config_stripe_expense_category = intval($row['config_stripe_expense_category']);
$config_stripe_percentage_fee = floatval($row['config_stripe_percentage_fee']);
$config_stripe_flat_fee = floatval($row['config_stripe_flat_fee']);
$config_stripe_client_pays_fees = intval($row['config_stripe_client_pays_fees']);

// AI Provider Details
$config_ai_enable = intval($row['config_ai_enable']);
$config_ai_provider = $row['config_ai_provider'];
$config_ai_model = $row['config_ai_model'];
$config_ai_url = $row['config_ai_url'];
$config_ai_api_key = $row['config_ai_api_key'];

// Modules
$config_module_enable_itdoc = intval($row['config_module_enable_itdoc']);
$config_module_enable_ticketing = intval($row['config_module_enable_ticketing']);
$config_module_enable_accounting = intval($row['config_module_enable_accounting']);
$config_client_portal_enable = intval($row['config_client_portal_enable']);

// Login
$config_login_message = $row['config_login_message'];
$config_login_key_required = $row['config_login_key_required'];
$config_login_key_secret = $row['config_login_key_secret'];
$config_login_remember_me_expire = intval($row['config_login_remember_me_expire']);

// Locale
$config_currency_format = "US_en";
$config_timezone = $row['config_timezone'];

// Theme
$config_theme = $row['config_theme'];
$config_theme_mode = "dark_mode";

// Telemetry
$config_telemetry = intval($row['config_telemetry']);

// Destructive Deletes
$config_destructive_deletes_enable = intval($row['config_destructive_deletes_enable']);


// Select Arrays

$theme_colors_array = array (
    'lightblue',
    'blue',
    'green',
    'cyan',
    'yellow',
    'red',
    'black',
    'gray',
    'indigo',
    'navy',
    'purple',
    'fuchsia',
    'pink',
    'maroon',
    'orange',
    'teal',
    'olive'
);

$colors_array = array (
    'lightblue',
    'blue',
    'green',
    'cyan',
    'yellow',
    'red',
    'black',
    'gray-dark',
    'gray',
    'light',
    'indigo',
    'navy',
    'purple',
    'fuchsia',
    'pink',
    'maroon',
    'orange',
    'lime',
    'teal',
    'olive'
);

$net_terms_array = array (
    '0'=>'On Receipt',
    '7'=>'7 Days',
    '10'=>'10 Days',
    '14'=>'14 Days',
    '15'=>'15 Days',
    '30'=>'30 Days',
    '60'=>'60 Days',
    '90'=>'90 Days'
);

$records_per_page_array = array ('5','10','15','20','30','50','100');

include_once "settings_localization_array.php";


$category_types_array = array (
    'Expense',
    'Income',
    'Payment Method',
    'Referral'
);

$asset_types_array = array (
    'X-Ray Extra Oral' => 'fa-radiation',
    'X-Ray Intra Oral' => 'fa-radiation',
    'Intra Oral Scanner' => 'fa-radiation',
    'Intra Oral Camera' => 'fa-camera',
    'Server'=>'fa-server',
    'Workstation'=>'fa-desktop',
    'DI Acquisition PC'=>'fa-desktop',
    'IT Other'=>'fa-ethernet',
    'Software'=>'fa-save'
);

// Populates the drop-down list for asset manufacturers
$asset_makes_array = array (
    'Acteon',
    'Carestream',
    'Dexis',
    'iTero',
    'Dell',
    'HP',
    'Lenovo',
    '360o Custom',
    'Other'
);

// Populates the drop-down for model (IF Extra Oral type selected)
$asset_model_extraoral_array = array (
    'CS 8000',
    'CS 8000C',
    'CS 9000',
    'CS 9000c',
    'CS 8100 2d',
    'CS 8100 3d',
    'CS 8100 3d SC',
    'CS 8200 Neo 3d',
    'CS 8200 Neo 3d SC',
    'CS 8200 Access',
    'CS 8200 Access SC',
    'CS 9600',
    'CS 9600 SC',
    'Prime 2d',
    'Prime 3d',
);

// Populates the drop-down for model (IF Intra Oral type selected)
$asset_model_intraoral_array = array (
    '2100',
    '2200',
    'X-Mind Unity',
    'X-Mind DC',
    'CS 7600',
    'CS 7200',
    'PS Pix',
    'CS 5100 #1',
    'CS 5100 #2',
    'CS 5200 #1',
    'CS 5200 #2',
    'CS 6100 #1',
    'CS 6100 #2',
    'CS 6200 #1',
    'CS 6200 #2',
);

// Populates the drop-down for model (IF Intra Oral scanner type selected)
$asset_model_intraoralscan_array = array (
    'CS 3600',
    'CS 3700',
    'CS 3800 Wireless',
    'Dexis 3800 Wired',
    'Dexis 3800 Wireless',
    'ITero Flex CPO',
    'iTero Flex',
    'iTero 5d',
);

// Populates the drop-down for model (IF Intra Oral camera type selected)
$asset_model_intraoralcam_array = array (
    'CS 1200',
    'CS 1500',
    'Acteon C50',
    'Acteon Sporo',
);

// Populates the drop-down for model (IF Server type selected)
$asset_model_server_array = array (
    'Rack Mount',
    'Tower',
    'Other',
);

// Populates the drop-down for model (IF Workstation type selected)
$asset_model_workstation_array = array (
    'Mico Tower',
    'SFF',
    'Tower',
    'Notebook',
    'AOI',
    'Tablet',
    'Other',
);

// Populates the drop-down for model (IF DI Acquisition PC type selected)
$asset_model_dia_array = array (
    '3d (Prime Dell)',
    '3d Custom',
    '2d',
    '2d for SC',
    'Other Custom',
);

// Populates the drop-down for model (IF IT Other type selected)
$asset_model_itother_array = array (
    'Network Switch',
    'Printer',
    'Monitor',
    'Keyboard/Mouse',
    'Tablet',
    'Scanner',
    'Other'
);

// Populates the drop-down for model (IF Software type selected)
$asset_model_software_array = array (
    'Orthobridge',
    'Orthotrac',
    'CSI',
    'AIS',
    'Other'
);

//    Original
//    'Laptop'=>'fa-laptop',
//    'Desktop'=>'fa-desktop',
//    'Server'=>'fa-server',
//    'Phone'=>'fa-phone',
//    'Mobile Phone'=>'fa-mobile-alt',
//    'Tablet'=>'fa-tablet-alt',
//    'Firewall/Router'=>'fa-network-wired',
//    'Switch'=>'fa-network-wired',
//    'Access Point'=>'fa-wifi',
//    'Printer'=>'fa-print',
//    'Camera'=>'fa-video',
//    'TV'=>'fa-tv',
//    'Virtual Machine'=>'fa-cloud',
//    'Other'=>'fa-tag'


$software_types_array = array (
    'SaaS',
    'Application',
    'Mobile',
    'System Software',
    'Operating System',
    'Misc'
);

$license_types_array = array (
    'Device',
    'User'
);

$document_types_array = array (
    '0'=>'Document',
    '1'=>'Template',
    '2'=>'Global Template'
);

$asset_status_array = array (
    'Ready to Deploy',
    'Deployed',
    'Out for Repair',
    'Lost',
    'Stolen',
    'Retired'
);

$ticket_status_array = array (
    'Open',
    'On Hold',
    'Auto Close',
    'Closed'
);

$industry_select_array = array(
    "Accounting",
    "Agriculture",
    "Automotive",
    "Construction",
    "Education",
    "Entertainent",
    "Finance",
    "Government",
    "Healthcare",
    "Hospititality",
    "Information Technology",
    "Insurance",
    "Pharmacy",
    "Law",
    "Manufacturing",
    "Marketing & Advertising",
    "Military",
    "Non-Profit",
    "Real Estate",
    "Retail",
    "Services",
    "Transportation",
    "Other" // An 'Other' option for industries not listed
);

$start_page_select_array = array (
    'dashboard.php'=>'Dashboard',
    'clients.php'=> 'Client Management',
    'tickets.php'=> 'Support Tickets',
    'invoices.php' => 'Invoices'
);

