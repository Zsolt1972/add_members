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
        <h1>Beszúrás, módosítás és törlés!</h1>
    </header>
    <div class="main">
        <h2>Add hozzá a Vezeték- és Keresztnevedet!</h2>
        <form action="add_action.php" method="post">
            <table>
                <tr>
                    <td>Vezetéknév: </td>
                    <td><input type="text" name="first_name" placeholder="Vezetéknév"></td>
                </tr>
                <tr>
                    <td>Keresztnév: </td>
                    <td><input type="text" name="last_name" placeholder="Keresztnév"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="submit" value="Hozzáad" class="gomb"></td>
                </tr>
            </table>
        </form>
        <br>
        <hr>
        <br>
        <h2>Hozzáadatt nevek listája!</h2>
        <table>
            <tr>
                <th>Sorszám</th>
                <th>Vezetéknév</th>
                <th>Keresztnév</th>
                <th>Esemény</th>
            </tr>

            <?php
            
            include ('connect.php');
            $sql = "SELECT * FROM tb_users";
            $result = mysqli_query($conn, $sql) or die(mysqli_error());
            if ($result == true){
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];
                    ?>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $first_name; ?></td>
                        <td><?php echo $last_name ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $id; ?>"><button type="button" class="gomb">Módisít</button></a>
                            <a href="delete.php?id=<?php echo $id; ?>"><button type="button" class="gomb">Töröl</button></a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>

            
        </table>
    </div>
    <footer class="footer">
        <p>zsobe &COPY 2021</p>
    </footer>
</body>
</html>