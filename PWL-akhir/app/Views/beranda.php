<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Perpus Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f6f9; }
        .sidebar { background-color: #222d32; min-height: 100vh; color: #b8c7ce; }
        .sidebar a { color: #b8c7ce; text-decoration: none; padding: 10px 15px; display: block; font-size: 14px;}
        .sidebar a:hover, .sidebar a.active { background-color: #1e282c; color: #fff; border-left: 3px solid #3c8dbc; }
        .sidebar-header { background-color: #367fa9; padding: 15px; color: white; text-align: center; font-weight: bold; font-size: 20px;}
        .user-panel { padding: 15px; border-bottom: 1px solid #1a2226; display: flex; align-items: center; gap: 10px;}
        .user-panel img { width: 45px; border-radius: 50%; }
        .navbar-custom { background-color: #3c8dbc; padding: 10px 20px; color: white; }
        .menu-title { padding: 10px 15px; font-size: 12px; background: #1a2226; color: #4b646f; margin: 0; text-transform: uppercase;}
        .small-box { border-radius: 2px; position: relative; display: block; margin-bottom: 20px; box-shadow: 0 1px 1px rgba(0,0,0,0.1); color: white; padding: 20px; overflow: hidden;}
        .small-box h3 { font-size: 38px; font-weight: bold; margin: 0; z-index: 5; }
        .small-box p { font-size: 15px; z-index: 5; }
        .small-box .icon { position: absolute; top: -10px; right: 10px; z-index: 0; font-size: 90px; color: rgba(0,0,0,0.15); }
        .small-box-footer { display: block; padding: 3px 0; text-align: center; background: rgba(0,0,0,0.1); color: rgba(255,255,255,0.8); text-decoration: none; margin: -20px -20px -20px -20px; margin-top: 10px; font-size: 14px;}
        .small-box-footer:hover { background: rgba(0,0,0,0.15); color: #fff; }
        .bg-aqua { background-color: #00c0ef !important; }
        .bg-green { background-color: #00a65a !important; }
        .bg-yellow { background-color: #f39c12 !important; }
        .bg-red { background-color: #dd4b39 !important; }
        .center-logo { text-align: center; margin-top: 50px; opacity: 0.8;}
        .center-logo i { font-size: 80px; color: #1f3a5f; }
        .footer-custom { margin-top: 50px; font-size: 12px; color: #666; border-top: 1px solid #ddd; padding-top: 10px; display: flex; justify-content: space-between;}
    </style>
</head>
<body>

<div class="d-flex">
    <div class="sidebar" style="width: 250px; flex-shrink: 0;">
        <div class="sidebar-header">
            <i class="fa fa-book"></i> E - Perpus
        </div>
        <div class="user-panel">
            <img src="https://ui-avatars.com/api/?name=Administrator&background=random" alt="User Image">
            <div>
                <div style="color: white; font-weight: bold; font-size: 14px;">Administrator</div>
                <div style="font-size: 12px; color: #8bc34a;"><i class="fa fa-check-circle"></i> Akun Terverifikasi</div>
            </div>
        </div>
        
        <p class="menu-title">Main Menu</p>
        <a href="#" class="active"><i class="fa fa-home me-2"></i> Dashboard</a>
        
        <a href="#masterData" data-bs-toggle="collapse" class="d-flex justify-content-between align-items-center">
            <span><i class="fa fa-folder me-2"></i> Master Data</span>
            <i class="fa fa-angle-down"></i>
        </a>
        <div class="collapse show" id="masterData" style="background-color: #2c3b41;">
            <a href="#"><i class="fa fa-circle-o me-2" style="font-size: 10px;"></i> Data Anggota</a>
            <a href="#"><i class="fa fa-circle-o me-2" style="font-size: 10px;"></i> Data Penerbit</a>
            <a href="#"><i class="fa fa-circle-o me-2" style="font-size: 10px;"></i> Administrator</a>
            <a href="#"><i class="fa fa-circle-o me-2" style="font-size: 10px;"></i> Data Peminjaman</a>
        </div>
        
        <a href="#" class="d-flex justify-content-between align-items-center">
            <span><i class="fa fa-book-open me-2"></i> Katalog Buku</span>
            <i class="fa fa-angle-left"></i>
        </a>
        <a href="#"><i class="fa fa-file-alt me-2"></i> Laporan Perpustakaan</a>

        <p class="menu-title">Lain Lain</p>
        <a href="#"><i class="fa fa-info-circle me-2"></i> Identitas Aplikasi</a>
        <a href="#"><i class="fa fa-envelope me-2"></i> Pesan</a>

        <p class="menu-title">Lanjutan</p>
        <a href="#"><i class="fa fa-sign-out-alt me-2"></i> Keluar</a>
    </div>

    <div class="flex-grow-1">
        <div class="navbar-custom d-flex justify-content-between align-items-center">
            <div><i class="fa fa-bars" style="cursor: pointer;"></i></div>
            <div class="d-flex align-items-center gap-3">
                <i class="fa fa-envelope"></i>
                <i class="fa fa-bell"></i>
                <div class="d-flex align-items-center gap-2">
                    <img src="https://ui-avatars.com/api/?name=Administrator&background=random" style="width: 25px; border-radius: 50%;" alt="User">
                    <span style="font-size: 14px;">Administrator</span>
                </div>
            </div>
        </div>

        <div class="p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 style="margin: 0;">Dashboard <small style="font-size: 14px; color: #777;">Senin, 13 April 2026</small></h3>
                <div style="font-size: 12px; color: #777;">
                    <i class="fa fa-home"></i> Home > Dashboard
                </div>
            </div>

            <div class="alert alert-light" style="border-left: 5px solid #eee; background: white;">
                Selamat Datang, Administrator di Administrator Perpustakaan LTE CS.
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="small-box bg-aqua">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <h3>0</h3>
                        <p>Anggota</p>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="small-box bg-green">
                        <div class="icon"><i class="fa fa-book"></i></div>
                        <h3>0</h3>
                        <p>Buku</p>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="small-box bg-yellow">
                        <div class="icon"><i class="fa fa-sign-out-alt"></i></div>
                        <h3>0</h3>
                        <p>Peminjaman</p>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="small-box bg-red">
                        <div class="icon"><i class="fa fa-sign-in-alt"></i></div>
                        <h3>0</h3>
                        <p>Pengembalian</p>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="center-logo">
                <i class="fa fa-book mb-3"></i>
                <h2>E - Perpus</h2>
                <p style="color: #666; font-size: 14px;">
                    Alamat : JL. Parakan Saat No. 20A | Email : contact@e-perpus.com | Nomor Telpon : 0228298492
                </p>
            </div>

            <div class="footer-custom">
                <div>Hak Cipta &copy; 2026. FA Team PT Pacifica Raya Technology.</div>
                <div>Versi 1.0</div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>