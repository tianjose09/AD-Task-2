<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional</title>
</head>
<body>

    
    <?php

    echo "------------------------------------------------------";
    echo "                 Computation of grades";
    echo "------------------------------------------------------";
    
    echo "Enter your Full Name: ";
    $fullname = trim(fgets(STDIN));
    echo "Enter your Grade Level & Section: ";
    $section = trim(fgets(STDIN));
    echo "Enter the term you will input your grades (1st/2nd/3rd): ";
    $term = trim(fgets(STDIN));
    echo "Please enter your grades for the 5 subjects:\n";
    echo "Math: ";
    $math = (float)trim(fgets(STDIN));
    echo "English: ";
    $english = (float)trim(fgets(STDIN));
    echo "Filipino: ";
    $filipino = (float)trim(fgets(STDIN));
    echo "History: ";
    $history = (float)trim(fgets(STDIN));
    echo "Art: ";
    $art = (float)trim(fgets(STDIN));

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

    ?>
</body>
</html>