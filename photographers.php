<?php

// Class definition for AboutMe object
class AboutMe {

  // Public properties for basic information
  public string $name;
  public string $bio;

  // Protected properties for potentially shared information (modify as needed)
  protected string $portraitPhoto;
  protected string $contactInfo;

  // Constructor to initialize object properties
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
    echo "<h2>" . $this->name . "</h2>";
    echo "<p>" . $this->bio . "</p>";
    // Display portrait and contact info if set
    if (!empty($this->portraitPhoto)) {
      echo "<img src='" . $this->portraitPhoto . "' alt='" . $this->name . " Portrait' />";
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
  "/images/maddy_background.jpg", // Corrected image path
  "madison_lawing@uri.edu"
);

$morganLawing = new AboutMe(
  "Morgan Lawing",
  "Morgan Lawing is a photographer who thrives on capturing the essence of a moment. Partnering with his sister Maddy, they create a unique blend of styles in their collaborative work. Morgan brings a focus on light and composition to their projects.",
  "/images/image4.jpg", // Replace with actual path
  "morgan_lawing@example.com" // Corrected email format
);

// Display information from the objects
echo "<h1>About the Photographers</h1>";
$maddyLawing->displayInfo();
echo "<hr>";
$morganLawing->displayInfo();
