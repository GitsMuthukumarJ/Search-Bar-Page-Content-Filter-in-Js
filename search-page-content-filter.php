<style>
        .footer-new {
            margin-top: 5%;
            padding: 1%;
            bottom: 0;
            width: 100%;
            position: fixed;
        }

        * {
            font-family: "Poppins", sans-serif;
        }

        @media only screen and (max-width: 500px) {
        .containercountry {
            width: 80%;
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            margin-top: 15%;
        }
    }

    @media only screen and (min-width: 500px) {
        .containercountry {
            width: 80%;
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            margin-top: 3%;
        }
    }

        @media only screen and (max-width:640px) {
            .containercountry {
                top: 35%;
            }
        }

        .containercountry h2 {
            text-align: center;
            text-transform: uppercase;
            font-size: 35px;
            margin-bottom: 25px;
            font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
                "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
        }

        .containercountry .countryservices {
            justify-content: space-around;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            position: absolute;
            padding: 3%;
        }

        @media only screen and (max-width: 500px) {
        .containercountry .countryservices .card {
            width: 130px;
            text-align: center;
            background: #30c9bf;
            padding: 20px 15px;
            margin-bottom: 30px;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
        }
    }

        @media only screen and (min-width: 500px) {
            .containercountry .countryservices .card {
                width: 280px;
                text-align: center;
                background: #30c9bf;
                padding: 20px 15px;
                margin-bottom: 30px;
                border-radius: 10px;
                cursor: pointer;
                transition: 0.3s;
            }
    }

        .containercountry .countryservices .card:hover {
            background: #04607e;
        }

        .containercountry .countryservices .card .content {
            transition: 0.3s;
        }

        .containercountry .countryservices .card:hover .content {
            transform: scale(1.07);
        }

        .containercountry .countryservices .card .content .icon {
            padding: 5px 0;
            color: white;
        }

        .containercountry .countryservices .card .content .icon i {
            font-size: 40px;
        }

        .containercountry .countryservices .card:hover .content .title {
            color: white;
            text-decoration: none;
        }

        .containercountry .countryservices .card .content .title {
            padding: 5px 0;
            font-size: 16px;
            font-weight: 600;
            color: #000;
            transition: 0.3s;
            text-decoration: none;
        }

        @media only screen and (min-width: 1400px) {
            .container {
                width: 100% !important;
            }
        }
    </style>

<style>
        .button,.file-cta,.file-name,.input,.pagination-ellipsis,.pagination-link,.pagination-next,.pagination-previous,.select select,.textarea {
    -moz-appearance: none;
    -webkit-appearance: none;
    align-items: center;
    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    display: inline-flex;
    font-size: 1rem;
    height: 2.5em;
    justify-content: flex-start;
    line-height: 1.5;
    padding-bottom: calc(.5em - 1px);
    padding-left: calc(.75em - 1px);
    padding-right: calc(.75em - 1px);
    padding-top: calc(.5em - 1px);
    position: relative;
    vertical-align: top
}

button,input,select,textarea {
    margin: 0
}

html {
    box-sizing: border-box
}

*,::after,::before {
    box-sizing: inherit
}

img,video {
    height: auto;
    max-width: 100%
}

iframe {
    border: 0
}

table {
    border-collapse: collapse;
    border-spacing: 0
}

td,th {
    padding: 0
}

td:not([align]),th:not([align]) {
    text-align: inherit
}

html {
    background-color: #fff;
    font-size: 16px;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    min-width: 300px;
    overflow-x: hidden;
    overflow-y: scroll;
    text-rendering: optimizeLegibility;
    -webkit-text-size-adjust: 100%;
    -moz-text-size-adjust: 100%;
    text-size-adjust: 100%
}

article,aside,figure,footer,header,hgroup,section {
    display: block
}

body,button,input,optgroup,select,textarea {
    font-family: BlinkMacSystemFont,-apple-system,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Fira Sans","Droid Sans","Helvetica Neue",Helvetica,Arial,sans-serif
}

body {
    color: #4a4a4a;
    font-size: 1em;
    font-weight: 400;
    line-height: 1.5
}

a {
    color: #485fc7;
    cursor: pointer;
    text-decoration: none
}

img {
    height: auto;
    max-width: 100%
}

input[type=checkbox],input[type=radio] {
    vertical-align: baseline
}

span {
    font-style: inherit;
    font-weight: inherit
}

table td,table th {
    vertical-align: top
}

table td:not([align]),table th:not([align]) {
    text-align: inherit
}

.container {
    flex-grow: 1;
    margin: 0 auto;
    position: relative;
    width: auto
}

.subtitle,.title {
    word-break: break-word
}

.subtitle em,.subtitle span,.title em,.title span {
    font-weight: inherit
}

.title {
    color: #363636;
    font-size: 2rem;
    font-weight: 600;
    line-height: 1.125
}

