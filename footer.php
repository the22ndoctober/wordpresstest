<section class="footer">
        <div class="footer__subscribe">
            <div class="footer__subscribeContainer">
                <h3 class="subtitle footer__subscribeTitle">
                    Підпишися на розсилку, щоб бути в
                    курсі усіх новин
                </h3>
                <input type="email" placeholder='E-mail' class="footer__subscribeEmail default-input">
                <button class="btn-text btn-text-inactive footer__subscribeBtn" id="footer__signUpForMailingBtn">
                    Підписатись
                </button>
            </div>
        </div>

        <div class="footer__wrapper">
            <div class="footer__container">
                <img src="../content/logoNavBar.png" alt="" class="footer__logo">

                <div class="footer__list">
                    <div class="footer__listContacts">
                        <h3 class="subtitle footer__listContactsSubtitle">
                            Контакти
                        </h3>
                        <p class="footer__listContactsText text">
                            Вул. Міссіон 23А Другий поверх
                        </p>
                        <p class="footer__listContactsText text">
                            +380954134555
                        </p>
                        <p class="footer__listContactsText text">
                            svitmovmail@outlook.com
                        </p>

                        <h3 class="subtitle footer__listContactsSubtitle">
                            Слідкуйте за нами тут
                        </h3>

                        <div class="footer__listContactsSocialMedias">
                            <a href="" class="footer__listContactsInst">
                                <img src="../content/socialIcons/instagram.png" alt="" class="footer__listContactsIcon">
                            </a>
                            <a href="" class="footer__listContactsLink">
                                <img src="../content/socialIcons/LinkedIn.png" alt="" class="footer__listContactsIcon">
                            </a>
                            <a href="" class="footer__listContactsFB">
                                <img src="../content/socialIcons/facebook.png" alt="" class="footer__listContactsIcon">
                            </a>
                        </div>
                    </div>

                    <div class="footer__listCourses">
                        <h3 class="subtitle footer__listCoursesSubtitle">
                            Всі мовні курси Світмов
                        </h3>
                        <a href="">Англійська для дітей</a>
                        <a href="">Англійська для дорослих</a>
                        <a href="">Польська</a>
                        <a href="">Німецька та французька</a>
                        <a href="">Ітілійська та іспанська</a>
                    </div>

                    <div class="footer__listTest">
                        <h3 class="subtitle footer__listTestSubtitle">
                            Онлайн тести
                        </h3>
                        <a href="/public/sections/onlineTests.html">Онлайн тести</a>
                        <a href="">Відгуки</a>
                        <a href="">Польська</a>
                        <a href="">Новини</a>
                        <a href="">Блог</a>
                    </div>

                    <div class="footer__listAbout">
                        <h3 class="subtitle footer__listTestSubtitle">
                            Про компанію
                        </h3>
                        <a href="./sections/teachers.html">Викладачі</a>
                        <a href="">Організація навчання</a>
                        <a href="">Кешбек за навчання</a>
                        <a href="./sections/contacts.html">Контакти</a>
                        <a href="">Вхід в особистий кабінет</a>
                    </div>
                </div>
                <hr>
                <p class="footer__copyrights text">
                    2021 ©svitmov.ck. All Rights Reserved.
                </p>
            </div>
        </div>
    </section>
</body>
<?php  wp_footer()?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
    let map
    function initMap(){
        map = new google.maps.Map(document.querySelector('#map'), {
            center: {lat: 49.43243868869066, lng: 32.07901887876511},
            zoom:15,
            marker: {lat: 49.43243868869066, lng: 32.07901887876511}
        })
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbjsAWrEprVtektISycGj1CIADRvEnXTE&callback=initMap" async defer></script>

</html>