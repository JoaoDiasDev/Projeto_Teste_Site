<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JoãoDiasDev</title>
    <link rel="shortcut icon" type="image/png" href="/images/logoX1.png" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="style.css">
    <script src="form.js"></script>
</head>

<body>
    <header>
        <a href="#" class="logo"><img src="images/logoX1.png" alt="logo" class="logotipo" /></a>
        <div class="toggle" onclick="toggleMenu();"></div>
        <ul class="menu">
            <li><a href="#home" onclick="toggleMenu();">Home</a></li>
            <li><a href="#about" onclick="toggleMenu();">Sobre Mim</a></li>
            <li><a href="#services" onclick="toggleMenu();">Serviços</a></li>
            <li><a href="#work" onclick="toggleMenu();">Trabalhos</a></li>
            <li><a href="#contact" onclick="toggleMenu();">Contato</a></li>
            <li><a href="/projetos.html" onclick="toggleMenu();" style="display: none;">Projetos</a></li>
        </ul>
    </header>
    <section class="banner" id="home">
        <div class="textBx">
            <h2>Sou o <br /><span>JoãoDias</span></h2>
            <h3>
                Analista de Sistemas formado, FullStack Web<br>Foco em
                desenvolvimento de sites
            </h3>
            <a href="#about" class="btn">Sobre mim</a>
        </div>
    </section>
    <section class="about" id="about">
        <div class="heading">
            <h2>Sobre Mim</h2>
        </div>
        <div class="content">
            <div class="contentBx w50">
                <h3>Desenvolvedor FullStack Web</h3>
                <p>
                    Sempre me interessei por todo e qualquer assunto na area da tecnologia, já estudei e vi de tudo um
                    pouco, das mais diversas areas que engloba a tecnologia hoje em dia, mas na parte de <span
                        class="important">
                        Desenvolvimento Web</span> foi onde de fato me encontrei, cada vez aprendendo mais, sempre
                    buscando conhecimento.
                    <br /><br />
                    Já sou formado em Análise de Sistemas(UNIFCV-2020), já completei diversos cursos na area, na sua
                    grande maioria na <a href="https://www.udemy.com/" target="_blank">Udemy</a>, mas também na
                    plataforma <a href="https://www.cursoemvideo.com/" target='_blank'>Curso em Video</a>. Fora diversos
                    cursos através do <a href="https://www.youtube.com/" target="_blank">Youtube</a>. Com todo esse
                    conhecimento que adquiri me possibilitou a estar apto a desenvolver para Web da forma que for
                    necessário, a depender da situação, utilizando a melhor ferramenta para cada ocasião. Abaixo pode
                    conferir meu currículo.
                </p>
                <img src="images/curriculo.svg" class="curriculo" alt="curriculo"></img>
                <a href="src/curriculo.pdf" download="Currículo" target="_blank">
                    <button class="btn">Currículo
                    </button>
                </a>
            </div>
            <div class="w50">
                <img src="images/img1.jpg" class="img" alt="tecnologia computador" />
            </div>
        </div>
    </section>
    <section class="services" id="services">
        <div class="heading white">
            <h2>Serviços</h2>
            <p>
                Deixe-me ajudar com sua ideia!
            </p>
        </div>
        <div class="content">
            <div class="servicesBx">
                <img src="images/icon2.png" alt="icone computador" />
                <h2>Web Design <span class="codeIcon">
                        < />
                    </span></h2>
                <p>
                    Design completo do seu site dentro do prazo estipulado, analise da situação e utilização da
                    melhor
                    ferramenta necessária para que possa tornar seu site responsivo, dentro dos padrões e com um
                    visual
                    agradável para você e seus clientes.
                </p>
            </div>
            <div class="servicesBx">
                <img src="images/icon1.png" alt="icone computador" />
                <h2>Desenvolvimento <span class="codeIcon">
                        < />
                    </span> Sites</h2>
                <p>
                    Posso também desenvolver seu site do início, com todas boas praticas sendo utilizadas e sempre
                    adaptando conforme desejar, vamos projetar juntos seu site para que possa iniciar ou dar mais
                    engajamento para sua ideia ou empresa.
                </p>
            </div>
            <div class="servicesBx">
                <img src="images/icon3.png" alt="icone computador" />
                <h2>Desenvolvimento <span class="codeIcon">
                        < />
                    </span> Tema Wordpress</h2>
                <p>
                    Temas desenvolvidos por mim para o Wordpress para que possa utilizar no seu site de acordo, em
                    breve nos grandes sites para que possam comprar e utilizar. Todos testados e seguindo todas
                    normas e boas praticas necessárias.
                </p>
            </div>
        </div>
        </div>
    </section>
    <section class="work" id="work">
        <div class="heading">
            <h2>Trabalhos</h2>
        </div>
        <div class="content">
            <div class="workBx">
                <a href="https://santafrida.com.br/santa-frida/" target="_blank">
                    <img src="images/product1.jpg" alt="meus projetos">
                </a>
            </div>
            <div class="workBx">
                <a href="https://fruithome.com.br/" target="_blank">
                    <img src="images/product2.jpg" alt="meus projetos">
                </a>
            </div>
            <div class="workBx">
                <a href="#work" target="_blank">
                    <img src="images/product3.jpg" alt="meus projetos">
                </a>
            </div>
        </div>
        <div class="heading">
            <a href="#" class="btn">Veja Mais</a>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="heading white">
            <h2>Contato</h2>
            <p>Fale comigo caso tenha qualquer dúvida</p>
        </div>
        <div class="content">
            <div class="contactInfo">
                <h3>Informações para Contato</h3>
                <div class="contactInfoBx">
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="text">
                            <h3>Endereço</h3>
                            <p>Itaocara-RJ</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="text">
                            <h3>Celular</h3>
                            <a href="tel:+5522997988055">
                                <p>+55 22 997988055</p>
                            </a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="text">
                            <h3>Email</h3>
                            <a href="mailto:joaodiasworking@gmail.com">
                                <p>joaodiasworking@gmail.com</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-image">
                <img src="images/image_contact.svg" class="contact-image-1" alt="telefone com mensagens">
            </div>
            <div class="formBx">
            </div>
        </div>
    </section>
    <div class="copyright">
        <p>Copyright &copy; JoãoDiasDev. Todos Direitos Reservados.</p>
    </div>

    <script type="text/javascript">
    window.addEventListener("scroll", function() {
        let header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
    });

    function toggleMenu() {
        let menuToggle = document.querySelector(".toggle");
        let menu = document.querySelector(".menu");
        menuToggle.classList.toggle("active");
        menu.classList.toggle("active");
    };
    </script>
</body>

</html>