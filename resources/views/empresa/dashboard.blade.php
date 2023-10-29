<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <title>Ver Todos os Candidatos</title>
    <link rel="stylesheet" href="">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=HK+Grotesk:wght@300&display=swap" rel="stylesheet">
    <style>
        /*  dashboard */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        /* cabeçalho */
        header {
            background-color: #f8f8f8;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
            font-family: "Open Sans Extra Bold", sans-serif;
            font-size: 24px;
            color: #265894;
        }

        header .navigation {
            display: flex;
            align-items: center;
        }

        header .navigation a {
            margin-right: 20px;
            font-family: "HK Grotesk Light", sans-serif;
            font-size: 16px;
            color: #545454;
            text-decoration: none;
            transition: color 0.3s;
        }

        header .navigation a:last-child {
            color: #265894;
        }

        header .navigation a:hover {
            color: #265894;
        }

        /* conteúdo principal */
        .content {
            display: flex;
            flex-direction: row;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            width: 300px;
            background-color: #d9d9d9;
            padding: 20px;
            transition: width 0.3s ease-in-out;
            overflow-x: hidden;
        }

        .sidebar.expand {
            width: 60px;
        }

        .sidebar .candidatos,
        .sidebar .vagas,
        .sidebar .editar,
        .sidebar .manifestações {
            background-color: #fff;
            border: 1px solid #265894;
            padding: 20px;
            margin-bottom: 20px;
        }

        .sidebar .candidatos img,
        .sidebar .vagas img,
        .sidebar .editar img,
        .sidebar .manifestações img {
            width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .sidebar a {
            color: #000;
            text-decoration: none;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }

        .ad-box {
            background-color: #e9e9e9;
            border: 1px solid #265894;
            padding: 20px;
            margin-bottom: 20px;
        }

        .ad-box h2 {
            margin: 0;
        }

        .ad-box p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>SIEC</h1>
        <nav class="navigation">
            <a href="#">Home</a>
            <a href="#">Quem somos</a>
            <a href="#" class="enter">Entrar</a>
        </nav>
    </header>

    <div class="content">
        <div class="sidebar" onclick="toggleSidebar()">
            <div class="candidatos">
                <a href="#">Ver todos os candidatos</a>
            </div>
            <div class="vagas">
                <a href="#">Ver vagas cadastradas</a>
            </div>
            <div class="editar">
                <a href="#">Editar perfil da empresa</a>
            </div>
            <div class="manifestações">
                <a href="#">Ver manifestações de interesse</a>
            </div>
        </div>
        <div class="content">
            <div class="ad-box">
                <img src=".jpg" alt="Cadidato">
                <h2>Candidato</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tristique, libero vel tristique efficitur.</p>
            </div>
            <div class="ad-box">
                <img src=".jpg" alt="candidato">
                <h2>Candidato</h2>
                <p>Proin posuere risus vel enim dapibus volutpat. Aliquam ac enim eu elit rhoncus scelerisque.</p>
            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('expand');
        }
    </script>
    
</body>
</html>
