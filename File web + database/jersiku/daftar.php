<html>
<body>
    <head><link rel="stylesheet" href="css/style2.css">
    </head>
    <body>
        <div id="kotak">
            <div id="atas">
                Form Pendaftaran<hr>
            </div>
            <div id="bawah">
                <form action='proses_daftar.php' method='get'>
                    <p>Nama:</p>
                        <input class="masuk" type='text' placeholder="nama .."         name='nama'><br/>
                    <p>Alamat:</p>
                        <input class="masuk" type='text' placeholder="alamat .."       name='alamat'><br/>
                    <p>Kode Pos:</p>
                        <input class="masuk" type='text' placeholder="kodepos .."      name='kodepos'><br/>
                    <p>No.HP:</p>
                        <input class="masuk" type='text' placeholder="nohp .."         name='nohp'><br/>
                    <p>Ussername:</p>
                        <input class="masuk" type='text'  placeholder="username .."    name='ussername'><br/>
                    <p>Password:</p>
                        <input class="masuk" type='password' placeholder="password .." name='passw'><br/>
                    
                    <input id="tombol" type='submit' value='Daftar' name='proses'>
                    <input id="tombol1" type='reset' value="Batal" name='reset'>
                </form>
            </div>

        </div>
    </body>
</html>