.input,.select select,.textarea {
    background-color: #fff;
    border-color: #dbdbdb;
    border-radius: 4px;
    color: #363636
}

.input::-webkit-input-placeholder,.select select::-webkit-input-placeholder,.textarea::-webkit-input-placeholder {
    color: rgba(54,54,54,.3)
}

.input,.textarea {
    box-shadow: inset 0 .0625em .125em rgba(10,10,10,.05);
    max-width: 100%;
    width: 100%
}

.card {
    background-color: #fff;
    border-radius: .25rem;
    box-shadow: 0 .5em 1em -.125em rgba(10,10,10,.1),0 0 0 1px rgba(10,10,10,.02);
    color: #4a4a4a;
    max-width: 100%;
    position: relative
}

.navbar {
    background-color: #fff;
    min-height: 3.25rem;
    position: relative;
    z-index: 30
}

@media screen and (min-width: 1024px) {
    .navbar,.navbar-end,.navbar-menu,.navbar-start {
        align-items:stretch;
        / display: flex /
    }

    .navbar {
        min-height: 3.25rem
    }

    .navbar.is-spaced {
        padding: 1rem 2rem
    }

    .navbar.is-spaced .navbar-end,.navbar.is-spaced .navbar-start {
        align-items: center
    }

    .navbar.is-spaced .navbar-link,.navbar.is-spaced a.navbar-item {
        border-radius: 4px
    }

    .navbar.is-transparent .navbar-link.is-active,.navbar.is-transparent .navbar-link:focus,.navbar.is-transparent .navbar-link:hover,.navbar.is-transparent a.navbar-item.is-active,.navbar.is-transparent a.navbar-item:focus,.navbar.is-transparent a.navbar-item:hover {
        background-color: transparent!important
    }

    .navbar.is-transparent .navbar-item.has-dropdown.is-active .navbar-link,.navbar.is-transparent .navbar-item.has-dropdown.is-hoverable:focus .navbar-link,.navbar.is-transparent .navbar-item.has-dropdown.is-hoverable:focus-within .navbar-link,.navbar.is-transparent .navbar-item.has-dropdown.is-hoverable:hover .navbar-link {
        background-color: transparent!important
    }

    .navbar.is-transparent .navbar-dropdown a.navbar-item:focus,.navbar.is-transparent .navbar-dropdown a.navbar-item:hover {
        background-color: #f5f5f5;
        color: #0a0a0a
    }

    .navbar.is-transparent .navbar-dropdown a.navbar-item.is-active {
        background-color: #f5f5f5;
        color: #485fc7
    }

    .navbar-burger {
        display: none
    }

    .navbar-item,.navbar-link {
        align-items: center;
        display: flex
    }

    .navbar-item.has-dropdown {
        align-items: stretch
    }

    .navbar-item.has-dropdown-up .navbar-link::after {
        transform: rotate(135deg) translate(.25em,-.25em)
    }

    .navbar-item.has-dropdown-up .navbar-dropdown {
        border-bottom: 2px solid #dbdbdb;
        border-radius: 6px 6px 0 0;
        border-top: none;
        bottom: 100%;
        box-shadow: 0 -8px 8px rgba(10,10,10,.1);
        top: auto
    }

    .navbar-item.is-active .navbar-dropdown,.navbar-item.is-hoverable:focus .navbar-dropdown,.navbar-item.is-hoverable:focus-within .navbar-dropdown,.navbar-item.is-hoverable:hover .navbar-dropdown {
        display: block
    }

    .navbar-item.is-active .navbar-dropdown.is-boxed,.navbar-item.is-hoverable:focus .navbar-dropdown.is-boxed,.navbar-item.is-hoverable:focus-within .navbar-dropdown.is-boxed,.navbar-item.is-hoverable:hover .navbar-dropdown.is-boxed,.navbar.is-spaced .navbar-item.is-active .navbar-dropdown,.navbar.is-spaced .navbar-item.is-hoverable:focus .navbar-dropdown,.navbar.is-spaced .navbar-item.is-hoverable:focus-within .navbar-dropdown,.navbar.is-spaced .navbar-item.is-hoverable:hover .navbar-dropdown {
        opacity: 1;
        pointer-events: auto;
        transform: translateY(0)
    }

    .navbar-menu {
        flex-grow: 1;
        flex-shrink: 0
    }

    .navbar-start {
        justify-content: flex-start;
        margin-right: auto
    }

    .navbar-end {
        justify-content: flex-end;
        margin-left: auto
    }

    .navbar-dropdown {
        background-color: #fff;
        border-bottom-left-radius: 6px;
        border-bottom-right-radius: 6px;
        border-top: 2px solid #dbdbdb;
        box-shadow: 0 8px 8px rgba(10,10,10,.1);
        display: none;
        font-size: .875rem;
        left: 0;
        min-width: 100%;
        position: absolute;
        top: 100%;
        z-index: 20
    }

    .navbar-dropdown .navbar-item {
        padding: .375rem 1rem;
        white-space: nowrap
    }

    .navbar-dropdown a.navbar-item {
        padding-right: 3rem
    }

    .navbar-dropdown a.navbar-item:focus,.navbar-dropdown a.navbar-item:hover {
        background-color: #f5f5f5;
        color: #0a0a0a
    }

    .navbar-dropdown a.navbar-item.is-active {
        background-color: #f5f5f5;
        color: #485fc7
    }

    .navbar-dropdown.is-boxed,.navbar.is-spaced .navbar-dropdown {
        border-radius: 6px;
        border-top: none;
        box-shadow: 0 8px 8px rgba(10,10,10,.1),0 0 0 1px rgba(10,10,10,.1);
        display: block;
        opacity: 0;
        pointer-events: none;
        top: calc(100% + (-4px));
        transform: translateY(-5px);
        transition-duration: 86ms;
        transition-property: opacity,transform
    }

    .navbar-dropdown.is-right {
        left: auto;
        right: 0
    }

    .navbar-divider {
        display: block
    }

    .container>.navbar .navbar-brand,.navbar>.container .navbar-brand {
        margin-left: -.75rem
    }

    .container>.navbar .navbar-menu,.navbar>.container .navbar-menu {
        margin-right: -.75rem
    }

    .navbar.is-fixed-bottom-desktop,.navbar.is-fixed-top-desktop {
        left: 0;
        position: fixed;
        right: 0;
        z-index: 30
    }

    .navbar.is-fixed-bottom-desktop {
        bottom: 0
    }

    .navbar.is-fixed-bottom-desktop.has-shadow {
        box-shadow: 0 -2px 3px rgba(10,10,10,.1)
    }

    .navbar.is-fixed-top-desktop {
        top: 0
    }

    body.has-navbar-fixed-top-desktop,html.has-navbar-fixed-top-desktop {
        padding-top: 3.25rem
    }

    body.has-navbar-fixed-bottom-desktop,html.has-navbar-fixed-bottom-desktop {
        padding-bottom: 3.25rem
    }

    body.has-spaced-navbar-fixed-top,html.has-spaced-navbar-fixed-top {
        padding-top: 5.25rem
    }

    body.has-spaced-navbar-fixed-bottom,html.has-spaced-navbar-fixed-bottom {
        padding-bottom: 5.25rem
    }

    .navbar-link.is-active,a.navbar-item.is-active {
        color: #0a0a0a
    }

    .navbar-link.is-active:not(:focus):not(:hover),a.navbar-item.is-active:not(:focus):not(:hover) {
        background-color: transparent
    }

    .navbar-item.has-dropdown.is-active .navbar-link,.navbar-item.has-dropdown:focus .navbar-link,.navbar-item.has-dropdown:hover .navbar-link {
        background-color: #fafafa
    }
}

