<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

    <div class="container">
        <h1>Programming Basics Demo</h1>
        <h2>Grade Computation System</h2>

        <?php
        function displayProgrammingBasics(){
            $subjects = ["Math", "English", "Filipino", "History", "Art"];

            $gradeSystem = [
                "S" => "100",
                "A" => "95-99",
                "B" => "90-94",
                "C" => "85-89",
                "D" => "80-84",
                "E" => "75-79",
                "F" => "70-74",
                "Failed" => "Below 70"
            ];

            echo "<div class='basics-section'>";
            echo "<h3>Programming Basics Demonstrated:</h3>";

            echo "<p><strong>Array Example (Subjects):</strong> " . implode(", ", $subjects) . "</p>";

            echo "<p><strong>Dictionary Example (Grade System):</strong></p>";
            echo "<ul class='grade-system'>";
            foreach ($gradeSystem as $grade => $range){
                echo "<li>$grade: $range</li>";
            }
            echo "</ul>";

            echo"</div>";
        }

        displayProgrammingBasics();
        ?>

        <div class="navigation">
            <a href="/page/index.php" class="btn">Compute Grades</a>
        </div>
    </div>
</body>
</html>