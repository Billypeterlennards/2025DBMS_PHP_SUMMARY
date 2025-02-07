<?php
// =======================================
// 🚀 PHP COMPLETE SUMMARY GUIDE
// =======================================

echo "<h1>PHP Summary Guide</h1>"; // Main heading

// ------------------------------------
// 1️⃣ PHP INTRODUCTION
// ------------------------------------
echo "<h2>1. PHP Introduction</h2>";
echo "<p>PHP (Hypertext Preprocessor) is a powerful open-source scripting language for web development.</p>";
echo "<p>PHP can handle dynamic content, databases, and user authentication.</p>";

// Example: Simple PHP script
echo "<h3>Example:</h3>";
echo "<pre>
    &lt;?php
    echo 'Hello, World!';
    ?&gt;
</pre>";
echo "<p>This script prints 'Hello, World!' to the browser.</p>";

// ------------------------------------
// 2️⃣ PHP INSTALLATION
// ------------------------------------
echo "<h2>2. PHP Installation</h2>";
echo "<p>Install PHP using XAMPP, WAMP, or LAMP stack for server-side development.</p>";
echo "<p>You can also run PHP scripts online using cloud services like Replit.</p>";

// ------------------------------------
// 3️⃣ PHP SYNTAX
// ------------------------------------
echo "<h2>3. PHP Syntax</h2>";
echo "<p>PHP scripts start with <code>&lt;?php</code> and end with <code>?&gt;</code>.</p>";

// Example: PHP Code inside HTML
echo "<h3>Example:</h3>";
echo "<pre>
    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
    &lt;body&gt;

    &lt;?php
        echo 'This is PHP inside HTML!';
    ?&gt;

    &lt;/body&gt;
    &lt;/html&gt;
</pre>";

// ------------------------------------
// 4️⃣ PHP COMMENTS
// ------------------------------------
echo "<h2>4. PHP Comments</h2>";
echo "<p>Comments are ignored by PHP and are useful for explaining code.</p>";

// Example: Different Comment Types
echo "<h3>Example:</h3>";
echo "<pre>
    // Single-line comment
    /* Multi-line 
       comment */
</pre>";

// ------------------------------------
// 5️⃣ PHP VARIABLES
// ------------------------------------
echo "<h2>5. PHP Variables</h2>";
echo "<p>Variables in PHP store different types of data.</p>";

// Example: Using Variables
$name = "John";
$age = 25;
echo "<h3>Example:</h3>";
echo "<pre>
    \$name = 'John';
    \$age = 25;
    echo 'My name is ' . \$name . ' and I am ' . \$age . ' years old.';
</pre>";
echo "<p>Output: My name is $name and I am $age years old.</p>";

// ------------------------------------
// 6️⃣ PHP ECHO / PRINT
// ------------------------------------
echo "<h2>6. PHP Echo / Print</h2>";
echo "<p>Both `echo` and `print` output text to the screen.</p>";

// Example: Difference between Echo and Print
echo "<h3>Example:</h3>";
echo "<pre>
    echo 'Hello, World!'; // Faster
    print 'Hello, PHP!'; // Slower, returns 1
</pre>";

// ------------------------------------
// 7️⃣ PHP DATA TYPES
// ------------------------------------
echo "<h2>7. PHP Data Types</h2>";
echo "<p>PHP supports various data types, including integers, strings, booleans, floats, and arrays.</p>";

// Example: Different Data Types
$booleanVar = true;
$arrayVar = array("Apple", "Banana", "Cherry");
echo "<h3>Example:</h3>";
echo "<pre>
    \$booleanVar = true; // Boolean
    \$arrayVar = array('Apple', 'Banana', 'Cherry'); // Array
</pre>";

// ------------------------------------
// 8️⃣ PHP STRINGS
// ------------------------------------
echo "<h2>8. PHP Strings</h2>";
echo "<p>Strings can be single or double-quoted.</p>";

// Example: String Manipulation
echo "<h3>Example:</h3>";
echo "<pre>
    \$str = 'Hello, World!';
    echo strlen(\$str); // Length of string
    echo strtoupper(\$str); // Convert to uppercase
</pre>";

// ------------------------------------
// 9️⃣ PHP LOOPS
// ------------------------------------
echo "<h2>9. PHP Loops</h2>";
echo "<p>PHP has four types of loops: for, while, do-while, and foreach.</p>";

// Example: Loop Types
echo "<h3>Example:</h3>";
echo "<pre>
    for (\$i = 1; \$i <= 5; \$i++) {
        echo 'Iteration ' . \$i;
    }
</pre>";

// ------------------------------------
// 🔟 PHP FUNCTIONS
// ------------------------------------
echo "<h2>10. PHP Functions</h2>";
echo "<p>Functions allow you to create reusable code blocks.</p>";

// Example: Creating a Function
function greetUser($name) {
    return "Hello, $name!";
}
echo "<h3>Example:</h3>";
echo "<pre>
    function greetUser(\$name) {
        return 'Hello, ' . \$name . '!';
    }
</pre>";
echo "<p>Output: " . greetUser("Alice") . "</p>";

// ------------------------------------
// 1️⃣1️⃣ PHP ARRAYS
// ------------------------------------
echo "<h2>11. PHP Arrays</h2>";
echo "<p>Arrays store multiple values in a single variable.</p>";

// Example: Indexed and Associative Arrays
$indexedArray = array("Red", "Green", "Blue");
$assocArray = array("Name" => "John", "Age" => 25);
echo "<h3>Example:</h3>";
echo "<pre>
    \$indexedArray = array('Red', 'Green', 'Blue');
    \$assocArray = array('Name' => 'John', 'Age' => 25);
</pre>";

// ------------------------------------
// 1️⃣2️⃣ PHP SWITCH CASE
// ------------------------------------
echo "<h2>12. PHP Switch Case</h2>";
echo "<p>The `switch` statement checks multiple conditions.</p>";

// Example: Switch Case
$day = "Monday";
echo "<h3>Example:</h3>";
echo "<pre>
    switch (\$day) {
        case 'Monday':
            echo 'It\'s Monday!';
            break;
        case 'Friday':
            echo 'It\'s Friday!';
            break;
        default:
            echo 'It\'s another day!';
    }
</pre>";

// ------------------------------------
// 1️⃣3️⃣ PHP CONTINUE & BREAK
// ------------------------------------
echo "<h2>13. PHP Continue & Break</h2>";
echo "<p>`break` stops execution, while `continue` skips the current iteration.</p>";

// Example: Break & Continue
echo "<h3>Example:</h3>";
echo "<pre>
    for (\$i = 1; \$i <= 5; \$i++) {
        if (\$i == 3) continue; // Skips 3
        echo \$i;
    }
</pre>";

// =======================================
echo "<h1>🎉 End of PHP Summary Guide 🎉</h1>";
?>