.mb-5 {
    margin-bottom: 1.5rem!important
}

.is-hidden {
    display: none!important
}

@media only screen and (max-width: 500px) {
#searchbox {
    width: 80%;
    margin: 10%;
    border: 1px solid #000;
}
}

@media only screen and (min-width: 500px) {
#searchbox {
    width: 50%;
    margin-left: 25%;
    margin-top: 5%;
    border: 1px solid #000;
}
}
</style>

<input class='input mb-5' type="search" id="searchbox" placeholder="search your treatment..">

<div class="container">
        <div class="row">
            <div class="containercountry">
                <h1>Online Doctor Consultation - Browse by Country</h1>
                <section class="countryservices">
                    <?php
                    include "/var/www/hosts/drgalen/wordpress/wp-content/themes/pearl-medicalguide/new_drgalen/db.php";

                    $sql10 = "SELECT * FROM country_doctors order by country_name ASC";
                    $result10 = $conn->query($sql10);
                    while ($row10 = $result10->fetch_assoc()) {
                        $country_name = $row10['country_name'];
                        $country_link = $row10['country_link'];
                    ?>
                        <div class="card">
                            <a class="title" href='<?php echo $country_link; ?>'>
                                <div class="content">
                                    <div class="title"><?php echo $country_name; ?></div>
                            </a>
                        </div>
            </div>
        <?php } ?>
        </section>
        </div>
    </div>

<script>
let cards = document.querySelectorAll('.card')
    
function liveSearch() {
    let search_query = document.getElementById("searchbox").value;
    for (var i = 0; i < cards.length; i++) {
        if(cards[i].textContent.toLowerCase()
                .includes(search_query.toLowerCase())) {
            cards[i].classList.remove("is-hidden");
        } else {
            cards[i].classList.add("is-hidden");
        }
    }
}

let typingTimer;               
let typeInterval = 100;  
let searchInput = document.getElementById('searchbox');

searchInput.addEventListener('keyup', () => {
    clearTimeout(typingTimer);
    typingTimer = setTimeout(liveSearch, typeInterval);
});
</script>
