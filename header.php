<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Світ Мов • Головна</title>
    <?php wp_head()?>
</head>
<body>
    
    <!-- <button id='maketbtn'>maket</button>
        <button id='maketbtn2' style="position:fixed; z-index: 1000; top: 100px;">OFF VERSTKA</button>
        <div class="maket">
        </div> -->
    
    <section class="navbar">
        <nav class="navbar__container">
            <div class="navbar__containerLeftPart">
                <div class="navbar__logo">
                    <img src="/content/logoNavBar.png" alt="">
                </div>

                <div class="navbar__burger dropdown">
                    <button class="" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <span></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                        <li><a href='/public/sections/allCourses.html' role="button" class="navbar__coursesList-button navbar__info-item dropdown-item">Всі мовні курси</a></li>
                        <li><a href='/public/sections/aboutUs.html' class="navbar__info-item navbar__info-aboutUs dropdown-item" href="./sections/aboutUs.html">Про компанію</a></li>
                        <li><a href="/public/sections/contacts.html" class="navbar__info-item navbar__info-contacts dropdown-item" href="./sections/contacts.html">Контакти</a></li>
                        <li><a href="/public/sections/search.html" class="navbar__info-item dropdown-item navbar_search">Пошук</a> </li>
                    </ul>
                                        
                        
                </div>
                
                <div class="navbar__coursesList">
                    <button class="navbar__coursesListBtn btn-text" id="navbar__coursesListBtn">Всі мовні курси</button>
                    
                </div>
    
                <div class="navbar__info">
                    <a href="/public/sections/aboutUs.html" class="navbar__infoItem navbar__info-aboutUs">Про компанію</a>
                    <a href="/public/sections/contacts.html" class="navbar__infoItem navbar__info-contacts">Контакти</a>
                    
                </div>
            </div>
    
            <div class="navbar__containerRightPart">
                
                <div class="navbar__options">
                    <div class="navbar__options-search" id="navbar__search" tabindex="0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="26" fill="currentColor" id='searchIcon' class="bi bi-search" style="margin-right: -5px; margin-left: 10px;" viewBox="0 0 16 20">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </div>
                    <span class='navbar__options-slash'>|</span>
    
                    <div class="navbar__options-lang dropdown">
                        <button class="navbar__options-langbtn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            УКР
                        </button>
                        <ul class="navbar__options-langlist dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><button class="dropdown-item" href="#">Укр</button></li>
                            <li><button class="dropdown-item" href="#">Рус</a></li>
                            <li><button class="dropdown-item" href="#">Eng</a></li>
                        </ul>
                    </div>
    
                    <div class="navbar__options-phone">
                        <div class="navbar__options-phoneIcon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-phone-vibrate-fill" viewBox="0 0 16 16">
                                <path d="M4 4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4zm5 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0zM1.807 4.734a.5.5 0 1 0-.884-.468A7.967 7.967 0 0 0 0 8c0 1.347.334 2.618.923 3.734a.5.5 0 1 0 .884-.468A6.967 6.967 0 0 1 1 8c0-1.18.292-2.292.807-3.266zm13.27-.468a.5.5 0 0 0-.884.468C14.708 5.708 15 6.819 15 8c0 1.18-.292 2.292-.807 3.266a.5.5 0 0 0 .884.468A7.967 7.967 0 0 0 16 8a7.967 7.967 0 0 0-.923-3.734zM3.34 6.182a.5.5 0 1 0-.93-.364A5.986 5.986 0 0 0 2 8c0 .769.145 1.505.41 2.182a.5.5 0 1 0 .93-.364A4.986 4.986 0 0 1 3 8c0-.642.12-1.255.34-1.818zm10.25-.364a.5.5 0 0 0-.93.364c.22.563.34 1.176.34 1.818 0 .642-.12 1.255-.34 1.818a.5.5 0 0 0 .93.364C13.856 9.505 14 8.769 14 8c0-.769-.145-1.505-.41-2.182z"/>
                                </svg>
                        </div>
                        <a role="button">+380 50 591 3556</a>
                    </div>
    
                    <div class="navbar__options-login">
                        <a href="/public/sections/login.html" role="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                            </svg>
                            <span>
                                Увійти

                            </span>
                        </a>
                        
                        
                    </div>
                </div>

            </div>



        </nav>
    </section>