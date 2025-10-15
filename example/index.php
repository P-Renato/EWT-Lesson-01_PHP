<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page</title>
</head>
<body>
    <H1>
        <?php echo "Hello world PhP!" ?>
    </H1>

    <h2>I am feeling 
        <?php 
            // generate a random number
            $randomNumber = rand(1, 100);

            // conditional statement
            if($randomNumber > 50){
                echo "luckily";
            } else {
                echo "unfortunatelly";
            }

            // Display the random number
            echo "(" . $randomNumber . ")";
        ?>
    </h2>
    <h3>Reading data from a CSV file:</h3>
    <ul>
        <?php 
        $file = fopen("data.csv","r");

        while (($row = fgetcsv($file)) !== false) {
            echo "<li>$row[0] - $row[1] - $row[2] -$row[3]</li>\n";
        }

        fclose($file);
        ?>
    </ul>
    <h3>Writing data to a file:</h3>
    <?php 
    // Open or create  file named "example.txt" in write mode ('w')
    // 'w' means overwrite the file each time
    $new_file = fopen('example.txt', 'w');

    // The text we want to write
    $text = "Hello world PHP!";

    // Write the text to the file
    fwrite($new_file, $text);

    // Always close files when done
    fclose($new_file);

    echo "<p>File 'example.txt' has been written successfully. </p> ";
    ?>

    <h3>Using a loop:</h3>
    <?php 
    // For loop example
    // This loop wil run 5 times (from 0 to 4)
    for($i = 0; $i < 5; $i++){
        echo "<p>Number: $i</p>";
    }
    ?>
</body>
</html>