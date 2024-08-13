<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Login Admin - Hairos WaterPark Medan Tuntungan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../img/logo_1.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="content">
        <h1>Menu Login</h1>
        <form action="../function/formlogin.php">
            <table>
                <tr>
                    <th>Username</th>
                    <td>:</td>
                    <td><input type="text" id="username" name="username"></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td>:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="3" class="btn"><button type="submit">Log in</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>