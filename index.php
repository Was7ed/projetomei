<?php 
	require_once '_ref/header.php';
 ?>

	<header>
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
			<span class="hidden">
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
			<div class="owl-carousel owl-theme slider-carrossel">

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

	<section id="terceiro">
		<div class="celular">
			<div>
				
			</div>
		</div>


		<div class="info">
			<h3>RH/Pessoal</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, rem laborum beatae culpa a reiciendis esse odit iure officia fugit, deleniti quos fugiat nulla praesentium, tenetur dolore ducimus. Quae quos beatae laborum voluptatum sequi, ad provident modi accusamus consequatur possimus error voluptatem, minima suscipit culpa. Enim alias eveniet tempore accusantium quaerat, ipsa voluptatem quae saepe aliquid, esse cum corrupti voluptate reprehenderit placeat! Minima perspiciatis, nobis nostrum quam non dolore temporibus, illo ad facere sapiente quaerat. Rerum ipsam et impedit asperiores, velit maiores sunt nam enim numquam minus! Vero nostrum vitae dolor aut eius inventore sint, dolore ipsam deleniti consectetur tenetur!</p>
			<button>Saiba Mais</button>
		</div>

	</section>


<?php 

	require_once '_ref/footer.php';

 ?>