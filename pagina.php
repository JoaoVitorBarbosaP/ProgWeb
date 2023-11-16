<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>FG Refrigeração</title>
</head>
<body>

    <header>
        <div class="interface">
            <div class="logo">
                <a href="http://localhost/php_vicson/miniprojetoo/">
                <img src="https://grupofgrefrigeracao.com.br/wp-content/uploads/2018/02/icone-1.png" width="75" height="75" alt="FG Refrigeração" id="logo" data-height-percentage="54" data-actual-width="264" data-actual-height="265">
                </a>
            </div>

            <div class= "btn-topo">
                <a href="#dif">
                    <button>Diferenciais</button>
                </a>    
            </div>

            <div class= "btn-topo">
                <a href="#sob">
                    <button>Sobre nós</button>
                </a>    
            </div>

            <div class= "btn-topo">
                <a href="#prod">
                    <button>Produtos</button>
                </a>    
            </div>

            <div class="btn-topo">
                <a href="#cont">
                   <button>Contato</button>
                </a>   
            </div>  
        </div>

    </header>

    <main>
        <section class="container">                     
                    <div class="centro1">
                        <h1>Soluções em Climatização</h1>
                    <div class="centro2">
                        <p>Nossa maior expertise é levar conforto para o seu ambiente<span>.</span></p>
                    </div>
                        <div class="img-site">
                        <img width="1920" height="640" src="https://grupofgrefrigeracao.com.br/wp-content/uploads/2018/02/banner_principal_sem_texto_para_programacao.png">
                    </div>                                                     
             </div>
        </section>
         
        <section id="dif" class="especialidades">
            <div class="interface">
                <h2 class="titulo">NOSSOS DIFERENCIAIS</h2>
                <div class="flex">
                

                    <div class="especialidades-box">
                        <i class="bi bi-headset"></i>
                        <h3>Atendimento Personalizado</h3>
                        <p>Confiança e segurança através de um atendimento próximo.</p>
                    </div>

                    <div class="especialidades-box">
                        <i class="bi bi-lightbulb-fill"></i>
                        <h3>Tecnologia e inovação</h3>
                        <p>Soluções diferenciadas e personalizadas em climatização.</p>
                    </div>

                    <div class="especialidades-box">
                        <i class="bi bi-gear-wide-connected"></i>
                        <h3>Produtos 100% inverter</h3>
                        <p>Mais economia, performance e conforto para o seu ambiente.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="sob" class="sobre">
            <div class="interface">
                <div class="flex">
                    <div class="img-sobre">
                        <img src="https://grupofgrefrigeracao.com.br/wp-content/uploads/2018/02/imagem_empresa-1.png">
                        <div class="txt-sobre">
                            <h2>Ar condicionado com qualidade e<span>tecnologia japonesa</span></h2>                               
                            <p>A FG é uma das representantes da Daikin no Brasil, uma empresa líder no segmento de climatização, que está no país a mais de 10 anos, trazendo inovação e garantindo qualidade e conforto para os seus clientes.</p>
                            <p>Com uma vasta linha de produtos Daikin em seu portfólio, a FG possui grande experiência e profissionais de ponta, além de suporte e atendimento personalizado para desenvolver a melhor solução em climatização, do início ao fim, para os seus clientes.</p>
                        </div> 
                    </div>
                </div>
            </div>
        </section>

        <section id="prod" class="produtos">
            <div class="interface">          
                <h2 class="titulo">NOSSOS PRODUTOS</h2> 
                <div class="flex">                                                        
                        
                    <div class="titulo-prods">
                         <img width="300" height="300" src="https://grupofgrefrigeracao.com.br/wp-content/uploads/2018/02/split-conjunto_de_equipamentos.png">
                         <h1>Split Inverter</h1>
                         <p>Tecnologia Inverter consolidada no mercado e sinônimo de baixo consumo de energia.</p>
                    <div class="btn-prod">
                    <a href="#cont">
                    <button>Quero um orçamento</button>
                    </a>                   
                    </div>                            
            </div>
                
                <div class="titulo-prods">
                    <img width="300" height="300" src="https://grupofgrefrigeracao.com.br/wp-content/uploads/2018/02/vrv-conjunto-de-equipamentos.png">
                    <h1>VRV</h1>
                    <p>Tecnologia de ponta em climatização, com 16 modelos de evaporadoras, controle via smart phone, longos comprimentos de tubulações.</p>
                    <div class="btn-prod">
                    <a href="#cont">
                        <button>Quero um orçamento</button>
                    </a>                
                    </div>
                </div>                                         
                
                <div class="titulo-prods">
                    <img width="300" height="300" src="https://grupofgrefrigeracao.com.br/wp-content/uploads/2018/02/multsplit-conjunto-de-equipamentos.png">
                    <h1>Multisplit</h1>
                    <p>Economias de energia e de espaço de instalação, design diferenciado das evaporadoras e baixo nível de ruído.</p>
                    <div class="btn-prod">
                    <a href="#cont">
                        <button>Quero um orçamento</button>
                    </a>               
                    </div>
                </div>
                </div>
            </div>
        </section>

        <section id="cont" class="formulario">
            <div class="interface">
                <h2 class="titulo">FALE CONOSCO</h2>
            </div>
            <form action="?pg=contato" method="POST">
                <input   name="nome"   type="text" placeholder="Nome: " required>
                <input   name="email"   type="text" placeholder="Email: " required>
                <input   name="telefone"   type="text" placeholder="Número: ">               
                <input   name="assunto"   type="text" placeholder="Produto: ">               
                <textarea  name="mensagem"     placeholder="Sua dúvida: " required></textarea>
                <div class="btn-eviar"><input name="submit" type="submit" value="ENVIAR "></div>
            </form>
        </section>
    </main>

    <footer>
        <div class="interface">
            <div class="line-footer">
                <div class="flex">
                    <div class="logo-footer">
                        <img width="60" height="60" src="https://grupofgrefrigeracao.com.br/wp-content/uploads/2018/02/icone-1.png">
                    </div>
                    <div class="btn-social">
                        <a href="https://twitter.com/FGClimatizacao" target="_blank"><button><i class="bi bi-twitter-x"></i></button></a>
                        <a href="https://www.facebook.com/fgsolucaoemclimatizacao" target="_blank"><button><i class="bi bi-facebook"></i></button></a>
                    </div>
                </div>
            </div>

            <div class="line-footer">
                <p><i class="bi bi-envelope"></i> <a href="mailto:joaovitor.dr@hotmail.com">joaovitor.dr@hotmail.com</a></p>
            </div>
        </div>
    </footer>
  
</body>
</html>