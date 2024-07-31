<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Seven</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <input type="text" id="searchInput" placeholder="Search items..." onkeyup="filterTable()">
    <table id="dataTable">
        <thead>
            <tr>
                <th>Item Number</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Open the CSV file
            if (($handle = fopen("input.csv", "r")) !== FALSE) {
                // Skip the header row
                fgetcsv($handle);

                // Read each row from the CSV
                while (($data = fgetcsv($handle)) !== FALSE) {
                    echo "<tr>";
                    foreach ($data as $cell) {
                        echo "<td>" . htmlspecialchars($cell) . "</td>";
                    }
                    echo "</tr>";
                }
                // Close the file
                fclose($handle);
            } else {
                echo "<tr><td colspan='3'>Unable to open the file.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <script>
        function filterTable() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const table = document.getElementById('dataTable');
            const rows = table.getElementsByTagName('tr');
            let visible = false;

            for (let i = 1; i < rows.length; i++) {
                const cells = rows[i].getElementsByTagName('td');
                let match = false;

                for (let j = 0; j < cells.length; j++) {
                    if (cells[j].innerText.toLowerCase().includes(input)) {
                        match = true;
                        break;
                    }
                }

                if (match) {
                    rows[i].style.display = '';
                    visible = true;
                } else {
                    rows[i].style.display = 'none';
                }
            }

            // Hide table if no rows are visible
            table.style.display = visible ? '' : 'none';
        }
    </script>
</body>
</html>
