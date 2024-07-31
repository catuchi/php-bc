<?php
// Create and open a file for writing
$file = fopen("data.txt", "w");

// Check if the file was created successfully
if ($file) {
    // Write data to the file
    fwrite($file, "Name, Age, City\n");
    fwrite($file, "John Doe, 28, New York\n");
    fwrite($file, "Jane Smith, 34, Los Angeles\n");

    // Close the file
    fclose($file);
} else {
    echo "Unable to open or create the file.";
}
?>
<?php
// Open the file for reading
$file = fopen("data.txt", "r");

// Check if the file was opened successfully
if ($file) {
    // Read and display file content line by line
    while (($line = fgets($file)) !== false) {
        echo $line . "<br>";
    }

    // Close the file
    fclose($file);
} else {
    echo "Unable to open the file.";
}
?>
<?php
// Open the file for reading
$file = fopen("data.txt", "r");

// Check if the file was opened successfully
if ($file) {
    echo "<table border='1'>";

    // Read the first line to use as table headers
    $headers = fgetcsv($file);
    if ($headers) {
        echo "<tr>";
        foreach ($headers as $header) {
            echo "<th>" . htmlspecialchars($header) . "</th>";
        }
        echo "</tr>";
    }

    // Read the rest of the lines to display as table rows
    while (($row = fgetcsv($file)) !== false) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";

    // Close the file
    fclose($file);
} else {
    echo "Unable to open the file.";
}
?>
