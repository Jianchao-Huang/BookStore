<?php
$nameError = $addressError = $emailError = $phoneError = $creditCardNumberError = $expDateError = '';
if (isset($_POST['submit'])) {
    if (empty($_POST['name'])) {
        $nameError = 'Name is required';
    }
    if (empty($_POST['address'])) {
        $addressError = 'Address is required';
    };
    if (empty($_POST['Email'])) {
        $emailError = 'Email is required';
    };

    function validatePhoneNumber($phone)
    {
        // Allow +, - and . in phone number
        $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
        // Remove "-" from number
        $phone_to_check = str_replace("-", "", $filtered_phone_number);
        // Check the lenght of number
        // This can be customized if you want phone number from a specific country
        if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
            return false;
        } else {
            return true;
        }
    }

    if (empty($_POST['phone'])) {
        $phoneError = 'Phone is required';
    } elseif (preg_match("/[a-z]/i", $_POST['phone']) || strpos($_POST['phone'], '.')) {
        $phoneError = "Phone number is invalid";
    } elseif (validatePhoneNumber($_POST['phone']) == false) {
        $phoneError = "Phone number is invalid";
    }

    function validateCreditCardNumber($creditCardNumber)
    {
        $filteredCreditCardNumber = filter_var($creditCardNumber, FILTER_SANITIZE_NUMBER_INT);
        // Remove "-" from number
        $creditCardNumberToCheck = str_replace("-", "", $filteredCreditCardNumber);
        // Check the lenght of number
        if (strlen($creditCardNumberToCheck) < 16 || strlen($creditCardNumberToCheck) > 19) {
            return false;
        } else {
            return true;
        }
    }

    if (empty($_POST['creditCardNumber'])) {
        $creditCardNumberError = 'Credit card number is required';
    } elseif (preg_match("/[a-z]/i", $_POST['creditCardNumber']) || strpos($_POST['creditCardNumber'], '.')) {
        $creditCardNumberError = "Credit card number is invalid";
    } elseif (validateCreditCardNumber($_POST['creditCardNumber']) == false) {
        $creditCardNumberError = "Credit card number is invalid";
    }

    if($_POST['expMonth'] == 0 || $_POST['expYear'] == 'Select'){
        $expDateError = "Exp. Date is invalid";
    }
    if($nameError == '' && $addressError == '' && $emailError == '' && $phoneError == '' && $creditCardNumberError == '' && $expDateError == ''){
        header("Location: confirmation.php");
    }
}



?>