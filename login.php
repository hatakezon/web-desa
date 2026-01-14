<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])){
    $u = mysqli_real_escape_string($koneksi, $_POST['username']);
    $p = mysqli_real_escape_string($koneksi, $_POST['password']);
    
    // Cek user
    $cek = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$u' AND password='$p'");
    if(mysqli_num_rows($cek) > 0){
        $data = mysqli_fetch_assoc($cek);
        $_SESSION['login'] = true;
        $_SESSION['user'] = $u;
        $_SESSION['level'] = $data['level']; // Simpan level jika perlu
        header("location:index.php");
    } else {
        $error = "Username atau Password salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem Desa</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="style.css" rel="stylesheet"> 
</head>

<body class="login-body">

    <div class="login-card">
        
        <div class="text-center mb-4">
            <h3 class="fw-bold text-success">MASUK SISTEM</h3>
            <p class="text-muted">Desa Digital Sejahtera</p>
        </div>

        <?php if(isset($error)): ?>
            <div class="alert alert-danger text-center p-2 mb-3">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label fw-bold">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukan username admin" required>
            </div>
            
            <div class="mb-4">
                <label class="form-label fw-bold">Password</label>
                <input type="password" name="password" class="form-control" placeholder="********" required>
            </div>
            
            <button type="submit" name="login" class="btn btn-primary w-100 py-2">
                Masuk Dashboard
            </button>
        </form>

        <div class="text-center mt-4">
            <small class="text-muted">&copy; <?= date('Y') ?> Pemerintah Desa Digital</small>
        </div>
        
    </div>

</body>
</html>