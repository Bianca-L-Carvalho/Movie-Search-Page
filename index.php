
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="app" class="p-5">
        <header class="flex justify-space-between py-5">
            <h3>Movie App</h3>
            <div class="item-field">
                <input type="text" name="query" class="p-2" placeholder="Pesquisar filmes" id="query">
            </div>
        </header>
        <main class="movies flex justify-space-between py-5">
            <div class="movie">
                <img src="https://cinemas.nos.pt/_layouts/15/Handlers/RenderImage.ashx?w=154&h=217&file=53131.jpg" alt="">
                <h5 class="text-center">Coração de Fogo</h5>
            </div>
        </main>
    </div>

    <script src="ajax.js"></script>
</body>

</html>