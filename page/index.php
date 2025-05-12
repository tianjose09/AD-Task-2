<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="../page/assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Grade Computation</h1>
        <form action="" method="POST">
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>
            </div>

            <div class="form group">
                <label for="section">Grade Level and Section:</label>
                <input type="text" id="section" name="section" required>
            </div>

            <div class="form group">
                <label for="term">Term:</label>
                <select id="term" name="term" required>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                </select>
            </div>

            <div class="form group">
                <label for="math">Math:</label>
                <select id="math" name="math" required>
                    <?php for ($i = 100; $i >= 0; $i--) echo "<option value= '$i' > $i </option>"; ?>
                </select>
            </div>

            <div class="form group">
                <label for="english">English:</label>
                <select id="english" name="english" required>
                    <?php for ($i = 100; $i >= 0; $i--) echo "<option value= '$i' > $i </option>"; ?>
                </select>
            </div>

            <div class="form group">
                <label for="filipino">Filipino:</label>
                <select id="filipino" name="filipino" required>
                    <?php for ($i = 100; $i >= 0; $i--) echo "<option value= '$i' > $i </option>"; ?>
                </select>
            </div>

            <div class="form group">
                <label for="history">History:</label>
                <select id="history" name="history" required>
                    <?php for ($i = 100; $i >= 0; $i--) echo "<option value= '$i' > $i </option>"; ?>
                </select>
            </div>

            <div class="form group">
                <label for="art">History:</label>
                <select id="art" name="art" required>
                    <?php for ($i = 100; $i >= 0; $i--) echo "<option value= '$i' > $i </option>"; ?>
                </select>
            </div>
            <button type="submit" class="btn">Compute Grades</button>
        </form>
            
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fullname = $_POST['fullname'];
        $section = $_POST['section'];
        $term = $_POST['term'];
        $math = (float)$_POST['math'];
        $english = (float)$_POST['english'];
        $filipino = (float)$_POST['filipino'];
        $history = (float)$_POST['history'];
        $art = (float)$_POST['art'];

    $grades = ($math + $english + $filipino + $history + $art) / 5;

        if ($grades == 100) {
            echo "Congratulations, you got an average of $grades! You got an S!";
        } elseif ($grades <= 99 && $grades >= 95) {
            echo "Congratulations, you got an average of $grades! You got an A!";
        } elseif ($grades <= 94 && $grades >= 90) {
            echo "Congratulations, you got an average of $grades! You got a B!";
        } elseif ($grades <= 89 && $grades >= 85) {
            echo "Congratulations, you got an average of $grades! You got a C!";
        } elseif ($grades <= 84 && $grades >= 80) {
            echo "Congratulations, you got an average of $grades! You got a D!";
        } elseif ($grades <= 79 && $grades >= 75) {
            echo "Congratulations, you got an average of $grades! You got an E!";
        } elseif ($grades <= 74 && $grades >= 70) {
            echo "Congratulations, you got an average of $grades! You got an F!";
        } else {
            echo "You failed the subject with an average of $grades.";
        }
    }
        ?>
    </div>
    
    <a href="../index.php">Go Back</a>
    
</body>
</html>