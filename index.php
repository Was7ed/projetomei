<?php 
	require_once '_ref/header.php';
 ?>

	<header class="main">
		<nav>
			<div>
				<img src="_img/logo.png" alt="">
			</div>
			<ul>
				<a href="index.php"><li>HOME</li></a>
				<a href="#"><li>NOSSA EMPRESA</li></a>
				<a href="#"><li>NOVIDADES</li></a>
				<a href="#"><li>Cadastre-se</li></a>
				<a href="#"><li>Entrar</li></a>
			</ul>
			<span class="hidden" id="Open">
				<a href="" onclick="openSideMenu()">
					<svg width="30" height="30">
           			 	<path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
          			  	<path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
          				<path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
		        	</svg>
				</a>
			</span>
			<div class="hidden" id="side_menu">
				<a href="#" onclick="closeSideMenu()">&times;</a>
				<a href="index.php"><li>HOME</li></a>
				<a href="#"><li>NOSSA EMPRESA</li></a>
				<a href="#"><li>NOVIDADES</li></a>
				<a href="#"><li>Cadastre-se</li></a>
				<a href="#"><li>Entrar</li></a>
			</div>
		</nav>

	</header>

	<section id="primeiro">
		<div id="img-front">

			<h2>A melhor resposta para sua micro ou pequena empresa</h2>

			<h3>Você tem dúvidas? Nós respondemos</h3>

			<button id="btn-mais">SAIBA MAIS</button>

		</div>		
	</section>


	<section id="segundo">
		
		<div class="container">

			<h2>Porque a consultoria MEI é boa pra você!</h2>

		<div id="master-div">
			<div id="section2-car" class="owl-carousel owl-theme slider-carrossel">

			    <div class="item"><img src="_img/Gestão.jpg" alt=""></div>
			    <div class="item"><img src="_img/Financeira.jpg" alt=""></div>
			    <div class="item"><img src="_img/example.png" alt=""></div>
			    <div class="item"><img src="_img/example.png" alt=""></div>
			    <div class="item"><img src="_img/example.png" alt=""></div>
			    <div class="item"><img src="_img/example.png" alt=""></div>
			    <div class="item"><img src="_img/example.png" alt=""></div>
			    <div class="item"><img src="_img/example.png" alt=""></div>
			    

			</div>
		</div>

		<div class="blue-label">
			<h4>Ganhe tempo, associe-se agora ao Consultoria MEI e ganhe uma equipe de consultores especialistas para lhe ajudar. Isso tudo na palma da sua mão</h4>
		</div>

	</section>

	<section class="telasCelulares esquerdo" id="terceiro">
		<div class="celular">
		<img src="_img/celular.png" alt="">
			<!-- <div>
				
			</div> -->
		</div>


		<div class="info">
			<h3>RH/Pessoal</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, rem laborum beatae culpa a reiciendis esse odit iure officia fugit, deleniti quos fugiat nulla praesentium, tenetur dolore ducimus. Quae quos beatae laborum voluptatum sequi, ad provident modi accusamus consequatur possimus error voluptatem, minima suscipit culpa. Enim alias eveniet tempore accusantium quaerat, ipsa voluptatem quae saepe aliquid, esse cum corrupti voluptate reprehenderit placeat! Minima perspiciatis, nobis nostrum quam non dolore temporibus, illo ad facere sapiente quaerat. Rerum ipsam et impedit asperiores, velit maiores sunt nam enim numquam minus! Vero nostrum vitae dolor aut eius inventore sint, dolore ipsam deleniti consectetur tenetur!</p>
			<button>Saiba Mais</button>
		</div>

	</section>

	<section class="telasCelulares direito" id="quarto">
		<div class="info">
			<h3>RH/Pessoal</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, rem laborum beatae culpa a reiciendis esse odit iure officia fugit, deleniti quos fugiat nulla praesentium, tenetur dolore ducimus. Quae quos beatae laborum voluptatum sequi, ad provident modi accusamus consequatur possimus error voluptatem, minima suscipit culpa. Enim alias eveniet tempore accusantium quaerat, ipsa voluptatem quae saepe aliquid, esse cum corrupti voluptate reprehenderit placeat! Minima perspiciatis, nobis nostrum quam non dolore temporibus, illo ad facere sapiente quaerat. Rerum ipsam et impedit asperiores, velit maiores sunt nam enim numquam minus! Vero nostrum vitae dolor aut eius inventore sint, dolore ipsam deleniti consectetur tenetur!</p>
			<button>Saiba Mais</button>
		</div>

		<div class="celular">
		<img src="_img/celular.png" alt="">
			<!-- <div>
				
			</div> -->
		</div>
	</section>

	<section class="telasCelulares esquerdo" id="quinto">
		<div class="celular">
		<img src="_img/celular.png" alt="">
			<!-- <div>
				
			</div> -->
		</div>


		<div class="info">
			<h3>RH/Pessoal</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, rem laborum beatae culpa a reiciendis esse odit iure officia fugit, deleniti quos fugiat nulla praesentium, tenetur dolore ducimus. Quae quos beatae laborum voluptatum sequi, ad provident modi accusamus consequatur possimus error voluptatem, minima suscipit culpa. Enim alias eveniet tempore accusantium quaerat, ipsa voluptatem quae saepe aliquid, esse cum corrupti voluptate reprehenderit placeat! Minima perspiciatis, nobis nostrum quam non dolore temporibus, illo ad facere sapiente quaerat. Rerum ipsam et impedit asperiores, velit maiores sunt nam enim numquam minus! Vero nostrum vitae dolor aut eius inventore sint, dolore ipsam deleniti consectetur tenetur!</p>
			<button>Saiba Mais</button>
		</div>

	</section>

	<section class="telasCelulares direito" id="sexto">

		<div class="info">
			<h3>RH/Pessoal</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, rem laborum beatae culpa a reiciendis esse odit iure officia fugit, deleniti quos fugiat nulla praesentium, tenetur dolore ducimus. Quae quos beatae laborum voluptatum sequi, ad provident modi accusamus consequatur possimus error voluptatem, minima suscipit culpa. Enim alias eveniet tempore accusantium quaerat, ipsa voluptatem quae saepe aliquid, esse cum corrupti voluptate reprehenderit placeat! Minima perspiciatis, nobis nostrum quam non dolore temporibus, illo ad facere sapiente quaerat. Rerum ipsam et impedit asperiores, velit maiores sunt nam enim numquam minus! Vero nostrum vitae dolor aut eius inventore sint, dolore ipsam deleniti consectetur tenetur!</p>
			<button>Saiba Mais</button>
		</div>

		<div class="celular">
		<img src="_img/celular.png" alt="">
			<!-- <div>
				
			</div> -->
		</div>
	</section>

	<section class="telasCelulares esquerdo" id="setimo">
		<div class="celular">
		<img src="_img/celular.png" alt="">
			<!-- <div>
				
			</div> -->
		</div>


		<div class="info">
			<h3>RH/Pessoal</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, rem laborum beatae culpa a reiciendis esse odit iure officia fugit, deleniti quos fugiat nulla praesentium, tenetur dolore ducimus. Quae quos beatae laborum voluptatum sequi, ad provident modi accusamus consequatur possimus error voluptatem, minima suscipit culpa. Enim alias eveniet tempore accusantium quaerat, ipsa voluptatem quae saepe aliquid, esse cum corrupti voluptate reprehenderit placeat! Minima perspiciatis, nobis nostrum quam non dolore temporibus, illo ad facere sapiente quaerat. Rerum ipsam et impedit asperiores, velit maiores sunt nam enim numquam minus! Vero nostrum vitae dolor aut eius inventore sint, dolore ipsam deleniti consectetur tenetur!</p>
			<button>Saiba Mais</button>
		</div>

	</section>

	<section id="bridge-cel">
		<div class="blue-label"><h4>Faça logo sua inscrição e comece a ter os beneficios que só a consultoria MEI te oferece</h4></div>

		<div><button>INSCREVA-SE</button></div>
	</section>

	<section id="footer">
		<div id="depoimentos">
			<div class="footer-text"><p>Depoimentos</p></div>
			<div id="depo-carousel">
				<div id="footer-car" class="owl-theme slider-carrossel owl-carousel">
				    <div class="item"><img src="_img/Depoimento export.png" alt=""></div>
				    <div class="item"><img src="_img/Depoimento_export2.png" alt=""></div>
				    <div class="item"><img src="_img/Depoimento_export3.png" alt=""></div>
				</div>
			</div>
		</div>
		<div id="novidades">
			<div class="footer-text"><p>Novidades</p></div>
			<div id="noticias-carousel">
				<div id="noticias-car" class="owl-theme slider-carrossel owl-carousel">
				    <div class="item"><h1>Noticia 1</h1><p><span class="20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aspernatur, quas, doloremque voluptates, numquam, tenetur quod asperiores provident eos sunt amet totam ducimus consequatur esse magnam id temporibus sed laudantium.</span></p></div>

				    <div class="item"><h1>Noticia 2</h1><p><span class="20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aspernatur, quas, doloremque voluptates, numquam, tenetur quod asperiores provident eos sunt amet totam ducimus consequatur esse magnam id temporibus sed laudantium.</span></p></div>
				    
				    <div class="item"><h1>Noticia 3</h1><p><span class="20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aspernatur, quas, doloremque voluptates, numquam, tenetur quod asperiores provident eos sunt amet totam ducimus consequatur esse magnam id temporibus sed laudantium.</span></p></div>

				    <div class="item"><h1>Noticia 4</h1><p><span class="20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aspernatur, quas, doloremque voluptates, numquam, tenetur quod asperiores provident eos sunt amet totam ducimus consequatur esse magnam id temporibus sed laudantium.</span></p></div>

				    <div class="item"><h1>Noticia 5</h1><p><span class="20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aspernatur, quas, doloremque voluptates, numquam, tenetur quod asperiores provident eos sunt amet totam ducimus consequatur esse magnam id temporibus sed laudantium.</span></p></div>

				    <div class="item"><h1>Noticia 6</h1><p><span class="20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aspernatur, quas, doloremque voluptates, numquam, tenetur quod asperiores provident eos sunt amet totam ducimus consequatur esse magnam id temporibus sed laudantium.</span></p></div>

				    <div class="item"><h1>Noticia 7</h1><p><span class="20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aspernatur, quas, doloremque voluptates, numquam, tenetur quod asperiores provident eos sunt amet totam ducimus consequatur esse magnam id temporibus sed laudantium.</span></p></div>
				</div>
			</div>
		</div>
		<div id="footer-footer">
			<div class="footer-text"><ul>
				<a href=""><li>Termos de uso</li></a>
				<a href=""><li>Politica de privacidade</li></a>
			</ul></div>
		</div>
	</section>

<?php 

	require_once '_ref/footer.php';

 ?>