<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - BiblioTech Hub</title>
    
    <!-- Google Fonts: Poppins & Syne -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Syne:wght@700;800&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.8), rgba(30, 41, 59, 0.9)), 
                        url('https://images.unsplash.com/photo-1512820790803-83ca734da794?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            overflow: hidden;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 35px;
            padding: 45px 55px;
            width: 100%;
            max-width: 440px;
            box-shadow: 0 50px 100px rgba(0, 0, 0, 0.6);
            position: relative;
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .brand-title {
            font-family: 'Syne', sans-serif;
            letter-spacing: -1px;
        }

        .input-group {
            position: relative;
            margin-bottom: 30px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
            transition: 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .input-group:focus-within {
            border-bottom: 1px solid #818cf8;
            transform: translateY(-2px);
        }

        .input-group input {
            width: 100%;
            padding: 8px 0;
            background: transparent;
            border: none;
            outline: none;
            color: white;
            font-size: 14px;
        }

        .input-group label {
            position: absolute;
            top: 8px;
            left: 0;
            color: rgba(255, 255, 255, 0.4);
            pointer-events: none;
            transition: 0.3s;
        }

        .input-group input:focus ~ label,
        .input-group input:not(:placeholder-shown) ~ label {
            top: -20px;
            font-size: 10px;
            color: #818cf8;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .login-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(90deg, #6366f1, #a855f7, #6366f1);
            background-size: 200% auto;
            color: white;
            border-radius: 18px;
            font-weight: 700;
            letter-spacing: 1.5px;
            transition: 0.5s;
            box-shadow: 0 10px 25px rgba(99, 102, 241, 0.4);
        }

        .login-btn:hover {
            background-position: right center;
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 15px 40px rgba(99, 102, 241, 0.6);
        }

        .icon-box {
            display: inline-flex;
            margin-bottom: 20px;
            background: rgba(255, 255, 255, 0.05);
            padding: 18px;
            border-radius: 25px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #818cf8;
            font-size: 24px;
        }

        /* Pemanis: Titik-titik dekoratif */
        .glass-card::before {
            content: '';
            position: absolute;
            top: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background: radial-gradient(#ffffff20 2px, transparent 0);
            background-size: 8px 8px;
            opacity: 0.5;
        }
    </style>
</head>
<body>

    <div class="glass-card">
        <div class="text-center">
            <div class="icon-box">
                <i class="fa-solid fa-user-plus"></i>
            </div>
            
            <h2 class="brand-title text-3xl font-extrabold text-white mb-1">MINTA AKSES</h2>
            <p class="text-white/30 text-[9px] tracking-[0.6em] uppercase font-bold mb-8">Intelligence Archive</p>
        </div>

        <!-- TAMPILKAN ERROR JIKA ADA -->
        @if ($errors->any())
            <div class="mb-6 p-3 rounded-lg bg-red-500/20 border border-red-500/50 text-red-200 text-[10px] text-center">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf <!-- ANTI 419 -->

            <!-- NAMA LENGKAP -->
            <div class="input-group">
                <input type="text" name="name" value="{{ old('name') }}" required autocomplete="off" placeholder=" ">
                <label>Nama Lengkap</label>
            </div>

            <!-- EMAIL ID -->
            <div class="input-group">
                <input type="email" name="email" value="{{ old('email') }}" required autocomplete="off" placeholder=" ">
                <label>Email ID</label>
            </div>

            <!-- ACCESS KEY (PASSWORD) -->
            <div class="input-group">
                <input type="password" name="password" id="password" required placeholder=" ">
                <label>Access Key</label>
                <i class="fa-solid fa-eye-slash absolute right-0 top-2 text-white/20 cursor-pointer hover:text-white transition" id="btnEye"></i>
            </div>

            <!-- VERIFIKASI KEY (CONFIRM PASSWORD) -->
            <div class="input-group">
                <input type="password" name="password_confirmation" id="password_confirmation" required placeholder=" ">
                <label>Verifikasi Key</label>
            </div>

            <button type="submit" class="login-btn uppercase text-xs">
                Buat Akun Sekarang
            </button>
        </form>

        <div class="mt-8 text-center">
            <p class="text-xs text-white/20 tracking-wider">
                Sudah punya akses? <a href="{{ route('login') }}" class="text-white font-bold hover:text-indigo-400 underline underline-offset-8 transition">Otorisasi Masuk</a>
            </p>
        </div>
    </div>

    <script>
        // Password Visibility Toggle
        const btnEye = document.querySelector('#btnEye');
        const inputPass = document.querySelector('#password');
        const inputConfirm = document.querySelector('#password_confirmation');

        btnEye.addEventListener('click', function () {
            const type = inputPass.getAttribute('type') === 'password' ? 'text' : 'password';
            inputPass.setAttribute('type', type);
            inputConfirm.setAttribute('type', type); // Samakan dengan konfirmasi
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>