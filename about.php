<?php
// Include external PHP file with validation functions
include 'validation_functions.php';

// Initialize variables for form control values and error messages
$name = "";
$sessionNumber = "";
$errors = array("name" => "", "sessionNumber" => "");

// Initialize message variable
$message = "";

// Start session
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $sessionNumber = $_POST['sessionNumber'];

    // Validate form data
    if (!validateTextLength($name, 1, 50)) {
        $errors['name'] = "Name must be between 1 and 50 characters.";
    }

    if (!validateNumberRange($sessionNumber, 1, 10)) {
        $errors['sessionNumber'] = "Session number must be between 1 and 10.";
    }

    // Check if there are any errors
    if (array_filter($errors)) {
        // If there are errors, display error messages
        $message = "Please correct the form errors.";
    } else {
        // If data is valid, display success message
        $message = "Form submitted successfully!";
        
        // Set cookies
        setcookie("name", htmlspecialchars($name), time() + 86400 * 30, "/");
        setcookie("sessionNumber", htmlspecialchars($sessionNumber), time() + 86400 * 30, "/");
        
        // Set session variables
        $_SESSION['name'] = htmlspecialchars($name);
        $_SESSION['sessionNumber'] = htmlspecialchars($sessionNumber);

        // Terminate session
        session_unset();
        session_destroy();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="https://guillermo2001.rhody.dev/client-website-version6/css/stylesheet.css">
</head>
<body id="about">
    <header>
        <div class="container">
            <div id="text">
                <img id="logo" src="https://guillermo2001.rhody.dev/client-website-version6/images/Maddy%20Logo.png" alt="Maddy Logo" width="200" height="auto">
            </div>
            <nav>
            <ul>
                <li><a href="https://guillermo2001.rhody.dev/client-website-version10/index.html">Home</a></li>
                <li><a href="https://guillermo2001.rhody.dev/client-website-version10/about.php">About Us</a></li>
                <li><a href="https://guillermo2001.rhody.dev/client-website-version10/pricing.html">Pricing</a></li>
                <li><a href="https://guillermo2001.rhody.dev/client-website-version10/gallery.html">Gallery</a></li>
                <li><a href="https://guillermo2001.rhody.dev/client-website-version10/photographers.php">Employees</a></li>
            </ul>
        </nav>
        </div>
    </header>

    <div>
        <div id="header-content">
            <h1>About Me</h1>
        </div>

        <main>
            <div id="image-gallery">
                <div id="rotating-gallery">
                    <img src="https://guillermo2001.rhody.dev/client-website-version5/images/image1.webp" alt="Image 1">
                    <img src="https://guillermo2001.rhody.dev/client-website-version5/images/image2.jpg" alt="Image 2">
                    <img src="https://guillermo2001.rhody.dev/client-website-version5/images/image3.jpg" alt="Image 3">
                    <img src="https://guillermo2001.rhody.dev/client-website-version5/images/image4.jpg" alt="Image 4">
                </div>
            </div>

            <section class="box">
                <?php
                // Include the PHP file
                include '/photographers.php';
                ?>
            </section>
            <section class="box">
                <h2>Introduction</h2>
                <p>Write a brief introduction about yourself, highlighting your passion for videography and photography.</p>
            </section>
        
            <section class="box">
                <h2>My Work</h2>
                <p>Showcase some of your best work where I will be embedding videos and displaying your high-quality images.</p>
            </section>
        
            <section class="box">
                <h2>Services</h2>
                <p>Describe the services you offer, such as event videography, wedding photography, or commercial shoots.</p>
            </section>
        
            <section class="box">
            <h2>Contact Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>"><br>
        <span style="color: red;"><?php echo $errors['name']; ?></span><br>

        <label for="sessionNumber">Number of Sessions (1-10):</label><br>
        <input type="number" id="sessionNumber" name="sessionNumber" min="1" max="10" value="<?php echo htmlspecialchars($sessionNumber); ?>"><br>
        <span style="color: red;"><?php echo $errors['sessionNumber']; ?></span><br>

        <input type="submit" value="Submit">
    </form>
    <p><?php echo $message; ?></p>

    <!-- Displaying cookie data -->
    <h2>Cookie Data</h2>
    <p>Cookie - Name: <?php echo isset($_COOKIE['name']) ? htmlspecialchars($_COOKIE['name']) : 'Not set'; ?></p>
    <p>Cookie - Session Number: <?php echo isset($_COOKIE['sessionNumber']) ? htmlspecialchars($_COOKIE['sessionNumber']) : 'Not set'; ?></p>
            </section>
    
        </main>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://guillermo2001.rhody.dev/client-website-version10/js/script.js"></script>

        <footer>
            <p>&copy; Created by Guillermo Hernandez</p>
            <p><a href="mailto:guillermo2001@uri.edu" subject="Feedback&body=Message">Contact Me with any website questions or concerns</a></p>
        </footer>
    </div>
</body>
</html>
