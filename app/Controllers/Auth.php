<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function process()
    {
        $session = session();
        
        // Mengambil inputan dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Pengecekan Login Statis (username: admin, password: admin123)
        if ($username === 'april' && $password === '123') {
            // Jika benar, simpan data ke session
            $session->set([
                'username'   => $username,
                'role'       => 'admin',
                'isLoggedIn' => true
            ]);
            return redirect()->to('/admin/dashboard');
        } else {
            // Jika salah, kembalikan ke halaman login dengan pesan error
            $session->setFlashdata('error', 'Username atau Password salah!');
            return redirect()->to('/login');
        }
    }

    public function logout()
{
    session()->destroy();
    // Jangan redirect ke 'index.php', tapi arahkan ke rute 'home' atau root '/'
    return redirect()->to(base_url('/')); 
}
}