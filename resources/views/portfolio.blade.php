<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igor de Paula - Engenheiro de Software</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <header class="apresentacao">
        <img class="apresentacao__imagem" src="https://github.com/igorflpaula.png" alt="Foto de Martina Santos">

        <div class="apresentacao__conteudo">
            <p class="apresentacao__conteudo__ola">Hello World! Meu nome é Igor de Paula e sou</p>
            <h1 class="apresentacao__conteudo__titulo">Engenheiro de Software</h1>
            <p class="apresentacao__conteudo__descricao">
                Transformo necessidades em aplicações reais, evolventes e funcionais. Desenvolvo sistemas através da minha paixão pela tecnologia, contribuindo com soluções inovadoras e eficazes para desafios complexos.
            </p>
        </div>

        <ul class="apresentacao__links">
            <li><a href="#" class="tag tag-github">GitHub</a></li>
            <li><a href="#" class="tag tag-php">PHP</a></li>
            <li><a href="#" class="tag tag-css">CSS</a></li>
            <li><a href="#" class="tag tag-html">HTML</a></li>
            <li><a href="#" class="tag tag-js">JavaScript</a></li>
        </ul>
    </header>

    <main class="projects">
        <h2 class="projects__title">Veja os projetos em destaque</h2>

        <div class="projects__grid">
            @foreach($projects as $project)
            <x-project-card :project="$project" />
            @endforeach
        </div>
    </main>

    <footer class="contato">
        <p class="contato__subtitulo">Contato</p>
        <h2 class="contato__titulo">Gostou do meu trabalho?</h2>
        <p class="contato__descricao">Entre em contato ou acompanhe as minhas redes sociais!</p>

        <div class="contato__links">
            <x-social-button link="#" icon="fab fa-linkedin-in" label="LinkedIn" />
            <x-social-button link="#" icon="fab fa-instagram" label="Instagram" />
            <x-social-button link="#" icon="fab fa-github" label="GitHub" />
            <x-social-button link="#" icon="fas fa-envelope" label="E-mail" />
        </div>
    </footer>

</body>

</html>