<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password - E-Perpus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f6f9; }
        .bg-perpus { background-color: #3c8dbc; } 
        .btn-black { background-color: #222d32; color: white; } 
        .btn-black:hover { background-color: #1a2226; color: white; }
        .form-control:focus { border-color: #3c8dbc; box-shadow: 0 0 0 0.25rem rgba(60, 141, 188, 0.25); }
        .login-container { min-height: 100vh; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row login-container">
        <div class="col-md-6 d-none d-md-flex flex-column justify-content-center align-items-center text-white bg-perpus p-5">
            <i class="fa fa-book-open fa-5x mb-4"></i>
            <h1 class="fw-bold display-4 mb-3">Hello<br>E-Perpus!</h1>
            <p class="text-center" style="font-size: 1.1rem; max-width: 400px; opacity: 0.9;">
                Kelola data buku, anggota, dan sirkulasi perpustakaan dengan cepat, rapi, dan efisien. Sat-set tanpa ribet!
            </p>
            <div class="mt-auto" style="opacity: 0.7; font-size: 14px;">
                &copy; 2026 E-Perpus. All rights reserved.
            </div>
        </div>

        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center bg-white p-5">
            <div style="width: 100%; max-width: 400px;">
                <h3 class="fw-bold d-flex align-items-center mb-5">
                    <i class="fa fa-book me-2 text-primary"></i> E-Perpus
                </h3>

                <h4 class="fw-bold mb-2">Lupa Password?</h4>
                <p class="text-muted mb-4" style="font-size: 14px;">
                    Masukkan alamat email Anda yang terdaftar. Kami akan mengirimkan tautan untuk mengatur ulang kata sandi Anda.
                </p>

                <form action="/lupa-password/process" method="POST">
                    <div class="mb-4">
                        <input type="email" class="form-control form-control-lg border-0 border-bottom rounded-0 px-0" 
                               placeholder="Email Administrator" required>
                    </div>
                    
                    <button type="submit" class="btn btn-black btn-lg w-100 mb-3" style="border-radius: 8px;">
                        Kirim Tautan Reset
                    </button>
                    
                    <div class="text-center mt-4">
                        <a href="/login" class="text-decoration-none text-muted" style="font-size: 14px;">Kembali ke halaman <strong class="text-dark">Login</strong></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>