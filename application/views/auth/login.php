<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Perpustakaan — Login</title>

    <!-- Font Awesome -->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- SB Admin 2 (tetap dimuat untuk kompatibilitas) -->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css');?>" rel="stylesheet">

    <style>
        *, *::before, *::after { box-sizing: border-box; }

        body {
            font-family: 'DM Sans', sans-serif;
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: stretch;
            background: #0d1b2a;
        }

        /* ── LEFT PANEL ── */
        .login-left {
            flex: 1;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 48px 52px;
            background: linear-gradient(145deg, #0d1b2a 0%, #102236 50%, #0a2215 100%);
            overflow: hidden;
        }

        .login-left::before {
            content: '';
            position: absolute;
            top: -140px; left: -100px;
            width: 500px; height: 500px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(34,197,94,0.13) 0%, transparent 65%);
            pointer-events: none;
        }

        .login-left::after {
            content: '';
            position: absolute;
            bottom: -80px; right: -60px;
            width: 380px; height: 380px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(59,130,246,0.09) 0%, transparent 65%);
            pointer-events: none;
        }

        /* Brand */
        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
            position: relative;
            z-index: 2;
        }

        .brand-logo {
            width: 42px; height: 42px;
            background: linear-gradient(135deg, #22c55e, #16a34a);
            border-radius: 11px;
            display: flex; align-items: center; justify-content: center;
        }

        .brand-logo i { color: #fff; font-size: 18px; }

        .brand-name {
            font-family: 'Playfair Display', serif;
            font-size: 18px;
            font-weight: 700;
            color: #fff;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        /* Hero */
        .hero {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(34px, 3.5vw, 54px);
            font-weight: 400;
            color: #fff;
            line-height: 1.18;
            margin-bottom: 18px;
        }

        .hero h1 em {
            font-style: italic;
            color: #4ade80;
        }

        .hero p {
            font-size: 14px;
            color: rgba(255,255,255,0.4);
            line-height: 1.75;
            max-width: 300px;
        }

        /* Book spines decoration */
        .books {
            position: absolute;
            bottom: 90px;
            right: 52px;
            display: flex;
            align-items: flex-end;
            gap: 7px;
            z-index: 2;
        }

        .book {
            width: 22px;
            border-radius: 4px 4px 2px 2px;
            opacity: 0.55;
            transition: opacity 0.2s;
        }
        .book:hover { opacity: 0.85; }

        /* Stats */
        .stats {
            display: flex;
            gap: 36px;
            position: relative;
            z-index: 2;
        }

        .stat-num {
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            color: #4ade80;
            font-weight: 600;
            line-height: 1;
        }

        .stat-lbl {
            font-size: 11px;
            color: rgba(255,255,255,0.3);
            text-transform: uppercase;
            letter-spacing: 0.1em;
            margin-top: 3px;
        }

        /* ── RIGHT PANEL ── */
        .login-right {
            width: 460px;
            background: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 64px 56px;
            position: relative;
        }

        .login-right .eyebrow {
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: #22c55e;
            margin-bottom: 10px;
        }

        .login-right h2 {
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            font-weight: 600;
            color: #0d1b2a;
            line-height: 1.2;
            margin-bottom: 6px;
        }

        .login-right .subtitle {
            font-size: 13px;
            color: #94a3b8;
            margin-bottom: 36px;
        }

        /* Alert */
        .alert-custom {
            background: #fef2f2;
            border: 1px solid #fecaca;
            border-left: 4px solid #ef4444;
            color: #991b1b;
            padding: 12px 16px;
            border-radius: 10px;
            font-size: 13px;
            margin-bottom: 24px;
        }

        /* Form */
        .field {
            margin-bottom: 18px;
        }

        .field label {
            display: block;
            font-size: 11px;
            font-weight: 500;
            letter-spacing: 0.07em;
            text-transform: uppercase;
            color: #64748b;
            margin-bottom: 7px;
        }

        .input-icon {
            position: relative;
        }

        .input-icon i {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #cbd5e1;
            font-size: 14px;
            pointer-events: none;
        }

        .input-icon input {
            width: 100%;
            height: 50px;
            border: 1.5px solid #e2e8f0;
            border-radius: 12px;
            padding: 0 16px 0 44px;
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            color: #0d1b2a;
            background: #f8fafc;
            outline: none;
            transition: border-color 0.2s, background 0.2s, box-shadow 0.2s;
        }

        .input-icon input:focus {
            border-color: #22c55e;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(34,197,94,0.12);
        }

        .input-icon input::placeholder { color: #cbd5e1; }

        /* Options row */
        .options-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 28px;
            margin-top: 4px;
        }

        .remember-label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13px;
            color: #64748b;
            cursor: pointer;
        }

        .remember-label input[type=checkbox] {
            width: 16px; height: 16px;
            accent-color: #22c55e;
            cursor: pointer;
        }

        .link-green {
            font-size: 13px;
            color: #22c55e;
            text-decoration: none;
            font-weight: 500;
        }
        .link-green:hover { text-decoration: underline; }

        /* Submit button */
        .btn-masuk {
            width: 100%;
            height: 52px;
            background: linear-gradient(135deg, #22c55e, #16a34a);
            color: #fff;
            border: none;
            border-radius: 12px;
            font-family: 'DM Sans', sans-serif;
            font-size: 15px;
            font-weight: 500;
            letter-spacing: 0.03em;
            cursor: pointer;
            transition: opacity 0.2s, transform 0.1s;
        }

        .btn-masuk:hover { opacity: 0.92; }
        .btn-masuk:active { transform: scale(0.99); }

        .divider {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 24px 0 20px;
            color: #e2e8f0;
            font-size: 12px;
            color: #cbd5e1;
        }
        .divider::before, .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #e2e8f0;
        }

        .bottom-links {
            display: flex;
            justify-content: center;
            gap: 24px;
        }

        .copyright {
            position: absolute;
            bottom: 24px;
            left: 56px;
            right: 56px;
            text-align: center;
            font-size: 11px;
            color: #cbd5e1;
        }

        @media (max-width: 900px) {
            .login-left { display: none; }
            .login-right { width: 100%; padding: 48px 32px; }
        }
    </style>
</head>

<body>

    <!-- LEFT PANEL -->
    <div class="login-left">

        <div class="brand">
            <div class="brand-logo">
                <i class="fas fa-book-open"></i>
            </div>
            <span class="brand-name">Perpustakaan</span>
        </div>

        <div class="hero">
            <h1>Selamat datang<br>di dunia <em>ilmu</em><br>pengetahuan.</h1>
            <p>Kelola koleksi buku, anggota, dan peminjaman dengan sistem yang cerdas dan efisien.</p>
        </div>

        <!-- Decorative book spines -->
        <div class="books">
            <div class="book" style="height:155px; background:#22c55e;"></div>
            <div class="book" style="height:195px; background:#3b82f6;"></div>
            <div class="book" style="height:135px; background:#f59e0b;"></div>
            <div class="book" style="height:175px; background:#ec4899;"></div>
            <div class="book" style="height:115px; background:#8b5cf6;"></div>
            <div class="book" style="height:158px; background:#14b8a6;"></div>
        </div>

        <div class="stats">
            <div>
                <div class="stat-num">4</div>
                <div class="stat-lbl">Kategori</div>
            </div>
            <div>
                <div class="stat-num">6</div>
                <div class="stat-lbl">Anggota</div>
            </div>
            <div>
                <div class="stat-num">24</div>
                <div class="stat-lbl">Koleksi Buku</div>
            </div>
        </div>

    </div>

    <!-- RIGHT PANEL -->
    <div class="login-right">

        <div class="eyebrow">Portal Admin</div>
        <h2>Masuk ke akun<br>Anda</h2>
        <p class="subtitle">Gunakan kredensial admin untuk mengakses dashboard.</p>

        <!-- Flash error dari CI -->
        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert-custom">
                <i class="fas fa-exclamation-circle" style="margin-right:6px;"></i>
                <?= $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>

        <!-- Form — action & method tetap sama dengan aslinya -->
        <form method="post" action="<?= site_url('login/proses');?>">

            <div class="field">
                <label>Username</label>
                <div class="input-icon">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Masukkan username" required>
                </div>
            </div>

            <div class="field">
                <label>Password</label>
                <div class="input-icon">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Masukkan password">
                </div>
            </div>

            <div class="options-row">
                <label class="remember-label">
                    <input type="checkbox" id="rememberMe"> Ingat saya
                </label>
                <a href="forgot-password.html" class="link-green">Lupa password?</a>
            </div>

            <button type="submit" class="btn-masuk">
                <i class="fas fa-sign-in-alt" style="margin-right:8px;"></i>Masuk ke Dashboard
            </button>

        </form>

        <div class="divider">atau</div>

        <div class="bottom-links">
            <a href="register.html" class="link-green">
                <i class="fas fa-user-plus" style="margin-right:4px;"></i>Buat Akun Baru
            </a>
        </div>

        <p class="copyright">© 2026 Perpustakaan Digital. All rights reserved.</p>

    </div>

    <!-- Scripts (tetap sama) -->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>
    <script src="<?= base_url('assets/js/sb-admin-2.min.js');?>"></script>

</body>
</html>