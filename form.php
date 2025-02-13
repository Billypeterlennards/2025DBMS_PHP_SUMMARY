<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Handling & Validation</title>
    <style>
        .error { color: red; } /* Style for error messages (red color) */
    </style>
</head>
<body>

<?php
// Step 1: Define variables to store user input and error messages
$name = $email = $website = $comment = ""; // Store input values
$nameErr = $emailErr = $websiteErr = ""; // Store error messages

// Step 2: Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Validate Name (Required and must contain only letters & spaces)
    if (empty($_POST["name"])) { // Check if name is empty
        $nameErr = "Name is required"; // Set error message
    } else {
        $name = clean_input($_POST["name"]); // Clean input
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) { // Check if name contains only letters & spaces
            $nameErr = "Only letters and white space allowed"; // Set error message
        }
    }

    // Validate Email (Required and must be in correct email format)
    if (empty($_POST["email"])) { // Check if email is empty
        $emailErr = "Email is required"; // Set error message
    } else {
        $email = clean_input($_POST["email"]); // Clean input
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // Check if email format is valid
            $emailErr = "Invalid email format"; // Set error message
        }
    }

    // Validate Website (Optional, but if filled, must be a valid URL)
    if (!empty($_POST["website"])) { // Check if website is filled
        $website = clean_input($_POST["website"]); // Clean input
        if (!filter_var($website, FILTER_VALIDATE_URL)) { // Check if URL format is valid
            $websiteErr = "Invalid URL format"; // Set error message
        }
    }

    // Validate Comment (Optional, just clean the input)
    $comment = clean_input($_POST["comment"]); // Clean input
}

// Step 3: Function to clean input data (prevents hacking)
function clean_input($data) {
    $data = trim($data); // Remove spaces from the beginning & end
    $data = stripslashes($data); // Remove backslashes (\)
    $data = htmlspecialchars($data); // Convert special characters to HTML entities
    return $data; // Return cleaned data
}
?>

<h2>PHP Form Handling & Validation</h2>
<p><span class="error">* Required fields</span></p>

<!-- Step 4: Create the HTML form -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
    <!-- Name field -->
    Name: <input type="text" name="name" value="<?php echo $name; ?>"> <!-- Retains value after submission -->
    <span class="error">* <?php echo $nameErr; ?></span> <!-- Show error if any -->
    <br><br>
    
    <!-- Email field -->
    Email: <input type="text" name="email" value="<?php echo $email; ?>"> <!-- Retains value -->
    <span class="error">* <?php echo $emailErr; ?></span> <!-- Show error if any -->
    <br><br>
    
    <!-- Website field -->
    Website: <input type="text" name="website" value="<?php echo $website; ?>"> <!-- Retains value -->
    <span class="error"><?php echo $websiteErr; ?></span> <!-- Show error if any -->
    <br><br>
    
    <!-- Comment textarea -->
    Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea> <!-- Retains value -->
    <br><br>
    
    <!-- Submit button -->
    <input type="submit" name="submit" value="Submit"> <!-- Submits the form -->
</form>

<?php
// Step 5: Display submitted data if there are no errors
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($emailErr) && empty($websiteErr)) {
    echo "<h2>Your Submitted Data:</h2>"; // Display heading
    echo "Name: " . $name . "<br>"; // Show Name
    echo "Email: " . $email . "<br>"; // Show Email
    echo "Website: " . $website . "<br>"; // Show Website (if provided)
    echo "Comment: " . nl2br($comment) . "<br>"; // Show Comment with line breaks
}
?>

</body>
</html>
