if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputValue = $_POST['inputName']; // Replace 'inputName' with the actual name attribute of your input field

    if ($inputValue === 'pumpkin') {
        // Input value is equal to "pumpkin"
        echo "Input value is equal to 'pumpkin'";
    } else {
        // Input value is not equal to "pumpkin"
        echo "Input value is not equal to 'pumpkin'";
    }
}
