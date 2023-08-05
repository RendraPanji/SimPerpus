<div class="container mt-2">
    <h1>Selamat Datang di Perpustakaan Desamind</h1>
    <p>Ini adalah halaman dashboard perpusatakaan</p>
    <a href="<?= site_url('register') ?>">Register</a>
    <!-- styling -->
    <style>
        a{
            display: inline-block;
            padding: 7px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        a:hover{
            background-color: #0062cc;
            color: #fff;
        }
    </style>
    <button class="btn btn-primary mb-1" onclick="window.location.href='login'">Login</button>
</div>