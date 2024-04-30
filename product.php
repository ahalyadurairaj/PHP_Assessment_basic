 <?php
    $servername = "localhost";
    $username = "dckap";
    $password = "Dckap2023Ecommerce";
    $database = "ahalya_php";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // else{
    //     echo "Connected successfully";
    // }

    // SQL query
    


    $id = $_GET["id"];
    $name = $_GET['name'];
    $price = $_GET['price'];
    $image = $_GET['image'];
    $description = $_GET['description'];

    $query = "SELECT * FROM product_details";

    $result =  mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
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
                     <th class="border border-gray-300 p-2"> Name</th>
                     <th class="border border-gray-300 p-2">price</th>
                     <!-- <th class="border border-gray-300 p-2">image</th> -->
                     <th class="border border-gray-300 p-2">description</th>

                 </tr>
             </thead>
             <tbody>
                 <!-- Fetch records from database and display -->
                 <?php
                    // Fetch records from the database and loop through them
                    // $query = "SELECT * FROM userDetails";
                    // $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td class='border border-gray-300 p-2'>" . $row['id'] . "</td>";
                        echo "<td class='border border-gray-300 p-2'>" . $row['name'] . "</td>";
                        echo "<td class='border border-gray-300 p-2'>" . $row['price'] . "</td>";
                        // echo "<td class='border border-gray-300 p-2'>" . $row['image'] . "</td>";
                        echo "<td class='border border-gray-300 p-2'>" . $row['description'] . "</td>";
                        // echo "<td><button class='bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded mr-2'><a href='view_product.php?id=" . $row['id'] . "'>Edit</a></button></td>";
                        // echo "<td><button class='bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded'><a href='delete.php?id=" .$row['id']."'>Delete</button></td>";
                        echo "</tr>";
                    }
                    ?>
             </tbody>
         </table>
     </div>

     <a href="index.php" id="link">BACK_TO_HOME_PAGE</a>
 </body>

 </html>