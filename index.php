<?php get_header()?>
    <div class="svitMov">
        

    
        <section class="mainContent">
            <div class="mainContent__signUp">
                <div class="mainContent__signUpContent">
                    <h1 class="mainContent__signUpContent-title">
                        Академічні знання у 
                        неформальній атмосфері
                    </h1>
                    <p class="mainContent__signUpContent-info">
                        Навчаємо протягом 9 років. Використовуємо пердові програми навчання, а наші вчителі мають міжнародну кваліфікацію.
                    </p>
                    <button class="mainContent__signUpContent-button btn-text" id="mainContent__signUpCourseBtn">
                        Записатися на навчання
                    </button>
                </div>
                <img src="/content/firstFrameBG.png" class="mainContent__signUp-BG bg" alt="" srcset="">
            </div>
            <div class="mainContent__btnContainer pageButtons">
                <button class="mainContent__buttonBack pageButtons__buttonBack">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                    </svg>
                </button>

                <div class="mainContent__spanContainer pageButtons__spanContainer">
                    <span class="mainContent__ListSpan pageButtons__ListSpan pageButtons__ListSpan-active"></span>
                    <span class="mainContent__ListSpan pageButtons__ListSpan"></span>
                    <span class="mainContent__ListSpan pageButtons__ListSpan"></span>
                    <span class="mainContent__ListSpan pageButtons__ListSpan"></span>
                </div>

                <button class="mainContent__buttonForward pageButtons__buttonForward pageButtons__button-active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </button>
            </div>
        </section>

        <section class="chooseCourse">
            <div class="chooseCourse__container">
                <h1 class="chooseCourse__title">
                    Оберіть собі курс
                </h1>

                <button class="chooseCourse__allCourses-btn" onclick=`document.location.href="/public/sections/allCourses.html"`>
                    <span>Перглянути всі курси</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                      </svg>
                </button>

                <div class="chooseCourse__coursesList">
                    <div class="chooseCourse__coursesListItem" >
                        
                        <div class="chooseCourse__coursesListItemContainer">
                            <div class="chooseCourse__coursesListItem-gradient"></div>
                            <h1 class="chooseCourse__coursesListItem-title">
                                Англійська для
                                дітей та підлітків
                            </h1>
                            <button class="chooseCourse__coursesListItem-button" onclick=`document.location.href="/public/sections/course.html"`>
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </button>
    
                            <img src="/content/flags/uk.png" alt="" class="chooseCourse__coursesListItem-BG">
                        </div>

                    </div>

                    <div class="chooseCourse__coursesListItem">
                        
                        <div class="chooseCourse__coursesListItemContainer">
                            <div class="chooseCourse__coursesListItem-gradient"></div>
                            <h1 class="chooseCourse__coursesListItem-title">
                                Англійська для
                                дорослих
                            </h1>
                            <button class="chooseCourse__coursesListItem-button"  onclick=`document.location.href="/public/sections/course.html"`>
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </button>
    
                            <img src="/content/flags/uk.png" alt="" class="chooseCourse__coursesListItem-BG">
                        </div>

                    </div>

                    <div class="chooseCourse__coursesListItem" >
                        
                        <div class="chooseCourse__coursesListItemContainer">
                            <div class="chooseCourse__coursesListItem-gradient"></div>
                            <h1 class="chooseCourse__coursesListItem-title">
                                Курси німецької
                            </h1>
                            <button class="chooseCourse__coursesListItem-button" onclick=`document.location.href="/public/sections/course.html"`>
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </button>
    
                            <img src="/content/flags/ger.png" alt="" class="chooseCourse__coursesListItem-BG">
                        </div>

                    </div>

                    <div class="chooseCourse__coursesListItem" >
                        
                        <div class="chooseCourse__coursesListItemContainer">
                            <div class="chooseCourse__coursesListItem-gradient"></div>
                            <h1 class="chooseCourse__coursesListItem-title">
                                Курси французької
                            </h1>
                            <button class="chooseCourse__coursesListItem-button" onclick=`document.location.href="/public/sections/course.html"`>
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </button>
    
                            <img src="/content/flags/fr.png" alt="" class="chooseCourse__coursesListItem-BG">
                        </div>

                    </div>

                    <div class="chooseCourse__coursesListItem" >
                        
                        <div class="chooseCourse__coursesListItemContainer">
                            <div class="chooseCourse__coursesListItem-gradient"></div>
                            <h1 class="chooseCourse__coursesListItem-title">
                                Курси італійської
                            </h1>
                            <button class="chooseCourse__coursesListItem-button" onclick=`document.location.href="/public/sections/course.html"`>
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </button>
    
                            <img src="/content/flags/it.png" alt="" class="chooseCourse__coursesListItem-BG">
                        </div>

                    </div>

                    <div class="chooseCourse__coursesListItem" >
                        
                        <div class="chooseCourse__coursesListItemContainer">
                            <div class="chooseCourse__coursesListItem-gradient"></div>
                            <h1 class="chooseCourse__coursesListItem-title">
                                Курси іспанської
                            </h1>
                            <button class="chooseCourse__coursesListItem-button" onclick=`document.location.href="/public/sections/course.html"`>
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </button>
    
                            <img src="/content/flags/uk.png" alt="" class="chooseCourse__coursesListItem-BG">
                        </div>

                    </div>

                    <div class="chooseCourse__coursesListItem" >
                        
                        <div class="chooseCourse__coursesListItemContainer">
                            <div class="chooseCourse__coursesListItem-gradient"></div>
                            <h1 class="chooseCourse__coursesListItem-title">
                                Курси польскої
                            </h1>
                            <button class="chooseCourse__coursesListItem-button" onclick=`document.location.href="/public/sections/course.html"`>
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </button>
    
                            <img src="/content/flags/pl.png" alt="" class="chooseCourse__coursesListItem-BG">
                        </div>

                    </div>

                    <div class="chooseCourse__coursesListItem">
                        
                        <div class="chooseCourse__coursesListItemContainer">
                            <div class="chooseCourse__coursesListItem-gradient"></div>
                            <h1 class="chooseCourse__coursesListItem-title">
                                Корпоративне
                                навчання
                            </h1>
                            <button class="chooseCourse__coursesListItem-button" onclick=`document.location.href="/public/sections/course.html"`>
                                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </button>
    
                            <img src="/content/flags/uk.png" alt="" class="chooseCourse__coursesListItem-BG">
                        </div>

                    </div>
                    
                </div>
    
                
            </div>
        </section>

        <section class="howToSignUp">
            <h1 class="howToSignUp__title">
                Як записатися?
            </h1>

            <div class="howToSignUp__container">
                <div class="howToSignUp__content">
                    <div class="howToSignUp__item">
                        <h1 class="howToSignUp__itemNumber">01</h1>
                        <h3 class="howToSignUp__itemTitle">Пройти тестування</h3>
                        <p class="howToSignUp__itemInfo">
                            Необхідно пройти тестування, щоб оцінити ваш рівень володіння іноземною мовою. Після цього, ви зможете обрати групу, яка підходить саме вам
                        </p>
                    </div>
                    <div class="howToSignUp__guideLine">
                        <div class="howToSignUp__guideLineSolid"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-caret-right-fill" viewBox="-3 0 24 34">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                          </svg></div>
                        <div class="howToSignUp__guideLineMainLine"></div>                      
                    </div>
                    <div class="howToSignUp__item">
                        <h1 class="howToSignUp__itemNumber howToSignUp__itemNumber-main">02</h1>
                        <h3 class="howToSignUp__itemTitle">Обрати групу</h3>
                        <p class="howToSignUp__itemInfo">
                            Вже знаєте ваш рівень? Тоді на цьому кроці можете дізнатись розклад занять. Просто зателефонуйте нам!
                        </p>
                    </div>
                    <div class="howToSignUp__guideLine">
                        <div class="howToSignUp__guideLineSolid"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-caret-right-fill" viewBox="-3 0 24 34">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                          </svg></div>
                        <div class="howToSignUp__guideLineMainLine"></div>                      
                    </div>
                    <div class="howToSignUp__item">
                        <h1 class="howToSignUp__itemNumber">03</h1>
                        <h3 class="howToSignUp__itemTitle">Забронювати місце</h3>
                        <p class="howToSignUp__itemInfo">
                            Можна забронювати місце в будь-якій групі, через просту систему онлайн реєстрації. Це безкоштовна послуга, яка не займе більше 2-х хвилин
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="educationForms">
            <h1 class="educatonForms__title title">Форми навчання</h1>

            <div class="educationForms__content">
                <ul class="educationForms__header">
                    <li class="educationForms__headerItem">Офлайн</li>
                    <li class="educationForms__headerItem educationForms__headerItem-active">Онлайн</li>
                    <li class="educationForms__headerItem">Змішане</li>
                </ul>

                <div class="educationForms__contentContainer">
                    <div class="educationForms__contentContainerText">
                        <h1 class="educationForms__contentTitle title">Онлайн</h1>
                        <p class="educationForms__contentInfo">При навчання ви маєте змогу отримати кешбек при оплаті. Коли ви пропалачєте курс другий раз, ви отримаєте поверенення в розмірі 0% 
                        Опануйте актуальні навички на онлайн-курсах від кращих викладачів на найбільшій освітній платформі України</p>
                        <a role="button" class="educationForms__contentShowMore btn-text btn-text-inactive" href="/public/sections/cashback.html">Детальніше</a>
                    </div>

                    <div class="educationForms__contentContainerMedia">
                        <img src="../content/educationForms/online.png" alt="" class="educationForms__itemPhoto">
                    </div>
                </div>

                <div class="educationForms__switch">
                    <button class="educationForms__switchBack"></button>
                    <button class="educationForms__switchForward"></button>
                </div>
            </div>
        </section>
        
        <section class="cashback">
            <div class="cashback__container">
                <div class="cashback__content">
                    <h1 class="cashback__title title">
                        Ми даруємо кешбек
                    </h1>
                    <p class="cashback__text text">
                        При навчання ви маєте змогу отримати кешбек при оплаті. Коли ви пропалачєте курс другий раз, ви отримаєте поверенення в розмірі 0%
                    </p>
                    <button class="cashback__button btn-text btn-text-inactive">
                        Детальніше
                    </button>
                </div>
                <img src="../content/cashback.png" class="cashback__background" alt="" srcset="">
            </div>
        </section>

        <section class="whyWe">
            <h1 class="whyWe__title title">Чому ми?</h1>
            <div class="whyWe__container">
                <div class="whyWe__item">
                    <img src="../content/whyWeItems/item_1.png" alt="" class="whyWe__itemPic">
                    <p class="whyWe__itemText">Якісні знання,
                        що відповідають міжнародним стандартам</p>
                </div>
                <div class="whyWe__item">
                    <img src="../content/whyWeItems/item_2.png" alt="" class="whyWe__itemPic">
                    <p class="whyWe__itemText">Ми — офіційний центр
                        з підготовки та складання міжнародних іспитів Cambridge</p>
                </div>
                <div class="whyWe__item">
                    <img src="../content/whyWeItems/item_3.png" alt="" class="whyWe__itemPic">
                    <p class="whyWe__itemText">Сертифіковані викладачі</p>
                </div>
                <div class="whyWe__item">
                    <img src="../content/whyWeItems/item_4.png" alt="" class="whyWe__itemPic">
                    <p class="whyWe__itemText">Можливість обрати зручну форму навчання</p>
                </div>
                <div class="whyWe__item">
                    <img src="../content/whyWeItems/item_5.png" alt="" class="whyWe__itemPic">
                    <p class="whyWe__itemText">Турбота про клієнтів</p>
                </div>
                <div class="whyWe__item">
                    <img src="../content/whyWeItems/item_6.png" alt="" class="whyWe__itemPic">
                    <p class="whyWe__itemText">Комфортна та привітна атмосфера</p>
                </div>
            </div>
        </section>

        <section class="teachers">
            <h1 class="teachers__title title">Викладачі</h1>
            <div class="teachers__container">
                <div class="teachers__track">
                    
                    <div class="teachers__card">
                        <div class="teachers__cardImageContainer">
                            <img src="../content/teachers/1.png" alt="" class="teachers__cardPhoto">
                            <div class="teachers__cardLanguage">Germany</div>
                        </div>
                        <h3 class="teachers__cardName">James Wetervelt</h3>
                        <p class="teachers__cardText">Викладач вищої категорії, С1, С2, С3, Intermedia</p>
                    </div>

                    <div class="teachers__card">
                        <div class="teachers__cardImageContainer">
                            <img src="../content/teachers/2.png" alt="" class="teachers__cardPhoto">
                            <div class="teachers__cardLanguage">Germany</div>
                        </div>
                        <h3 class="teachers__cardName">James Wetervelt</h3>
                        <p class="teachers__cardText">Викладач вищої категорії, С1, С2, С3, Intermedia</p>
                    </div>

                    <div class="teachers__card">
                        <div class="teachers__cardImageContainer">
                            <img src="../content/teachers/3.png" alt="" class="teachers__cardPhoto">
                            <div class="teachers__cardLanguage">Germany</div>
                        </div>
                        <h3 class="teachers__cardName">James Wetervelt</h3>
                        <p class="teachers__cardText">Викладач вищої категорії, С1, С2, С3, Intermedia</p>
                    </div>

                    <div class="teachers__card">
                        <div class="teachers__cardImageContainer">
                            <img src="../content/teachers/4.png" alt="" class="teachers__cardPhoto">
                            <div class="teachers__cardLanguage">Germany</div>
                        </div>
                        <h3 class="teachers__cardName">James Wetervelt</h3>
                        <p class="teachers__cardText">Викладач вищої категорії, С1, С2, С3, Intermedia</p>
                    </div>

                </div>
                <div class="teachers__btnContainer pageButtons">
                    <button class="teachers__buttonBack pageButtons__buttonBack">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                      </svg>
                    </button>

                    <div class="teachers__spanContainer pageButtons__spanContainer">
                        <span class="teachers__teachersListSpan pageButtons__ListSpan pageButtons__ListSpan-active"></span>
                        <span class="teachers__teachersListSpan pageButtons__ListSpan"></span>
                        <span class="teachers__teachersListSpan pageButtons__ListSpan"></span>
                        <span class="teachers__teachersListSpan pageButtons__ListSpan"></span>
                    </div>

                    <button class="teachers__buttonForward pageButtons__buttonForward pageButtons__button-active">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                      </svg>
                    </button>
                </div>
                
            </div>
        </section>

        <section class="gallery">
            <h1 class="title gallery__title">Галерея</h1>
            <div class="gallery__photo">
                <div class="gallery__photoTrack">
                    <img src="../content/gallery/1.png" alt="" class="gallery__photoItem">
                    <img src="../content/gallery/2.png" alt="" class="gallery__photoItem">
                    <img src="../content/gallery/3.png" alt="" class="gallery__photoItem">
                    <img src="../content/gallery/4.png" alt="" class="gallery__photoItem">
                </div>

                
            </div>
            <div class="gallery__btnContainer pageButtons">
                <button class="gallery__buttonBack pageButtons__buttonBack">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                  </svg>
                </button>

                <div class="gallery__spanContainer pageButtons__spanContainer">
                    <span class="gallery__teachersListSpan pageButtons__ListSpan pageButtons__ListSpan-active"></span>
                    <span class="gallery__teachersListSpan pageButtons__ListSpan"></span>
                    <span class="gallery__teachersListSpan pageButtons__ListSpan"></span>
                    <span class="gallery__teachersListSpan pageButtons__ListSpan"></span>
                </div>

                <button class="gallery__buttonForward pageButtons__buttonForward pageButtons__button-active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
                </button>
            </div>

        </section>

        <section class="reviews">
            <h1 class="title reviews__title">Відгуки про навчання</h1>

            <button class="reviews__feedbackBtn">
                <span>Залишити відгук</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
            </button>

            <div class="reviews__container">
                <div class="reviews__wrapper">
                    <div class="reviews__itemTrack">
                        <div class="reviews__item">
                            <div class="reviews__itemUserContainer">
                                <img src="../content/reviews/1.png" alt="" class="reviews__itemPhoto">

                                <div class="reviews__itemUserStarsContainer">
                                    <h3 class="title reviews__itemTitle">
                                        Наталя Порошівна
                                    </h3>
                                    <div class="reviews__itemStarsContainer">
                                        <span class="reviews__itemStars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        </span>
                                        <span class="reviews__itemStars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        </span>
                                        <span class="reviews__itemStars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        </span>
                                        <span class="reviews__itemStars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        </span>
                                        <span class="reviews__itemStars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                
                            </div>
                            <p class="reviews__itemText text">
                                Мар’яна чудовий викладач, завжди готова допомогти та дати пораду. Заняття завжди проходили інформативно, матеріал викладався логічно та відповідно до вимог екзамену. З досвіду можу добавити, що без курсів підготовки саме по структурі екзамену, здати IELTS вкрай важко. Мар’яна впоралася з цим завданням на 100%. Рекомендую.
                            </p>
                        </div>

                        <div class="reviews__item">
                            <div class="reviews__itemUserContainer">
                                <img src="../content/reviews/1.png" alt="" class="reviews__itemPhoto">

                                <div class="reviews__itemUserStarsContainer">
                                    <h3 class="title reviews__itemTitle">
                                        Наталя Порошівна
                                    </h3>
                                    <div class="reviews__itemStarsContainer">
                                        <span class="reviews__itemStars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        </span>
                                        <span class="reviews__itemStars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        </span>
                                        <span class="reviews__itemStars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        </span>
                                        <span class="reviews__itemStars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        </span>
                                        <span class="reviews__itemStars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                
                            </div>
                            <p class="reviews__itemText text">
                                Мар’яна чудовий викладач, завжди готова допомогти та дати пораду. Заняття завжди проходили інформативно, матеріал викладався логічно та відповідно до вимог екзамену. З досвіду можу добавити, що без курсів підготовки саме по структурі екзамену, здати IELTS вкрай важко. Мар’яна впоралася з цим завданням на 100%. Рекомендую.
                            </p>
                        </div>

                        <div class="reviews__item">
                            <div class="reviews__itemUserContainer">
                                <img src="../content/reviews/1.png" alt="" class="reviews__itemPhoto">

                                <div class="reviews__itemUserStarsContainer">
                                    <h3 class="title reviews__itemTitle">
                                        Наталя Порошівна
                                    </h3>
                                    <div class="reviews__itemStarsContainer">
                                        <span class="reviews__itemStars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        </span>
                                        <span class="reviews__itemStars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        </span>
                                        <span class="reviews__itemStars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        </span>
                                        <span class="reviews__itemStars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        </span>
                                        <span class="reviews__itemStars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <p class="reviews__itemText text">
                                Мар’яна чудовий викладач, завжди готова допомогти та дати пораду. Заняття завжди проходили інформативно, матеріал викладався логічно та відповідно до вимог екзамену. З досвіду можу добавити, що без курсів підготовки саме по структурі екзамену, здати IELTS вкрай важко. Мар’яна впоралася з цим завданням на 100%. Рекомендую.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="reviews__btnContainer pageButtons">
                    <button class="reviews__buttonBack pageButtons__buttonBack">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                      </svg>
                    </button>

                    <div class="reviews__spanContainer pageButtons__spanContainer">
                        <span class="reviews__teachersListSpan pageButtons__ListSpan pageButtons__ListSpan-active"></span>
                        <span class="reviews__teachersListSpan pageButtons__ListSpan"></span>
                        <span class="reviews__teachersListSpan pageButtons__ListSpan"></span>
                        <span class="reviews__teachersListSpan pageButtons__ListSpan"></span>
                    </div>

                    <button class="reviews__buttonForward pageButtons__buttonForward pageButtons__button-active">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                      </svg>
                    </button>
                </div>
            </div>
        </section>

        <section class="location">
            <div class="location__mapHolder" id='map'>

            </div>
            <div class="location__content">
                <h1 class="title location__title">Ти можеш знайти нас тут</h1>
                
                
                <p class="location__text text">Головний офіс</p>
                <h3 class="location__subtitle subtitle">вул. Шевченка 336а</h3>
                <p class="location__text text">Номер телефону</p>
                <h3 class="location__subtitle subtitle">+380 50 591 3556</h3>
                <h3 class="location__subtitle subtitle">+380 95 413 4555</h3>
                <button class="location__button btn-text btn-text-inactive">
                    Написати нам
                </button>
            </div>
        </section>
        
        <section class="engTest">
            <h1 class="title engTest__title">Перевір рівень своєї англійської безкоштовно</h1>
            <p class="text engTest__text">
                Ти можеш безкоштовно пройти тест на рівень твоєї англійської 
                після чого ми допомжемо тобі підібрати курс 
                спеціально для тебе
            </p>
            <div class="engTest__btnContainer">
                <button class="engTest__btn btn-text btn-text-inactive">Перевірити рівень</button>
                <button class="engTest__btn engTest__btn-alarm btn-text btn-text-inactive"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm" viewBox="0 2 16 16">
                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z"/>
                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z"/>
                  </svg> ~25 хвилин</button>
            </div>
        </section>

        <section class="signUpForm">
            <h1 class="title signUpForm__title">Запис на курси</h1>
            <div class="signUpForm__container">
                <ul class="signUpForm__header">
                    <li class="signUpForm__headerItem signUpForm__headerItem-active">
                        Для дітей
                    </li>
                    <li class="signUpForm__headerItem">
                        Для дорослих
                    </li>
                </ul>

                <form action="" class="signUpForm__formContainer">
                    <input type="text" placeholder="Ім'я" class="signUpForm__formName default-input">
                    <input type="text" placeholder='Прізвище' class="signUpForm__formsurName default-input">
                    <input type="date" placeholder='ДД/ММ/РР' class="signUpForm__formBirthdate default-input">
                    <input type="text" placeholder="Ім'я одного з батьків" class="signUpForm__formParentName default-input">
                    <input type="text" placeholder='Номер телефону' class="signUpForm__formPhoneNumber default-input">
                    <input type="email" placeholder='E-mail' class="signUpForm__formEmail default-input">
                    <select class="form-select signUpForm__formLanguage default-input" aria-label="Default select example">
                        <option selected>Виберіть мову для вивчення</option>
                        <option value="1">English</option>
                        <option value="2">Deutch</option>
                        <option value="3">French</option>
                    </select>
                    <select class="form-select signUpForm__formLanguage default-input" aria-label="Default select example">
                        <option selected>Форма навчання</option>
                        <option value="1">Онлайн</option>
                        <option value="2">Офлайн</option>
                        <option value="3">Змішане</option>
                    </select>
                    <button type="submit" class="signUpForm__formSubmit btn-text">Записатися</button>
                </form>
            </div>
            <img class="signUpForm__BG" src="/content/signUpFormBG.png" alt="">
        </section>

        <section class="latestNews">
            <h1 class="title latestNews__title">Останні новини</h1>

            <button class="latestNews__moreBtn">
                <span>Всі новини</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
            </button>

            <div class="latestNews__container">
                <div class="latestNews__track">
                    <div class="latestNews__item">
                        <img src="../content/latestNews/1.png" alt="" class="latestNews__itemImage">
                        <h3 class="subtitle latestNews__itemSubtitle">
                            Наша програмара отримала сертифікат Cembridge
                        </h3>
                        <p class="text latestNews__itemText">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur mauris a metus pellentesque, in sagittis...
                        </p>
                    </div>

                    <div class="latestNews__item">
                        <img src="../content/latestNews/2.png" alt="" class="latestNews__itemImage">
                        <h3 class="subtitle latestNews__itemSubtitle">
                            Наша програмара отримала сертифікат Cembridge
                        </h3>
                        <p class="text latestNews__itemText">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur mauris a metus pellentesque, in sagittis...
                        </p>
                    </div>

                    <div class="latestNews__item">
                        <img src="../content/latestNews/3.png" alt="" class="latestNews__itemImage">
                        <h3 class="subtitle latestNews__itemSubtitle">
                            Наша програмара отримала сертифікат Cembridge
                        </h3>
                        <p class="text latestNews__itemText">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur mauris a metus pellentesque, in sagittis...
                        </p>
                    </div>

                    <div class="latestNews__item">
                        <img src="../content/latestNews/4.png" alt="" class="latestNews__itemImage">
                        <h3 class="subtitle latestNews__itemSubtitle">
                            Наша програмара отримала сертифікат Cembridge
                        </h3>
                        <p class="text latestNews__itemText">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur mauris a metus pellentesque, in sagittis...
                        </p>
                    </div>
                </div>

                

            </div>

            <div class="latestNews__btnContainer pageButtons">
                <button class="latestNews__buttonBack pageButtons__buttonBack">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                    </svg>
                </button>

                <div class="latestNews__spanContainer pageButtons__spanContainer">
                    <span class="latestNews__ListSpan pageButtons__ListSpan pageButtons__ListSpan-active"></span>
                    <span class="latestNews__ListSpan pageButtons__ListSpan"></span>
                    <span class="latestNews__ListSpan pageButtons__ListSpan"></span>
                    <span class="latestNews__ListSpan pageButtons__ListSpan"></span>
                </div>

                <button class="latestNews__buttonForward pageButtons__buttonForward pageButtons__button-active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </button>
            </div>
        </section>

        <section class="ourBlog">
            <h1 class="title ourBlog__title">
                Наш блог
            </h1>
            <div class="ourBlog__container">
                <div class="ourBlog__track">
                    <div class="ourBlog__item">
                        <img src="../content/ourBlog/1.png" alt="" class="ourBlog__itemPhoto">
                        <ul class="ourBlog__itemHashtag">
                            <a href="" class="ourBlog__itemHashatagItem">#Уроки</a>
                            <a href="" class="ourBlog__itemHashatagItem">#Курси</a>
                        </ul>
                        <h3 class="subtitle ourBlog__itemSubtitle">
                            Наша програмара отримала сертифікат Cembridge
                        </h3>
                        <p class="ourBlog__itemText text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur mauris a metus pellentesque, in sagittis...
                        </p>
                    </div>

                    <div class="ourBlog__item">
                        <img src="../content/ourBlog/1.png" alt="" class="ourBlog__itemPhoto">
                        <ul class="ourBlog__itemHashtag">
                            <a href="" class="ourBlog__itemHashatagItem">#Уроки</a>
                            <a href="" class="ourBlog__itemHashatagItem">#Курси</a>
                        </ul>
                        <h3 class="subtitle ourBlog__itemSubtitle">
                            Наша програмара отримала сертифікат Cembridge
                        </h3>
                        <p class="ourBlog__itemText text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur mauris a metus pellentesque, in sagittis...
                        </p>
                    </div>

                    <div class="ourBlog__item">
                        <img src="../content/ourBlog/1.png" alt="" class="ourBlog__itemPhoto">
                        <ul class="ourBlog__itemHashtag">
                            <a href="" class="ourBlog__itemHashatagItem">#Уроки</a>
                            <a href="" class="ourBlog__itemHashatagItem">#Курси</a>
                        </ul>
                        <h3 class="subtitle ourBlog__itemSubtitle">
                            Наша програмара отримала сертифікат Cembridge
                        </h3>
                        <p class="ourBlog__itemText text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur mauris a metus pellentesque, in sagittis...
                        </p>
                    </div>
                </div>

                
            </div>

            <div class="ourBlog__btnContainer pageButtons">
                <button class="ourBlog__buttonBack pageButtons__buttonBack">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                    </svg>
                </button>

                <div class="ourBlog__spanContainer pageButtons__spanContainer">
                    <span class="ourBlog__ListSpan pageButtons__ListSpan pageButtons__ListSpan-active"></span>
                    <span class="latestNews__ListSpan pageButtons__ListSpan"></span>
                    <span class="latestNews__ListSpan pageButtons__ListSpan"></span>
                    <span class="latestNews__ListSpan pageButtons__ListSpan"></span>
                </div>

                <button class="ourBlog__buttonForward pageButtons__buttonForward pageButtons__button-active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </button>
            </div>
        </section>

    </div>
    
<?php get_footer()?>