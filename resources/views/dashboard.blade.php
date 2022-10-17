<title>Cesta - Registrar</title>
<link rel="stylesheet" href="/css/styleDashboard.css">
<x-app-layout>
    <x-slot name="header" class="header-dashboard">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bem Vindo!') }} 
        </h2>
    </x-slot>


    <section class="features" id="features">

    <h1 class="heading"> Comece <span>Agora</span> </h1>

    <div class="box-container">

        <div class="box">
            
            <h3>Anunciar</h3>
            <p>Tem alimentos sobrando e está precisando de um dinheiro extra? comece agora a anunciar.</p>
            <a href="anunciar" class="btn">Saiba Mais</a>
        </div>

 
        <div class="box">
         
            <h3>Doar</h3>
            <p>Quer fazer uma boa ação? comece agora a doar alimentos que estão sobrando na sua casa.</p>
            <a href="register" class="btn">Saiba Mais</a>
        </div>

    </div>

</section>

<section class="features" id="features">

<h1 class="heading"> Editar <span>Perfil</span> </h1>

<div class="box-container">



    <div class="box">
     
        <h3>Quer trocar alguma informação do seu perfil?</h3>
        <p>Você pode trocar seu nome de usuário/email, alterar sua senha, ativar a autenticação de dois fatores, gerenciar as sessões dos navegadores e até mesmo deletar sua conta.</p>
        <a href="/user/profile" class="btn">Saiba Mais</a>
    </div>

</div>

</section>



   
    </div>
</x-app-layout>




