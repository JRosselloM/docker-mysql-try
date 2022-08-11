<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- ESTILOS  -->
    <link rel="stylesheet" href="/css/index.css">
    <title>Document</title>

</head>
<body>

    <h1 class="title text-center bg-warning p-3"> 🙅 Datos De Personas 🧑‍🦰</h1>
    <div class="content">
        <div class="row">
            <div class="col-6">
                <img src="/images/971.jpg" width="100%" height="auto">
            </div>
            <div class="col-6">
                <?php
                $servername = "mysql";
                $username = "root";
                $password = "passwd";
                $dbname = "clientes_db";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // If CONN failed -> throw error
                if ($conn->connect_error) {
                    die("Connection Failed: " . $conn->connect_error);
                }
                // echo "Connection Successfully";

                // SELECT DATA from database
                $sql = "SELECT id, username, email FROM cliente";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    echo "<table class='table'><tr class='fw-bold table-primary text-center'><th>🆔</th><th>NAME</th><th>EMAIL</th></tr>";

                    while($row = $result->fetch_assoc()){
                        echo "<tr><td class='col-4 bg-white'>" . $row["id"]. "</td><td class='col-4 bg-white'>" . $row["username"]. "</td><td class='col-4 bg-white'>" . $row["email"]. "</td></tr>";
                    }
                }else{
                    echo "0 Results";
                }

                ?>
            </div>
        </div>
    </div>
</body>

</html>