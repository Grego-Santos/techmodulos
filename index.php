<html lang="pt-br">

<head>
    <?php include_once'head.php';?>
    <title>Tech Módulos</title>
</head>

<body>
    <header>
        <?php include_once 'menu.php'; ?>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/techmodulos-madeira.jpg" class="d-block w-100 image" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/trator.png" class="d-block w-100 image" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <main>
        <section id="slider-parceiros">
            <h1 class="title">PARCEIROS</h1>
            <div class="slider">
                <div class="slide-track">
                    <div class="slide">
                        <img src="image/logo-empresa/case ih-10.png" height="100" alt="" />
                    </div>
                    <div class="slide">
                        <img src="image/logo-empresa/cat-13.png" height="100" alt="" />
                    </div>
                    <div class="slide">
                        <img src="image/logo-empresa/chevrolet-03.png" height="100" alt="" />
                    </div>
                    <div class="slide">
                        <img src="image/logo-empresa/ford-09.png" height="100" alt="" />
                    </div>
                    <div class="slide">
                        <img src="image/logo-empresa/hyundai-07.png" height="100" alt="" />
                    </div>
                    <div class="slide">
                        <img src="image/logo-empresa/jcb-14.png" height="100" alt="" />
                    </div>
                    <div class="slide">
                        <img src="image/logo-empresa/john deere-12.png" height="100" alt="" />
                    </div>
                    <div class="slide">
                        <img src="image/logo-empresa/mercedes-06.png" height="100" alt="" />
                    </div>
                    <div class="slide">
                        <img src="image/logo-empresa/new holland-11.png" height="100" alt="" />
                    </div>
                    <div class="slide">
                        <img src="image/logo-empresa/trimble-15.png" height="100" alt="" />
                    </div>
                    <div class="slide">
                        <img src="image/logo-empresa/volkswagen-08.png" height="100" alt="" />
                    </div>
                    <div class="slide">
                        <img src="image/logo-empresa/volvo-05.png" height="100" alt="" />
                    </div>
                    <div class="slide">
                        <img src="image/logo-empresa/case ih-10.png" height="100" alt="" />
                    </div>
                    <div class="slide">
                        <img src="image/logo-empresa/cat-13.png" height="100" alt="" />
                    </div>
                </div>
            </div>
        </section>
        <section id="apresentacao-servicos">
            <h1 class="title">NOSSOS SERVIÇOS</h1>

            <section class="section-apresentacao-servicos">
                <section class="box-apresentacao-servicos">
                    <h1>MÁQUINAS AGRÍCOLAS</h1>
                    <img src="image/maquina-agricola.jpg" alt="">
                </section>
                <section class="box-apresentacao-servicos">
                    <h1>AGRICULTURA DE PRECISÃO</h1>
                    <img src="image/maquina-agricola.jpg" alt="">
                </section>
                <section class="box-apresentacao-servicos">
                    <h1>MÁQUINAS PESADAS</h1>
                    <img src="image/maquina-agricola.jpg" alt="">
                </section>
                <section class="box-apresentacao-servicos">
                    <h1>CAMINHÕES</h1>
                    <img src="image/maquina-agricola.jpg" alt="">
                </section>
            </section>
        </section>
        <section id="section-produtos">
            <div class="cor"></div>
        </section>
        <section id="section-empresa">
            <h1 class="">EMPRESA</h1>
            <section class="flex">
                <img src="image/logomarca-02.png" alt="">
                <p>
                    A Tech Módulos é uma empresa especializada em manutenção de equipamentos agrícolas, constructions, linha leve e pesada. Fazemos manutenção em módulos de injeção, transmissão, hidráulicos, tração, equipamentos de agricultura de precisão (GPS, antenas),
                    painéis e outros, visando um custo mais acessiveis para os nossos clientes. Saiba mais sobre nós
                    <a href="empresa.php">clicando aqui.</a>
                </p>
            </section>
        </section>
    </main>
    <footer>
        <?php include_once 'rodape.php';?>
    </footer>
</body>

</html>