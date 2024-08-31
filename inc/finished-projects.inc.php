<?php
require 'inc/db_connect.inc.php';

// Fetch projects from the database
$sql = "SELECT title, description, image, project_link FROM projects";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<section class="projects-section container my-5">';
    echo '<div class="row">';
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-md-6 mb-4">';
        echo '<a href="' . htmlspecialchars($row["project_link"]) . '" class="card-link">';
        echo '<div class="card h-100">';
        echo '<img src="' . htmlspecialchars($row["image"]) . '" class="card-img-top" alt="' . htmlspecialchars($row["title"]) . ' Logo">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . htmlspecialchars($row["title"]) . '</h5>';
        echo '<p class="card-text">' . htmlspecialchars(wordwrap($row["description"], 25, " ", true)) . '</p>'; // Limit description to 25 words
        echo '</div>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
    }
    echo '</div>';
    echo '</section>';
} else {
    echo "0 results";
}


$conn->close();
