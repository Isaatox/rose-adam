@extends('layouts.main')

@section('pageTitle', 'Les Roses Adam')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/espece.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <style type="text/css">
        .searchFilter {
            margin-bottom: 20px;
        }

        .searchFilter.btn {
            display: inline-block;
            font-weight: 400;
            line-height: 1.25;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .5rem 1rem;
            font-size: 16px;
            border-radius: .25rem;
            height: 50px;
            min-width: 20px;
        }

        .searchFilter .btn-secondary {
            color: #373a3c;
            background-color: #fff;
            border: 1px solid #ccc;
        }

        .searchFilter .btn-secondary:hover {
            color: #373a3c;
            background-color: #e6e6e6;
            border-color: #adadad;
        }

        .searchFilter .btn-search {
            background-color: #00aced;
            color: #fff;
            border: 1px solid #00aced;
        }

        .searchFilter .btn-search:hover {
            background-color: #e509ec;
            color: #fff;
            border: 1px solid #e509ec;
        }

        .searchFilter .label-icon {
            display: none;
        }

        .searchFilter .glyphicon {
            margin-right: -15px;
        }

        .searchFilter .dropdown-menu .category_filters {
            min-width: 178px;
            width: 100%;
            margin: 15px 0 0 -25px;
        }

        .searchFilter .dropdown-menu-right {
            right: 170px;
            min-width: 175px;
            top: 90%;
        }

        .searchFilter .dropdown-menu .category_filters li {
            list-style-type: none;
            padding: 2px 10px;
            font-size: 18px;
        }

        .searchFilter .dropdown-menu .category_filters label {
            margin-left: 15px;
        }

        @media (min-width: 1400px) {
            .ct-header .ct-jumbotron .inner {
                max-width: 470px;
                min-height: 230px;
            }
        }

        @media (max-width: 1400px) {
            .ct-header-slider .item {
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center top;
            }
        }

        @media (min-width: 769px) and (max-width: 1400px) {
            .ct-header-slider .item {
                height: auto;
            }
        }

        @media (max-width: 1260px) {
            #dots-container {
                display: none;
            }
        }

        @media (min-width: 992px) {
            .ct-footer2 .ct-newsletter {
                max-width: 100%;
            }

            #dots-container {
                bottom: 100px;
            }
        }

        @media (min-width: 768px) {
            .ct-searchbar:before {
                height: 92px;
                bottom: -1px;
            }

            .page-scrolled .navbar .navbar-nav li>* {
                min-height: 67px;
                height: 67px;
            }

            .page-scrolled .navbar .navbar-nav {
                height: 100% !important;
            }

            .ct-current-facts h2 {
                margin: 0 auto 0px;
            }

            .contentNews .ct-recent-news {
                flex-direction: inherit;
            }

            .contentFaq .faq_question .col-sm-11 {
                padding-right: 0px;
            }

            .peopleDetail h2 {
                margin-top: -5px;
            }

            .searchFilter .btn {
                min-width: 172px;
            }

            .searchFilter .label-icon {
                display: inline-block;
            }

            .searchFilter .glyphicon {
                margin-right: -5px;
            }

            .ct-header .ct-jumbotron {
                top: 0;
                margin-top: 5%;
            }

            .ct-header .ct-jumbotron h1 {
                font-size: 2.5em;
            }

            .ct-news.ct-news--bigger h3 {
                font-size: 41px;
                line-height: 1.4;
            }
        }

        @media (max-width: 768px) {
            .ct-header .ct-jumbotron {
                width: 80%;
                margin: 20px 10px;
                top: 40%;
                width: 95%;
            }

            .ct-header .ct-jumbotron .inner {
                max-width: 100%;
            }

            #dots-container {
                display: none;
            }

            .main-section {
                margin-top: -80px;
            }

            .searchFilter .dropdown-menu-right {
                right: 0px;
            }
        }
    </style>

    <div class="container mt-5 mb-5" style="margin-top: 5em !important">


        <h2>Mentions légal</h2>
        <p>Merci de lire avec attention les différentes modalités d’utilisation du présent site avant d’y parcourir ses
            pages. En vous connectant sur ce site, vous acceptez sans réserves les présentes modalités. Aussi, conformément
            à l’article n°6 de la Loi n°2004-575 du 21 Juin 2004 pour la confiance dans l’économie numérique, les
            responsables du présent site internet <a href="http://51.77.140.41/">http://51.77.140.41/</a> sont :
        </p>

        <p><b>Contenu :</b> Ensemble des éléments constituants l’information présente sur le Site, notamment textes – images
            – vidéos.</p>

        <p><b>Conditions d’utilisation :</b>
            Ce site (<a href="http://51.77.140.41/">http://51.77.140.41/</a>) est proposé en différents langages web (HTML,
            HTML5, Javascript, CSS, etc…) pour
            un meilleur confort d'utilisation et un graphisme plus agréable, nous vous recommandons de recourir à des
            navigateurs modernes comme Internet explorer, Safari, Firefox, Google Chrome, etc… Les Roses Adam met en
            œuvre tous les moyens dont elle dispose, pour assurer une information fiable et une mise à jour fiable de ses
            sites internet. Toutefois, des erreurs ou omissions peuvent survenir. L'internaute devra donc s'assurer de
            l'exactitude des informations auprès de , et signaler toutes modifications du site qu'il jugerait utile. n'est
            en aucun cas responsable de l'utilisation faite de ces informations, et de tout préjudice direct ou indirect
            pouvant en découler.
        </p>

        <p><b>Cookies :</b> Le site <a href="http://51.77.140.41/">http://51.77.140.41/</a> peut-être amené à vous demander
            l’acceptation des cookies pour des
            besoins de statistiques et d'affichage. Un cookies est une information déposée sur votre disque dur par le
            serveur du site que vous visitez. Il contient plusieurs données qui sont stockées sur votre ordinateur dans un
            simple fichier texte auquel un serveur accède pour lire et enregistrer des informations . Certaines parties de
            ce site ne peuvent être fonctionnelles sans l’acceptation de cookies.</p>

        <p><b>Liens hypertextes :</b>Les sites internet de peuvent offrir des liens vers d’autres sites internet ou d’autres
            ressources disponibles sur Internet. Les Roses Adam ne dispose d'aucun moyen pour contrôler les sites en
            connexion avec ses sites internet. ne répond pas de la disponibilité de tels sites et sources externes, ni ne la
            garantit. Elle ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du
            contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu’ils proposent,
            ou de tout usage qui peut être fait de ces éléments. Les risques liés à cette utilisation incombent pleinement à
            l'internaute, qui doit se conformer à leurs conditions d'utilisation. Les utilisateurs, les abonnés et les
            visiteurs des sites internet de ne peuvent mettre en place un hyperlien en direction de ce site sans
            l'autorisation expresse et préalable de Les Roses Adam. Dans l'hypothèse où un utilisateur ou visiteur
            souhaiterait mettre en place un hyperlien en direction d’un des sites internet de Les Roses Adam, il lui
            appartiendra d'adresser un email accessible sur le site afin de formuler sa demande de mise en place d'un
            hyperlien. Les Roses Adam se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en
            justifier sa décision.

        </p>

        <p><b>Services Fournis</b>
            L'ensemble des activités de la société ainsi que ses informations sont présentés sur notre site
            <a href="http://51.77.140.41/">http://51.77.140.41/</a>

            Les Roses Adam s’efforce de fournir sur le site <a href="http://51.77.140.41/">http://51.77.140.41/</a> des
            informations aussi précises que
            possible. les renseignements figurant sur le site <a href="http://51.77.140.41/">http://51.77.140.41/</a> ne
            sont pas exhaustifs et les photos non
            contractuelles. Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne. Par
            ailleurs, tous les informations indiquées sur le site <a href="http://51.77.140.41/">http://51.77.140.41/</a>
            sont données à titre indicatif, et
            sont susceptibles de changer ou d’évoluer sans préavis.
        </p>

        <p><b>Limitation contractuelles sur les données : </b>
            Les informations contenues sur ce site sont aussi précises que possible et le site remis à jour à différentes
            périodes de l’année, mais peut toutefois contenir des inexactitudes ou des omissions. Si vous constatez une
            lacune, erreur ou ce qui parait être un dysfonctionnement, merci de bien vouloir le signaler par email, à
            l’adresse <a href="mailto:hugo.jenouvrier@gmail.fr">hugo.jenouvrier@gmail.fr</a> , en décrivant le problème de
            la manière la plus précise possible (page
            posant problème, type d’ordinateur et de navigateur utilisé, …). Tout contenu téléchargé se fait aux risques et
            périls de l'utilisateur et sous sa seule responsabilité. En conséquence, ne saurait être tenu responsable d'un
            quelconque dommage subi par l'ordinateur de l'utilisateur ou d'une quelconque perte de données consécutives au
            téléchargement. De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne
            contenant pas de virus et avec un navigateur de dernière génération mis-à-jour Les liens hypertextes mis en
            place dans le cadre du présent site internet en direction d'autres ressources présentes sur le réseau Internet
            ne sauraient engager la responsabilité de Les Roses Adam.
        </p>

        <p><b>Propriété intellectuelle :</b>
            Ce site web (structure générale, architecture, textes, photographies, illustrations, logos, icônes, fichiers
            disponibles en téléchargement) constitue une œuvre protégée en France par le Code de la Propriété
            Intellectuelle, et à l'étranger par les conventions internationales en vigueur sur le droit d'auteur. La
            violation de l'un des droits d'auteur de l'œuvre est un délit de contrefaçon passible aux termes de l'article
            L.335-2 du Code de la Propriété Intellectuelle, de trois ans d'emprisonnement et de 300 000 Euros d'amende.

            Les marques (semi figuratives ou non), ainsi que les logos figurant sur le site sont protégés.

            Toute reproduction totale ou partielle de ces marques ou de ces logos effectuée à partir des éléments du site
            sans l'autorisation des ayants droit est donc prohibée.

            L’utilisateur ne peut mettre en place un hyperlien en direction du site sans autorisation expresse et préalable.
        </p>

        <p><b>Déclaration à la CNIL :</b>
            Conformément à la loi 78-17 du 6 janvier 1978 (modifiée par la loi 2004-801 du 6 août 2004 relative à la
            protection des personnes physiques à l'égard des traitements de données à caractère personnel) relative à
            l'informatique, aux fichiers et aux libertés, ce site n'a pas fait l'objet d'une déclaration auprès de la
            Commission nationale de l'informatique et des libertés (www.cnil.fr).
        </p>

        <h3>Hébergement</h3>
        <p>Ce site est hébergé par la société OVH, immatriculée au Registre du Commerce et des Sociétés de Roubaix–Tourcoing
            sous le numéro 424 761 419 00045, dont le siège social est situé 2 rue Kellermann 59100 Roubaix - France.
        </p>

        <h3>Données personnelles</h3>
        <p>De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre
            site Internet <a href="http://51.77.140.41/">http://51.77.140.41/</a>. Cependant, ce principe comporte certaines
            exceptions. En effet, pour certains
            services proposés par notre site, vous pouvez être amenés à nous communiquer certaines données telles que :
            votre nom & prénom, votre adresse électronique, et votre numéro de téléphone.
            Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique « contact
            ». Dans tous les cas, vous pouvez refuser de fournir vos données personnelles. Dans ce cas, vous ne pourrez pas
            utiliser les services du site, notamment celui de solliciter des renseignements sur notre société. Enfin, nous
            pouvons collecter de manière automatique certaines informations
            vous concernant lors d’une simple navigation sur notre site Internet, notamment : des informations concernant
            l’utilisation de notre site, comme les zones que vous visitez et les services auxquels vous accédez, votre
            adresse IP, le type de votre navigateur, vos temps d'accès. De telles informations sont utilisées exclusivement
            à des fins de statistiques internes, de manière à améliorer la qualité des services qui vous sont proposés. Les
            bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9
            du 11 mars 1996 relative à la protection juridique des bases de données.


        </p>

        <h3>Resonsable de la publication</h3>
        <p>Le présent site est édité par :</p>

        <p>
            <strong>Nom Prénom</strong> : Hugo JENOUVRIER<br>
            <strong>Téléphone</strong> : 0782710159<br>
            <strong>Email</strong> : hugo.jenouvrier@gmail.com<br>
            pour le compte de Les Rose Adam, dont le Responsable Éditorail est <em>Samuel Adam</em> en qualité de Gérant.
        </p>
    </div>

    <script type="text/javascript">
        var nav = document.querySelector('nav');
        var navL = document.querySelector('#test');
        var navL2 = document.querySelector('#test2');
        var navL4 = document.querySelector('#test4');
        var navL5 = document.querySelector('#test5');
        var navL6 = document.querySelector('#test6');
        var navL7 = document.querySelector('#test7');


        nav.classList.add('bg-dark', 'shadow');
        navL.classList.add('text-light');
        navL2.classList.add('text-light');
        navL4.classList.add('text-light');
        navL5.classList.add('text-light');
        navL6.classList.add('text-light');
        navL7.classList.add('text-light');
    </script>
    <script src="https://kit.fontawesome.com/e838603ccd.js" crossorigin="anonymous"></script>

@stop
