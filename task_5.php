<?php
function generatePassword($length) {
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $pool = $lowercase . $uppercase . $numbers . $specialChars;
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomChar = $pool[random_int(0, strlen($pool) - 1)];
        $password .= $randomChar;
    }
    
    return $password;
}

$password = generatePassword(12);
echo "Generated Password: $password\n";
?>
