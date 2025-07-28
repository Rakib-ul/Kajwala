<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

// Get data from form
$_SESSION['total_amount'] = $_POST['amount'];
$_SESSION['customer_name'] = $_POST['customer_name'];
$_SESSION['customer_phone'] = $_POST['customer_phone'];
$_SESSION['customer_address'] = $_POST['customer_address'];
$_SESSION['customer_email'] = $_POST['customer_email'];

// Check amount
if (!isset($_SESSION['total_amount']) || empty($_SESSION['total_amount'])) {
    die("Total amount not set.");
}

$cus_name    = $_SESSION['customer_name'];
$cus_phone   = $_SESSION['customer_phone'];
$cus_address = $_SESSION['customer_address'];
$cus_email   = $_SESSION['customer_email'];

$post_data = array();
$post_data['store_id']       = "skill68871a8e36e60";
$post_data['store_passwd']   = "skill68871a8e36e60@ssl";
$post_data['total_amount']   = $_SESSION['total_amount'];
$post_data['currency']       = "BDT";
$post_data['tran_id']        = "SSLCZ_" . uniqid();

$post_data['success_url']    = "http://localhost/new_sslcz_gw/success.php";
$post_data['fail_url']       = "http://localhost/new_sslcz_gw/fail.php";
$post_data['cancel_url']     = "http://localhost/new_sslcz_gw/cancel.php";

$post_data['emi_option']             = "1";
$post_data['emi_max_inst_option']    = "9";
$post_data['emi_selected_inst']      = "9";

// Customer info
$post_data['cus_name']     = $cus_name;
$post_data['cus_email']    = $cus_email;
$post_data['cus_add1']     = $cus_address;
$post_data['cus_add2']     = "Dhaka";
$post_data['cus_city']     = "Dhaka";
$post_data['cus_state']    = "Dhaka";
$post_data['cus_postcode'] = "1000";
$post_data['cus_country']  = "Bangladesh";
$post_data['cus_phone']    = $cus_phone;
$post_data['cus_fax']      = $cus_phone;

// Shipping info
$post_data['ship_name']     = "cmpdiuagrotech";
$post_data['ship_add1']     = "Dhaka";
$post_data['ship_add2']     = "Dhaka";
$post_data['ship_city']     = "Dhaka";
$post_data['ship_state']    = "Dhaka";
$post_data['ship_postcode'] = "1000";
$post_data['ship_country']  = "Bangladesh";

// Optional params
$post_data['value_a'] = "ref001";
$post_data['value_b'] = "ref002";
$post_data['value_c'] = "ref003";
$post_data['value_d'] = "ref004";

// Cart details
$post_data['cart'] = json_encode([
    ["product" => "DHK TO BRS AC A1", "amount" => "200.00"],
    ["product" => "DHK TO BRS AC A2", "amount" => "200.00"]
]);
$post_data['product_amount']   = "400";
$post_data['vat']              = "0";
$post_data['discount_amount']  = "0";
$post_data['convenience_fee']  = "0";

// SSLCOMMERZ API URL
$api_url = "https://securepay.sslcommerz.com/gwprocess/v4/api.php";

// cURL to call SSLCOMMERZ
$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $api_url);
curl_setopt($handle, CURLOPT_TIMEOUT, 30);
curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($handle, CURLOPT_POST, 1);
curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, FALSE); # Only for testing on localhost

$response = curl_exec($handle);
$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if ($code == 200 && !curl_errno($handle)) {
    curl_close($handle);
    $sslcz = json_decode($response, true);

    if (isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL'] != "") {
        header("Location: " . $sslcz['GatewayPageURL']);
        exit;
    } else {
        echo "JSON parsing error!";
    }
} else {
    curl_close($handle);
    echo "FAILED TO CONNECT WITH SSLCOMMERZ API";
    exit;
}
?>
