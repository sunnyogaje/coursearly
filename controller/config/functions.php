<?php
// Global functions for the application can be defined here.

// Global helper functions for the application

/**
 * Sanitizes user input to prevent XSS attacks.
 * @param string $data The input data.
 * @return string The sanitized data.
 */
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/**
 * Redirects the user to a specified URL.
 * @param string $url The URL to redirect to.
 */
function redirect($url) {
    header("Location: " . $url);
    exit();
}


/**
 * Formats a number as currency for display.
 * @param float $price The price to format.
 * @return string The formatted price string.
 */
function format_price($price, $icon) {
    return $icon . number_format($price, 2);
}
