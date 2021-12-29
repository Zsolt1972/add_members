<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <h1>Módosítás és törlés!</h1>
    </header>
    <div class="main">
        <h2>Add hozzá a Vezeték- és Keresztnevedet!</h2>

        <?php 
        include ('connect.php');
        // getting value from URL
        $id = $_GET['id'];
        // Query to select data
        $sql = "SELECT * FROM tb_users WHERE id=".$id;
        // executing to query
        $result = mysqli_query($conn, $sql);
        if ($result == true){
            $row = mysqli_fetch_assoc($result);
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
        }
        ?>

            <form action="edit_action.php" method="post">
                <table>
                    <tr>
                        <td>Vezetéknév: </td>
                        <td><input type="text" name="first_name" value="<?php echo $first_name; ?>"></td>
                    </tr>
                    <tr>
                        <td>Keresztnév: </td>
                        <td><input type="text" name="last_name" value="<?php echo $last_name; ?>"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;<input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                        <td><input type="submit" name="submit" value="Módosít" class="gomb"></td>
                    </tr>
                </table>
            </form>
        <br>
        <hr>
        <br>
        
    </div>
    <footer class="footer">
        <p>zsobe &COPY 2021</p>
    </footer>
</body>
</html>