<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <h1 class="display-3 text-center my-5">Compresor de Imagen</h1>
        </header>
        <main class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <form action="load.php" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <div class="row">
                                        <p class="">Tamaño a redimensionar:</p>
                                        <div class="col-md-6">
                                            <label for="width" class="form-label">Ancho</label>
                                            <input type="number" class="form-control" name="width" id="width" aria-describedby="helpId" placeholder="400" required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="heigth" class="form-label">Alto</label>
                                            <input type="number" class="form-control" name="heigth" id="heigth" aria-describedby="helpId" placeholder="400" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Elige una imagen a comprimir</label>
                                    <input type="file" class="form-control" name="image" id="image" aria-describedby="fileHelpId"/>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">
                                    Comprimir imagen
                                </button>
                            </form>
                        </div>
                    </div> 
                </div>       
            </div>
        </main>
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
