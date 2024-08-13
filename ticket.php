<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TICKET - HAIROS WATERPARK MEDAN TUNTUNGAN</title>
    <link rel="icon" href="img/logo_1.png">
    <link rel="stylesheet" href="ticket.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo_1.png" alt="" style="width:70px;
                                             height: auto;
                                             border-radius: 50%;">
        </div>
        <div class="link">
            <ul class="menu">
                <li><a href="Index.php">Home</a></li>
                <li><a href="ticket.php">Ticket</a></li>
                <li><a href="promo.php">Promo</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="title-main">
                <h1>Ticket</h1>
        </div>
        <div class="table-content">
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Jenis Ticket</th>
                    <th>Harga</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Gapura (All Days)</td>
                    <td>5.000/orang</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>WaterPark</td>
                    <td>45.000/orang</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Zoo Hairos</td>
                    <td>15.000/orang</td>
                </tr>
            </table>
        </div>
        <div class="title-main-buy">
            <h1>Pemesanan Tiket</h1>
        </div>
        <div class="input-ticket">
            <form action="">
                <table>
                    <tr>
                        <th>Nama</th>
                        <td>:</td>
                        <td><input type="text"></td>
                    </tr>
                    
                    <tr>
                        <th>Umur</th>
                        <td>:</td>
                        <td><input type="text"></td>
                    </tr>
                    
                    <tr>
                        <th>Jenis Tiket</th>
                        <td>:</td>
                        <td><select>
                                <option value="" selected disabled hidden>Pilih Salah Satu</option>
                                <option value="">Gapura</option>
                                <option value="">WaterPark</option>
                                <option value="">Zoo Hairos</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="btn"><button onclick="">Pesan Tiket</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </main>
    <div class="footer">
            <div class="footer-content">
                <div class="location">
                    &#128269;<h3>HAIROS WATERPARK</h3>
                    <br>
                    &#128205;<p> Jl. Letjen. Jamin Ginting Km. 14.5
                        Namo Bintang, Kec. Pancur Batu
                        Kabupaten Deli Serdang
                        Sumatera Utara - 20353</p>
                </div>
                <div class="sosmed">
                    &#9742;
                    <h3>Hubungi Kami</h3>
                    <h5>085835030117</h5>
                    <br>
                        <p><i class="fab fa-facebook"></i> Facebook</p>
                        <p><i class="fab fa-instagram"></i> Instagram</p>
                        <p><i class="fab fa-youtube"></i> YouTube</p>
                </div>
            </div>
    </div>
</body>
</html>