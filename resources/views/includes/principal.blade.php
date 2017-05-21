<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:title" content="Senior Assessoria Jurídica">
    <title>Senior Assessoria Jurídica</title>
    <base href="{{ asset('/') }}"/>
    <link rel="icon" href="imagens/favicon.ico"/>
    <!-- inline ../../../public/build/css/inline.css -->
    <link href='{{mix('/build/css/inline.css')}}' rel='stylesheet' inline type='text/css'>
</head>
<body class="@yield('classe-pg')">
<header id="topo-principal" class="bg-black">
    <div class="central">
        <a id="logo" href="home"></a>
        <button id="btn-menu-rpsv" class="hamburger hamburger--collapse" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        <nav id="menu-principal">
            <ul>
                <li><a class="lnk-menu lnk-home" href="#home">Home</a></li>
                <li><a class="lnk-menu lnk-quem-somos" href="#quem-somos">Quem<br/>Somos</a></li>
                <li><a class="lnk-menu lnk-direito-empresarial" href="#direito-empresarial">Direito<br/>Empresarial</a>
                </li>
                <li><a class="lnk-menu lnk-solucoes-tributarias"
                       href="#solucoes-tributarias">Soluções<br/>Tributarias</a></li>
                <li><a class="lnk-menu lnk-recuperacao-judicial"
                       href="#recuperacao-judicial">Recuperação<br/>Judicial</a></li>
                <li><a class="lnk-menu lnk-fale-conosco" href="#fale-conosco">Fale<br/>Conosco</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </div>
</header>
@yield('conteudo')
<footer id="rodape" class="bg-black">
    <span class="contact-info"></span>
    <span class="copyrigth">Senior Assessoria Juridica - Copyright 2017. Todos os direitos reservados.</span>
</footer>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="{{mix('/build/css/all.css')}}" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
@yield('css')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
@yield('javascript')
</body>
</html>