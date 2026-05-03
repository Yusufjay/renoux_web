<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Access | Renoux.co</title>
    <link rel="icon" href="<?= base_url('images/logo.png') ?>" type="image/png">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;

            /* Menggunakan warna abu-abu gelap (Graphite) yang lembut dan elegan, bukan hitam pekat */
            background-color: #383838;

            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #333;
        }

        .login-card {
            /* Tetap menggunakan putih agar kontras dengan latar belakang */
            background: #ffffff;
            padding: 50px 40px;
            border: 1px solid #222;
            width: 350px;
            text-align: center;
            /* Bayangan dibuat sedikit lebih gelap agar menyatu dengan background */
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
        }

        .login-card:hover {
            border-color: #d4af37;
            transition: 0.5s;
        }

        .login-logo {
            width: 90px;
            margin-bottom: 20px;
            background-color: #ffffff;
        }

        .login-card h2 {
            font-family: 'Georgia', serif;
            letter-spacing: 3px;
            margin-bottom: 30px;
            font-size: 24px;
            color: #111;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .form-group label {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #888;
        }

        input {
            width: 100%;
            padding: 12px 0;
            background: transparent;
            border: none;
            border-bottom: 1px solid #ccc;
            color: #111;
            font-size: 15px;
            outline: none;
            transition: 0.3s;
            margin-top: 5px;
        }

        input:focus {
            border-bottom-color: #d4af37;
        }

        button {
            width: 100%;
            padding: 15px;
            background-color: #0a0a0a;
            color: #fff;
            border: none;
            font-weight: bold;
            letter-spacing: 2px;
            cursor: pointer;
            margin-top: 30px;
            text-transform: uppercase;
            transition: 0.3s;
        }

        button:hover {
            background-color: #d4af37;
            color: #000;
        }

        .error-msg {
            background: #ffeaeb;
            color: #dd3333;
            font-size: 12px;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
            border: 1px solid #ffc1c1;
        }

        .back-link {
            display: block;
            margin-top: 25px;
            font-size: 11px;
            color: #888;
            text-decoration: none;
            letter-spacing: 1px;
        }

        .back-link:hover {
            color: #d4af37;
        }
    </style>
</head>

<body>
    <?= $this->renderSection('content') ?>
</body>

</html>