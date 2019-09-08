<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>NodeProp - Especializada em Soluções Digitais</title>
    <meta name="description" content="Agência especializada em Marketing Digital, Criação Aplicativos Mobile">
    <meta name="keywords" content="Agência digital, Marketing, Sites">
    <meta name="author" content="Ralf Montel Garcia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'> 
    <link rel="icon" href="img/icon.png">
    <meta name="robots" content="index, follow">
    
    
</head>
<body>
    <header class="cabecalho container">
        <a href="index.html>"><h1 class="logo">NodeProp - Especializada em Soluções Digitais</h1><a>
        <button class="btn-menu bg-gradient"> <img class="icon icons8-Cardápio" width="25" height="25" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAsUlEQVRoQ+
  2WOw7AIAzFyv0P3c9WqYOH8FSIzJryFGxEM47N19i8/8MD/G1QAxooEvAKFQGWt/czcN6rjCUYMO7  1jv8Y8ABB+k90fwNhgNPj+71C0xGFAzUQBozxGkBE4Q/6GXCUSF8Zh7kwYYrHYY4CVqv3e4VWI0z9aIAIpesaSBOm/H4GnIXIebGOf2INFAnTdjRAAavV+71CqxGm  fjRAhNJ1DaQJU74GiFC6vr2BC9CyMDEeMNZFAAAAAElFTkSuQmCC"></button>
        <nav class="menu">
            <a class="btn-close">x</a>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Clientes</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">História</a></li>
                <li><a href="#">Quem somos</a></li>
                <li><a href="#">Contatos</a></li>
            </ul>
        </nav>
    </header>
    <div class="banner container">
        <div class="title">
            <h2> OUSE INOVAR! </h2>
            <h3>Criamos experiências e estabelecemos ações estratégicas que conectam marcas e consumidores</h3>
        </div>
        <div class="buttons">
            <button class="btn btn-cadastrar">Cadastrar <i class="fa fa-arrow-circle-right"></i></button>
            <button class="btn btn-sobre">Sobre <i class="fa fa-question-circle"></i></button>
        </div>
    </div>

    
    <main class="servicos container">

        <article class="servico">
            <a href="#"><img src="img/criacoes.jpg" alt="Campanhas publicitárias"></a>
            <div class="inner">
                <a href="#">Campanhas Publicitárias</a>
                <h4>Impressoes, VTs e Jingles</h4>
                <p>Como agência de publicidade aplicamos estratégias nos meios 
                   digitais para que a seu negócio seja visto por milhões de usuários. 
                   O Brasil é o 5° país mais conectado do mundo. Por este motivo, o seu 
                   negócio não pode ficar fora do do mercado digital
                </p>
            </div>
        </article>

        <article class="servico">
            <a href="#"><img src="img/md.jpg" alt="Marketing Digital"></a>
            <div class="inner">
                <a href="#">Marketing Digital</a>
                <h4>Administração de redes sociais</h4>
                <p>Como agência de publicidade aplicamos estratégias nos meios 
                   digitais para que a seu negócio seja visto por milhões de usuários. 
                   O Brasil é o 5° país mais conectado do mundo. Por este motivo, o seu 
                   negócio não pode ficar fora do do mercado digital
                </p>         
            </div>
        </article>

        <article class="servico">
            <a href="#"><img src="img/cs.jpg" alt="Criação de Sites"></a>
            <div class="inner">
                <a href="#">Criação de Sites</a>
                <h4>Sites Administráveis</h4>
                <p>Como agência de publicidade aplicamos estratégias nos meios 
                   digitais para que a seu negócio seja visto por milhões de usuários. 
                   O Brasil é o 5° país mais conectado do mundo. Por este motivo, o seu 
                   negócio não pode ficar fora do do mercado digital
                </p>         
            </div>
        </article>
    </main>

    <!-- NEWSLETTER -->
    <section class="newsletter container">
        <h2> Inscreva-se agora! </h2>
        <h3> Receba novidades, dicas e muito mais </h3>
        <form>
            <input type="email" name="email" placeholder="Seu email">
            <button> Cadastrar </button>
        </form>
    </section>

    <!-- FOOTER -->
    <footer class="rodape container bg-gradient">
        <div class="social-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
        </div>
        <p class="copyright">Copyright © NodeProp 2018. Todos os direitos reservados"</p>
    </footer>

    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script>
        $(".btn-menu").click(function(){
            $(".menu").show();
        });
        $(".btn-close").click(function(){
            $(".menu").hide();
        });
    </script>


</body>
</html>


