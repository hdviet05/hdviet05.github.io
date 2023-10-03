<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="w3.css">
        <title>Viet's FTU Lecture Notes</title>
    </head>
    <body>
        <header class="w3-container w3-center w3-wide w3-padding-32">
            <div class="header">
                <h1><span class='w3-tag'>viet</span> 's FTU lecture notes</h1>
                <p>my uni notes archive.</p>
            </div>
        </header>
        <main class="w3-container w3-margin-bottom">
            <!--first blog-->
            <div class="w3-card w3-hover-shadow w3-container subject"><a href="/subjects/advanced-maths/advanced-maths-main.html"> <!--Add link here-->
                <h3>Advanced Mathematics</h3>
                <p class="w3-justify"></p>
            </div>
            <br>
            <!--second blog-->
            <div class="w3-card w3-hover-shadow w3-container subject"><a href="/subjects/marxism-leninism/marxism-leninism-main.html">
                <h3>Marxism-Leninism</h3>
                <p class="w3-justify"></p>
                <div>
                <table>
                    <tr>
                        <th>BookId</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Genre</th>
                        <th>Pages</th>
                    </tr>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "mybooks");
                    if ($conn -> connect_error) {
                        die("Connection Failed:". $conn -> connect_error);
                    }

                    $sql = "SELECT BookId, Title, Author, Genre, Pages FROM books";
                    $result = $conn-> query($sql);

                    if ($result -> num_rows > 0) {
                        while ($row = $result-> fetch_assoc()) {
                            echo "<tr><td>". $row["BookId"] ."</td><td>". $row["Title"] ."</td><td>". $row["Author"] ."</td><td>". $row["Genre"] .  "</td><td>". $row["Pages"] ."</td></tr>";
                        }
                        echo "</table>";
                    }
                    else{
                        echo "0 result";
                    }
                    $conn -> close();
                    ?>
                </table>
            <div>
        </main>
    </body>
</html>