<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index()
    {
        // Menampilkan halaman login
        return view('login');
    }

    public function process()
    {
        $session = session();
        $model = new \App\Models\AdminModel();
        
        // Tangkap data dari form
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        // Cari admin berdasarkan email
        $data = $model->where('email', $email)->first();
        
        if($data){
            // Cocokkan password (karena di database kita hash pakai BCRYPT)
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            
            if($verify_pass){
                // Kalau sukses, simpan sesi dan lempar ke beranda
                $ses_data = [
                    'id_admin'  => $data['id'],
                    'nama'      => $data['nama_lengkap'],
                    'email'     => $data['email'],
                    'logged_in' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/');
            }else{
                // Kalau password salah
                $session->setFlashdata('msg', 'Waduh le, Passwordnya salah nih!');
                return redirect()->to('/login');
            }
        }else{
            // Kalau email nggak ketemu
            $session->setFlashdata('msg', 'Email tidak ditemukan le!');
            return redirect()->to('/login');
        }
    }

    public function buatAdmin()
    {
        $model = new \App\Models\AdminModel();
        
        $data = [
            'email'        => 'admin@perpus.com',
            // Ini kunci rahasianya: kita biarkan sistem yang meracik hash aslinya
            'password'     => password_hash('admin123', PASSWORD_BCRYPT), 
            'nama_lengkap' => 'Super Admin'
        ];
        
        $model->insert($data);
        return "Akun berhasil dibuat le! Silakan login pakai email: admin@perpus.com | password: admin123";
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }

    public function forgotPassword()
    {
        // Menampilkan halaman lupa password
        return view('forget_password');
    }

    public function processForgotPassword()
    {
        // Nanti logika untuk mengirim email link reset password ditaruh di sini le.
        // Untuk sekarang, kita asumsikan sukses dan langsung dilempar kembali ke halaman login.
        return redirect()->to('/login');
    }
}
