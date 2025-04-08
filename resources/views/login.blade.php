<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #76c3e2, #b0e5f5);
            height: 100vh;
        }
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #0fbff5;
        }
        .btn-primary {
            background-color: #0fbff5;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0fbff5;
        }
        .logo {
            max-width: 20em;
        
        }
        .text-primary{
            color: #0fbff5 !important
        }
    </style>
</head>
<body>
    <div class="d-flex align-items-center justify-content-center h-100">
        <div class="card p-4" style="width: 100%; max-width: 400px;">
            <div class="text-center mb-4">
                <!-- ✅ LOGO -->
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo mb-3">
                <h2 class="text-primary">Bem-vindo</h2>
                <p class="text-muted">Acesse sua conta</p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="seu@email.com" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="••••••••" required>
                </div>


                <button type="submit" class="btn btn-primary w-100">Entrar</button>

                
            </form>
        </div>
    </div>
</body>
</html>