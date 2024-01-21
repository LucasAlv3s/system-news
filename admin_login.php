<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador Login - News</title>
    <!-- CDN via jsDelivr -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="">
            <h2>Login de Administrador</h2>
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="pwd" class="col-sm-2 col-form-label">Senha</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="pwd">
                </div>
            </div>
            <!--
                <div class="col-auto">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                        <label class="form-check-label" for="autoSizingCheck">
                            Lembra-me
                        </label>
                    </div>
                </div>
            -->
            <div class="col-auto">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>

    <!-- CDN via jsDelivr -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>