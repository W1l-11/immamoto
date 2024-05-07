<?php 
    $conn = mysqli_connect("localhost","root", "", "db_immamoto");

    // Cek Koneksi
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL : " . mysqli_connect_error();
        exit(); 
    }

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row=mysqli_fetch_assoc($result)) {
            $rows[]=$row;
        }
        return $rows;
    }

    function registrasi($data)
    {
        global $conn;
    
        $email = strtolower(stripslashes($data["email"]));
        $username = strtolower(stripslashes($data["username"]));
        $nomor_telepon = strtolower(stripslashes($data["nomor_telepon"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    
        // cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT email FROM user
        WHERE email = '$email'");
    
        if (mysqli_fetch_assoc($result)) {
            // Setel pesan kesalahan jika email sudah terdaftar
            global $error_message;
            $error_message = "User already registered!";
            return false;
        }
    
        // cek konfirmasi password
        if ($password !== $password2) {
            // Setel pesan kesalahan jika password tidak cocok
            global $error_message;
            $error_message = "Password confirmation does not match!, Check Again!";
            return false;
        }
    
        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
    
        // tambahkan userbaru ke database
        mysqli_query($conn, "INSERT INTO user VALUES ('', '$email','$username', '$password', '$nomor_telepon')");
    
    
        return mysqli_affected_rows($conn);
    }

    function registrasidealer($data)
    {
        global $conn;
    
        $nama_dealer = strtolower(stripslashes($data["nama_dealer"]));
        $username = strtolower(stripslashes($data["username"]));
        $nomor_wa = strtolower(stripslashes($data["nomor_wa"]));
        $alamat = strtolower(stripslashes($data["alamat"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    
        // cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM user
        WHERE username = '$username'");
    
        if (mysqli_fetch_assoc($result)) {
            // Setel pesan kesalahan jika email sudah terdaftar
            global $error_message;
            $error_message = "User already registered!";
            return false;
        }
    
        // cek konfirmasi password
        if ($password !== $password2) {
            // Setel pesan kesalahan jika password tidak cocok
            global $error_message;
            $error_message = "Password confirmation does not match!, Check Again!";
            return false;
        }
    
        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
    
        // tambahkan userbaru ke database
        mysqli_query($conn, "INSERT INTO dealer VALUES ('', '$nama_dealer','$username', '$nomor_wa', '$alamat', '$password')");
    
    
        return mysqli_affected_rows($conn);
    }
?>