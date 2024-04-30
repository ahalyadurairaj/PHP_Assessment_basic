<?php
$servername = "localhost";
$username = "dckap";
$password = "Dckap2023Ecommerce";
$database = "ahalya_php";


// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// else{
//     echo "Connected successfully";
// }



$id = $_GET["id"];
$title = $_GET["title"];
$content=$_GET["content"];
$author = $_GET["author"];
$createdAt = $_GET["createdAt"];
$status=$_GET["status"];

// SQL query
$blog_query = "SELECT * FROM blog_details";

$blog_query =  mysqli_query($conn, $blog_query);

if (mysqli_num_rows($blog_query) > 0) {
    // output data of each row
    // while ($row = mysqli_fetch_assoc($result)) {
    //     //  echo"PRODUCT Table";

    // }
} else {
    echo "0 results";
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>

<style>
    #link{
        color: blue;
        text-align: center;
        display: flex;
        justify-content: center;
        font-weight: bolder;
    }
</style>
<body>
 <script src="https://cdn.tailwindcss.com"></script>

 <!-- Add Tailwind CSS classes for styling  -->
 <div class="flex flex-col">
     <!-- Table for displaying records -->
     <table class="border-collapse border border-gray-300">
         <thead>
             <tr>
                 <th class="border border-gray-300 p-2">Id</th>
                 <th class="border border-gray-300 p-2"> title</th>
                 <th class="border border-gray-300 p-2">content</th>
                 <th class="border border-gray-300 p-2">author</th>
                 <th class="border border-gray-300 p-2">createdAt</th>
                 <th class="border border-gray-300 p-2">status</th>

             </tr>
         </thead>
         <tbody>
             <!-- Fetch records from database and display -->
             <?php
                // Fetch records from the database and loop through them
                // $query = "SELECT * FROM userDetails";
                // $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($blog_query)) {
                    echo "<tr>";
                    echo "<td class='border border-gray-300 p-2'>" . $row['id'] . "</td>";
                    echo "<td class='border border-gray-300 p-2'>" . $row['title'] . "</td>";
                    echo "<td class='border border-gray-300 p-2'>" . $row['content'] . "</td>";
                    echo "<td class='border border-gray-300 p-2'>" . $row['author'] . "</td>";
                    echo "<td class='border border-gray-300 p-2'>" . $row['createdAt'] . "</td>";
                    echo "<td class='border border-gray-300 p-2'>" . $row['status'] . "</td>";
                    echo "</tr>";
                }
                ?>
         </tbody>
     </table>
 </div>
 <a href="index.php" id="link">BACK_TO_HOME_PAGE</a>
</body>


</html>




