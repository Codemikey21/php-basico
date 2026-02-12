<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Contacto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
        }

        .container {
            background: #ffffff;
            padding: 40px;
            width: 100%;
            max-width: 420px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            animation: fadeIn 1s ease-in-out;
        }

        .container h1 {
            text-align: center;
            margin-bottom: 10px;
            color: #333;
        }

        .container p {
            text-align: center;
            margin-bottom: 25px;
            color: #666;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            color: #444;
            display: block;
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.3s;
            font-size: 14px;
        }

        input:focus, textarea:focus {
            border-color: #2a5298;
            box-shadow: 0 0 5px rgba(42,82,152,0.4);
        }

        textarea {
            resize: none;
            height: 100px;
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: #2a5298;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #1e3c72;
            transform: translateY(-2px);
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Bienvenido</h1>
        <p>Déjanos tu mensaje y te responderemos pronto</p>

        <form action = "/store" method="GET">
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required>
            </div>

            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje"name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>
            </div>

            <button type="submit">Enviar Mensaje</button>
        </form>
    </div>

</body>
</html>
