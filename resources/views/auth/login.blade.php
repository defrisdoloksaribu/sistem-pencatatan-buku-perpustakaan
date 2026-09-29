<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BiblioTech Hub</title>
    
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
            padding: 55px;
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
            margin-bottom: 35px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
            transition: 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .input-group:focus-within {
            border-bottom: 1px solid #818cf8;
            transform: translateY(-2px);
        }

        .input-group input {
            width: 100%;
            padding: 10px 0;
            background: transparent;
            border: none;
            outline: none;
            color: white;
            font-size: 15px;
        }

        .input-group label {
            position: absolute;
            top: 10px;
            left: 0;
            color: rgba(255, 255, 255, 0.4);
            pointer-events: none;
            transition: 0.3s;
        }

        /* Label terapung saat diisi atau fokus */
        .input-group input:focus ~ label,
        .input-group input:not(:placeholder-shown) ~ label {
            top: -20px;
            font-size: 11px;
            color: #818cf8;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
        }

        .login-btn {
            width: 100%;
            padding: 16px;
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
            margin-bottom: 30px;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
            padding: 22px;
            border-radius: 28px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #818cf8;
            font-size: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

    <div class="glass-card">
        <div class="text-center">
            <div class="icon-box">
                <i class="fa-solid fa-book-bookmark"></i>
            </div>
            
            <h2 class="brand-title text-3xl font-extrabold text-white mb-1">BIBLIOTECH HUB</h2>
            <p class="text-white/30 text-[9px] tracking-[0.6em] uppercase font-bold mb-12">Intelligence Archive</p>
        </div>

        <!-- FORM ACTION: Disesuaikan dengan Laravel Route Login -->
        <form method="POST" action="{{ route('login') }}">
            @csrf <!-- SOLUSI ERROR 419 -->

            <div class="input-group">
                <!-- placeholder=" " wajib ada agar CSS :not(:placeholder-shown) bekerja -->
                <input type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="off" placeholder=" ">
                <label for="email">Email ID</label>
            </div>

            <div class="input-group">
                <input type="password" name="password" id="password" required placeholder=" ">
                <label for="password">Access Key</label>
                <i class="fa-solid fa-eye-slash absolute right-0 top-3 text-white/20 cursor-pointer hover:text-white transition" id="btnEye"></i>
            </div>

            <div class="flex justify-between items-center text-[11px] text-white/40 mb-10">
                <label class="flex items-center cursor-pointer group">
                    <input type="checkbox" name="remember" class="rounded-sm border-white/10 bg-white/5 text-indigo-500 mr-2 focus:ring-0">
                    <span class="group-hover:text-white transition">Ingat akses saya</span>
                </label>
                <a href="{{ route('password.request') }}" class="hover:text-indigo-400 transition italic">Lupa kunci?</a>
            </div>

            <button type="submit" class="login-btn uppercase">
                Otorisasi Masuk
            </button>
        </form>

        <div class="mt-12 text-center">
            <p class="text-xs text-white/20 tracking-wider">
                Belum terdaftar? <a href="{{ route('register') }}" class="text-white font-bold hover:text-indigo-400 underline underline-offset-8 transition">Minta Akses</a>
            </p>
        </div>
    </div>

    <script>
        // Password Visibility Toggle
        const btnEye = document.querySelector('#btnEye');
        const inputPass = document.querySelector('#password');

        btnEye.addEventListener('click', function () {
            const type = inputPass.getAttribute('type') === 'password' ? 'text' : 'password';
            inputPass.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>