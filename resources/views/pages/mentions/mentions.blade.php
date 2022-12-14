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


        <h2>Mentions l??gal</h2>
        <p>Merci de lire avec attention les diff??rentes modalit??s d???utilisation du pr??sent site avant d???y parcourir ses
            pages. En vous connectant sur ce site, vous acceptez sans r??serves les pr??sentes modalit??s. Aussi, conform??ment
            ?? l???article n??6 de la Loi n??2004-575 du 21 Juin 2004 pour la confiance dans l?????conomie num??rique, les
            responsables du pr??sent site internet <a href="http://51.77.140.41/">http://51.77.140.41/</a> sont :
        </p>

        <p><b>Contenu :</b> Ensemble des ??l??ments constituants l???information pr??sente sur le Site, notamment textes ??? images
            ??? vid??os.</p>

        <p><b>Conditions d???utilisation :</b>
            Ce site (<a href="http://51.77.140.41/">http://51.77.140.41/</a>) est propos?? en diff??rents langages web (HTML,
            HTML5, Javascript, CSS, etc???) pour
            un meilleur confort d'utilisation et un graphisme plus agr??able, nous vous recommandons de recourir ?? des
            navigateurs modernes comme Internet explorer, Safari, Firefox, Google Chrome, etc??? Les Roses Adam met en
            ??uvre tous les moyens dont elle dispose, pour assurer une information fiable et une mise ?? jour fiable de ses
            sites internet. Toutefois, des erreurs ou omissions peuvent survenir. L'internaute devra donc s'assurer de
            l'exactitude des informations aupr??s de , et signaler toutes modifications du site qu'il jugerait utile. n'est
            en aucun cas responsable de l'utilisation faite de ces informations, et de tout pr??judice direct ou indirect
            pouvant en d??couler.
        </p>

        <p><b>Cookies :</b> Le site <a href="http://51.77.140.41/">http://51.77.140.41/</a> peut-??tre amen?? ?? vous demander
            l???acceptation des cookies pour des
            besoins de statistiques et d'affichage. Un cookies est une information d??pos??e sur votre disque dur par le
            serveur du site que vous visitez. Il contient plusieurs donn??es qui sont stock??es sur votre ordinateur dans un
            simple fichier texte auquel un serveur acc??de pour lire et enregistrer des informations . Certaines parties de
            ce site ne peuvent ??tre fonctionnelles sans l???acceptation de cookies.</p>

        <p><b>Liens hypertextes :</b>Les sites internet de peuvent offrir des liens vers d???autres sites internet ou d???autres
            ressources disponibles sur Internet. Les Roses Adam ne dispose d'aucun moyen pour contr??ler les sites en
            connexion avec ses sites internet. ne r??pond pas de la disponibilit?? de tels sites et sources externes, ni ne la
            garantit. Elle ne peut ??tre tenue pour responsable de tout dommage, de quelque nature que ce soit, r??sultant du
            contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu???ils proposent,
            ou de tout usage qui peut ??tre fait de ces ??l??ments. Les risques li??s ?? cette utilisation incombent pleinement ??
            l'internaute, qui doit se conformer ?? leurs conditions d'utilisation. Les utilisateurs, les abonn??s et les
            visiteurs des sites internet de ne peuvent mettre en place un hyperlien en direction de ce site sans
            l'autorisation expresse et pr??alable de Les Roses Adam. Dans l'hypoth??se o?? un utilisateur ou visiteur
            souhaiterait mettre en place un hyperlien en direction d???un des sites internet de Les Roses Adam, il lui
            appartiendra d'adresser un email accessible sur le site afin de formuler sa demande de mise en place d'un
            hyperlien. Les Roses Adam se r??serve le droit d???accepter ou de refuser un hyperlien sans avoir ?? en
            justifier sa d??cision.

        </p>

        <p><b>Services Fournis</b>
            L'ensemble des activit??s de la soci??t?? ainsi que ses informations sont pr??sent??s sur notre site
            <a href="http://51.77.140.41/">http://51.77.140.41/</a>

            Les Roses Adam s???efforce de fournir sur le site <a href="http://51.77.140.41/">http://51.77.140.41/</a> des
            informations aussi pr??cises que
            possible. les renseignements figurant sur le site <a href="http://51.77.140.41/">http://51.77.140.41/</a> ne
            sont pas exhaustifs et les photos non
            contractuelles. Ils sont donn??s sous r??serve de modifications ayant ??t?? apport??es depuis leur mise en ligne. Par
            ailleurs, tous les informations indiqu??es sur le site <a href="http://51.77.140.41/">http://51.77.140.41/</a>
            sont donn??es ?? titre indicatif, et
            sont susceptibles de changer ou d?????voluer sans pr??avis.
        </p>

        <p><b>Limitation contractuelles sur les donn??es : </b>
            Les informations contenues sur ce site sont aussi pr??cises que possible et le site remis ?? jour ?? diff??rentes
            p??riodes de l???ann??e, mais peut toutefois contenir des inexactitudes ou des omissions. Si vous constatez une
            lacune, erreur ou ce qui parait ??tre un dysfonctionnement, merci de bien vouloir le signaler par email, ??
            l???adresse <a href="mailto:hugo.jenouvrier@gmail.fr">hugo.jenouvrier@gmail.fr</a> , en d??crivant le probl??me de
            la mani??re la plus pr??cise possible (page
            posant probl??me, type d???ordinateur et de navigateur utilis??, ???). Tout contenu t??l??charg?? se fait aux risques et
            p??rils de l'utilisateur et sous sa seule responsabilit??. En cons??quence, ne saurait ??tre tenu responsable d'un
            quelconque dommage subi par l'ordinateur de l'utilisateur ou d'une quelconque perte de donn??es cons??cutives au
            t??l??chargement. De plus, l???utilisateur du site s???engage ?? acc??der au site en utilisant un mat??riel r??cent, ne
            contenant pas de virus et avec un navigateur de derni??re g??n??ration mis-??-jour Les liens hypertextes mis en
            place dans le cadre du pr??sent site internet en direction d'autres ressources pr??sentes sur le r??seau Internet
            ne sauraient engager la responsabilit?? de Les Roses Adam.
        </p>

        <p><b>Propri??t?? intellectuelle :</b>
            Ce site web (structure g??n??rale, architecture, textes, photographies, illustrations, logos, ic??nes, fichiers
            disponibles en t??l??chargement) constitue une ??uvre prot??g??e en France par le Code de la Propri??t??
            Intellectuelle, et ?? l'??tranger par les conventions internationales en vigueur sur le droit d'auteur. La
            violation de l'un des droits d'auteur de l'??uvre est un d??lit de contrefa??on passible aux termes de l'article
            L.335-2 du Code de la Propri??t?? Intellectuelle, de trois ans d'emprisonnement et de 300 000 Euros d'amende.

            Les marques (semi figuratives ou non), ainsi que les logos figurant sur le site sont prot??g??s.

            Toute reproduction totale ou partielle de ces marques ou de ces logos effectu??e ?? partir des ??l??ments du site
            sans l'autorisation des ayants droit est donc prohib??e.

            L???utilisateur ne peut mettre en place un hyperlien en direction du site sans autorisation expresse et pr??alable.
        </p>

        <p><b>D??claration ?? la CNIL :</b>
            Conform??ment ?? la loi 78-17 du 6 janvier 1978 (modifi??e par la loi 2004-801 du 6 ao??t 2004 relative ?? la
            protection des personnes physiques ?? l'??gard des traitements de donn??es ?? caract??re personnel) relative ??
            l'informatique, aux fichiers et aux libert??s, ce site n'a pas fait l'objet d'une d??claration aupr??s de la
            Commission nationale de l'informatique et des libert??s (www.cnil.fr).
        </p>

        <h3>H??bergement</h3>
        <p>Ce site est h??berg?? par la soci??t?? OVH, immatricul??e au Registre du Commerce et des Soci??t??s de Roubaix???Tourcoing
            sous le num??ro 424 761 419 00045, dont le si??ge social est situ?? 2 rue Kellermann 59100 Roubaix - France.
        </p>

        <h3>Donn??es personnelles</h3>
        <p>De mani??re g??n??rale, vous n?????tes pas tenu de nous communiquer vos donn??es personnelles lorsque vous visitez notre
            site Internet <a href="http://51.77.140.41/">http://51.77.140.41/</a>. Cependant, ce principe comporte certaines
            exceptions. En effet, pour certains
            services propos??s par notre site, vous pouvez ??tre amen??s ?? nous communiquer certaines donn??es telles que :
            votre nom & pr??nom, votre adresse ??lectronique, et votre num??ro de t??l??phone.
            Tel est le cas lorsque vous remplissez le formulaire qui vous est propos?? en ligne, dans la rubrique ?? contact
            ??. Dans tous les cas, vous pouvez refuser de fournir vos donn??es personnelles. Dans ce cas, vous ne pourrez pas
            utiliser les services du site, notamment celui de solliciter des renseignements sur notre soci??t??. Enfin, nous
            pouvons collecter de mani??re automatique certaines informations
            vous concernant lors d???une simple navigation sur notre site Internet, notamment : des informations concernant
            l???utilisation de notre site, comme les zones que vous visitez et les services auxquels vous acc??dez, votre
            adresse IP, le type de votre navigateur, vos temps d'acc??s. De telles informations sont utilis??es exclusivement
            ?? des fins de statistiques internes, de mani??re ?? am??liorer la qualit?? des services qui vous sont propos??s. Les
            bases de donn??es sont prot??g??es par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9
            du 11 mars 1996 relative ?? la protection juridique des bases de donn??es.


        </p>

        <h3>Resonsable de la publication</h3>
        <p>Le pr??sent site est ??dit?? par :</p>

        <p>
            <strong>Nom Pr??nom</strong> : Hugo JENOUVRIER<br>
            <strong>T??l??phone</strong> : 0782710159<br>
            <strong>Email</strong> : hugo.jenouvrier@gmail.com<br>
            pour le compte de Les Rose Adam, dont le Responsable ??ditorail est <em>Samuel Adam</em> en qualit?? de G??rant.
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
