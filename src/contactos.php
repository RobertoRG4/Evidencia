<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de tu página</title>
    <?php include ("./componets/head.php") ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-vK3s8zy38nv6MnA+0GPxg2FS/ywkKlHQnPT0upPjfj/wGDO4W7qy7Xpg7BywAVV54L/7kOQ56h/WwMCqXcJvzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .info-container {
            border: 1px solid #ced4da;
            border-radius: 5px;
            transition: box-shadow 0.3s;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: #f8f9fa;
            margin-bottom: 10px;
        }

        .info-container:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <?php include ("./componets/navbar.php") ?>
    <main class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre*</label>
                        <input type="text" class="form-control" id="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo electrónico*</label>
                        <input type="email" class="form-control" id="correo">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono">
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="mensaje" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="info-container">
                    <h1 class="mb-4">Contáctanos ¡Trabajemos Juntos!</h1>
                </div>
                <div class="info-container">
                    <p class="mb-4">Si tienes alguna duda, comentario o sugerencia, puedes contactarnos y nos comunicaremos contigo lo antes posible</p>
                </div>
                <div class="info-container">
                    <p><i class="fab fa-whatsapp"></i> 7226789045</p>
                </div>
                <div class="info-container">
                    <p><i class="fas fa-envelope"></i> round-wear@gmail.com</p>
                </div>
                <div class="info-container">
                    <p>round-wear* <i class="fab fa-facebook"></i> <i class="fab fa-twitter"></i> <i class="fab fa-instagram"></i></p>
                </div>
            </div>
        </div>
    </main>
    <?php include ("./componets/footer.php") ?>
</body>
</html>


