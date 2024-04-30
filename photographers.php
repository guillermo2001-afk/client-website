<?php
// Remove HTML comments
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://guillermo2001.rhody.dev/client-website-version7/css/stylesheet.css">
<title>About Me</title>
</head>
<body id ="about">
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
<section class="box">
<?php

// Class definition for AboutMe object
class AboutMe {

  // Public properties for basic information
  public $name;
  public $bio;

  // Protected properties for potentially shared information (modify as needed)
  protected $portraitPhoto;
  protected $contactInfo;

  // Constructor to initialize object properties with type checking
  public function __construct(string $name, string $bio, string $portraitPhoto, string $contactInfo) {
    $this->name = $name;
    $this->bio = $bio;
    $this->portraitPhoto = $portraitPhoto;
    $this->contactInfo = $contactInfo;
  }

  // Getter method for portrait photo
  public function getPortraitPhoto(): string {
    return $this->portraitPhoto;
  }

  // Getter method for contact info 
  public function getContactInfo(): string {
    return $this->contactInfo;
  }

  // Method to display object information 
  public function displayInfo() {
    echo "<h3>" . $this->name . "</h3>";
    echo "<p>" . $this->bio . "</p>";
    // Display portrait and contact info if set
    if (!empty($this->portraitPhoto)) {
    echo "<img src='" . $this->portraitPhoto . "' alt='" . $this->name . " Portrait' width='300' />";
    }
    if (!empty($this->contactInfo)) {
      echo "<p>Contact: <a href='mailto:" . $this->contactInfo . "'>" . $this->contactInfo . "</a></p>";
    }
  }
}

// Create AboutMe objects for Maddy and Morgan Lawing
$maddyLawing = new AboutMe(
  "Maddy Lawing",
  "Maddy Lawing is a photographer with a keen eye for capturing the world's vibrant details. Together with her brother Morgan, they run a collaborative photography business specializing in a variety of styles. Maddy enjoys bringing a touch of whimsy and color to their projects.",
  "https://guillermo2001.rhody.dev/client-website-version5/images/maddy%20background.jpg", 
  "madison_lawing@uri.edu"
);

$morganLawing = new AboutMe(
  "Morgan Lawing",
  "Morgan Lawing is a photographer who thrives on capturing the essence of a moment. Partnering with his sister Maddy, they create a unique blend of styles in their collaborative work. Morgan brings a focus on light and composition to their projects.",
  "https://guillermo2001.rhody.dev/client-website-version5/images/image4.jpg", 
  "morgan_lawing@example.com" 
);

// Display information from the objects
echo "<h1>About the Photographers</h1>";
$maddyLawing->displayInfo();
echo "<hr>";
$morganLawing->displayInfo();
?>
</section>

<script src="https://guillermo2001.rhody.dev/client-website-version10/js/script.js"></script>

</body>
</html>