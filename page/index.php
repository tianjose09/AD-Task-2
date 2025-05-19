<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Computation</title>
    <link rel="stylesheet" href="../page/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Grade Computation</h1>
        <?php
        $subjects = ["Math", "English", "Filipino", "History", "Art"];

        function computeGrade($average) {
            if ($average == 100) {
                return "S (Perfect Score!)";
            } elseif ($average >= 95) {
                return "A (Excellent)";
            } elseif ($average >= 90) {
                return "B (Very Good)";
            } elseif ($average >= 85) {
                return "C (Good)";
            } elseif ($average >= 80) {
                return "D (Satisfactory)";
            } elseif ($average >= 75) {
                return "E (Passing)";
            } elseif ($average >= 70) {
                return "F (Needs Improvement)";
            } else {
                return "Failed";
            }
        }

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        ?>
        <form action="" method="POST">
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form-group">
                <label for="section">Grade Level and Section:</label>
                <input type="text" id="section" name="section" required>
            </div>

            <div class="form-group">
                <label for="term">Term:</label>
                <select id="term" name="term" required>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                </select>
            </div>

            <?php
            foreach ($subjects as $subject){
                echo '<div class="form-group">';
                echo "<label for='$subject'>$subject:</label>";
                echo "<select id='$subject' name='$subject' required>";
                for ($i = 100; $i >= 0; $i--){
                    echo "<option value='$i'>$i</option>";
                }
                echo "</select>";
                echo "</div>";
            }
            ?>

            <button type="submit" class="btn">Compute Grades</button>
        </form>
        <?php
        } // end if not POST
        ?>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fullname = $_POST['fullname'];
            $section = $_POST['section'];
            $term = $_POST['term'];

            $grades = [];
            $total = 0;

            foreach ($subjects as $subject){
                $grade = (float)$_POST[$subject];
                $grades[$subject] = $grade;
                $total += $grade;
            }

            $average = count($grades) > 0 ? $total / count($grades) : 0;
            $result = computeGrade($average);

            echo "<div class='result'>";
            echo "<h3>Grade Result for $fullname</h3>";
            echo "<p>Section: $section</p>";
            echo "<p>Term: $term</p>";

            echo "<div class='grade-details'>";
            echo "<h4>Subject Grades:</h4>";
            echo "<ul>";
            if (!empty($grades) && is_array($grades)) {
                foreach ($grades as $subject => $grade){
                    echo "<li>$subject: $grade</li>";
                }
            }
            echo "</ul>";

            echo "<p class='average'>Average: " . number_format($average, 2) . "</p>";
            echo "<p class='final-grade'>Final Grade: $result</p>";
            echo "</div>";
            echo "</div>";
        }
        ?>    
        <a href="../index.php">Go Back</a>
    </div>
</body>
</html>