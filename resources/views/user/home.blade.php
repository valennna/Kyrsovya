<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;0,800;1,900&family=Roboto:wght@400;700&family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/accordion.min.css">
    <link rel="stylesheet" href="css/Home.css">
    <title>Медицинский центр Доктора Калининой</title>
</head>
<body>
    <div class="backround__dna">
                
    </div>
    <header>
        <nav class="navigation">
            <div class="navigation__left">
                <div style="width: 10vw; text-align:center;" class="navigation__link link__logo">
                    <a href="">Клиника доктора Калининой</a>
                </div>
                <div class="navigation__link link__about">
                    <a href="#About">О Нас</a>
                </div>
            </div>
        
            <div class="navigation__right">
                <div class="navigation__link link__specialist">
                    <a href="#Spesialist">Специалисты</a>
                </div>
                <div class="navigation__link link__price">
                    <a href="#Price">Прайс</a>
                </div>

                @if(Route::has('login'))

                @auth
                <div class="navigation__link link__price">
                    <a href="{{url('myappointment')}}">Заявки</a>
                </div>  
                <x-app-layout>
                </x-app-layout>

                @else

                <div class="navigation__link link__signin">
                    <a href="{{route('login')}}">Войти</a>
                </div>
                <div class="navigation__link link__registr">
                    <a href="{{route('register')}}">Зарегистрироваться</a>
                </div>

                @endauth

                @endif

            </div>
        </nav>
    </header>
    @if (session()->has('message'))
            <div class="alert alert-success" style="width: 25vw; margin-left: 9.82vw; margin-top: 5vw; background-color: #05255B; padding: 1vw;">

                <button type="button" class="close" data-dismiss="alert"></button>

                {{session()->get('message')}}

            </div>
        @endif
    <section>
        <div class="wrapper">
            <div class="block__header__text">
                <div class="text__header title__head">
                    <p>Детальное обследование вашего тела</p>
                </div>
                <div class="text__header title__text__head">
                    <p>Современный медицинский центр, который хорошо технически оснащен и полностью укомплектован штатом профильных специалистов.</p>
                </div>
                <div class="text__header register__in">
                    <a class="Registr_In" href="#Registr_IN">Записаться</a>
                    <a class="arrow__register" href="#Registr_IN"></a>
                </div>
            </div>
            </div>
            <div class="Services__block">
                <div class="Services">
                    <div class="service__block__both service__left">
                        <p class="services__text__left">Наша клиника предлагает следующие</p>
                        <h2 class="services__text__title">Услуги</h2>
                    </div>
                    <div class="service__block__both service__right">
                        <div class="all__services one__service">
                            <div class="number__serve">
                                <p>01</p>
                            </div>
                            <p class="service__text">
                                Ультразвуковая диагностика: Эхо-КГ сердца, УЗИ щитовидной железы, молочной железы, внутренних органов (печени, желчного пузыря, поджелудочной железы, селезенки), почек, органов малого таза, мочевого пузыря и др.
                            </p>
                        </div>
                        <div class="all__services two__service">
                            <div class="number__serve">
                                <p>02</p>
                            </div>
                            <p class="service__text">
                                Кольпоскопия - простая и расширенная, позволяющая диагностировать предопухолевые и онкологические заболевания шейки матки на самых ранних стадиях заболевания. (Мы используем кольпоскоп экспертного класса с видеосистемой МК-200).
                            </p>
                        </div>
                        <div class="all__services three__service">
                            <div class="number__serve">
                                <p>03</p>
                            </div>
                            <p class="service__text">
                                Лечение шейки матки - лечение эрозии, дисплазии, эндометриоза шейки матки и других заболеваний шейки матки.
                            </p>
                        </div>
                        <div class="all__services four__service">
                            <div class="number__serve">
                                <p>04</p>
                            </div>
                            <p class="service__text">
                                Консультации специалистов
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section id="About">
        <div class="wrapper">
            <h2 class="title__about">О Нас</h2>
            <div class="about__top">
                <div class="about__top__left">
                    <p class="text__about">Весь персонал клиники – дипломированные специалисты с действующими сертификатами по специальности. У нас работают два кандидата медицинских наук, пять специалистов закончили медицинский ВУЗ с отличием, все специалисты постоянно повышают свой профессиональный уровень, участвуют в медицинских конференциях, семинарах, вебинарах.</p>
                </div>
                <div class="about__top__right">
                    <div class="main__photo__clinic"></div>
                </div>
            </div>
            <div class="about__bottom">
                <div class="photo__about__clinica photo_01"></div>
                <div class="photo__about__clinica photo_02"></div>
                <div class="photo__about__clinica photo_03"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="wrapper">
            <div class="principles__block">
                <div class="principles">
                    <div class="principles__block__both principles__left">
                        <h2 class="principles__text__title">Основные принципы работы </h2>
                    </div>
                    <div class="principles__block__both principles__right">
                        <div class="all__principles one__principles">
                            <div class="number__principles">
                                <p>01</p>
                            </div>
                            <div class="principles__text__block">
                                <h2 class="principiles__title">Доступность</h2>
                                <p class="principles__text">медицинской помощи</p>
                            </div>
                            
                        </div>
                        <div class="all__principles two__principles">
                            <div class="number__principles">
                                <p>02</p>
                            </div>
                            <div class="principles__text__block">
                                <h2 class="principiles__title">Индивидуальный подход</h2>
                                <p class="principles__text">максимальное внимание к пациентам</p>
                            </div>
                        </div>
                        <div class="all__principles three__principles">
                            <div class="number__principles">
                                <p>03</p>
                            </div>
                            <div class="principles__text__block">
                                <h2 class="principiles__title">Профессионализм</h2>
                                <p class="principles__text">высокий профессионализм</p>
                            </div>
                        </div>
                        <div class="all__principles four__principles">
                            <div class="number__principles">
                                <p>04</p>
                            </div>
                            <div class="principles__text__block">
                                <h2 class="principiles__title">Корректность и пунктуальность</h2>
                                <p class="principles__text">при оказании медицинской помощи</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    @include('user.doctor')


    <section id="Price" class="price">
        <div class="wrapper price__container">
            <h1>Прайс</h1>

        <ul class="list accordion-container">
            <li class="list__item ac">
                <h3 class="list__item-title ac-header ac-trigger">
                    ТЕРАПИЯ
                    <svg width="38" height="40" viewBox="0 0 38 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.729492 18.9977H37.2788M18.4586 0.583496L18.4586 39.7502" stroke="#F2F2F1" stroke-width="3"/>
                        </svg>
                                               
                </h3>
                <p class="list__item-text ac-panel">
                    <br>
                    Прием врача-терапевта первичный - 1700 руб.
                    <br>
                    Прием врача-терапевта повторный - 1000 руб.
                    <br>
                    Пикфлуометрия - 340 руб.
                    <br>
                    Пикфлуометрия - 200 руб.
                    <br>
                </p>
            </li>
            <li class="list__item ac">
                <h3 class="list__item-title ac-header ac-trigger">
                    КАРДИОЛОГИЯ
                    <svg width="38" height="40" viewBox="0 0 38 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.729492 18.9977H37.2788M18.4586 0.583496L18.4586 39.7502" stroke="#F2F2F1" stroke-width="3"/>
</svg>

                </h3>
                <p class="list__item-text ac-panel">
                    <br>
                    Прием врача-кардиолога первичный - 1700 руб.
                    <br>
                    Прием врача-кардиолога повторный - 1000 руб.
                    <br>
                    ЭКГ - 700 руб.
                    <br>
                </p>
            </li>
            <li class="list__item ac">
                <h3 class="list__item-title ac-header ac-trigger">
                    НЕВРОЛОГИЯ
                    <svg width="38" height="40" viewBox="0 0 38 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.729492 18.9977H37.2788M18.4586 0.583496L18.4586 39.7502" stroke="#F2F2F1" stroke-width="3"/>
</svg>

                </h3>
                <p class="list__item-text ac-panel">
                    <br>
                    Прием врача-невролога первичный - 1700 руб.
                    <br>
                    Прием врача-невролога первичный - 1000 руб.
                    <br>
                        
                </p>
            </li>
            <li class="list__item ac">
                <h3 class="list__item-title ac-header ac-trigger">
                    ЭНДОКРИНОЛОГИЯ
                    <svg width="38" height="40" viewBox="0 0 38 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.729492 18.9977H37.2788M18.4586 0.583496L18.4586 39.7502" stroke="#F2F2F1" stroke-width="3"/>
</svg>

                </h3>
                <p class="list__item-text ac-panel">
                    <br>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi dicta soluta dolorem, eos iste voluptatibus delectus quaerat placeat illum repudiandae repellat? Rerum nihil suscipit corrupti cum, fugiat aspernatur eaque. Dolore animi enim amet, dolorem
                    modi cum asperiores assumenda libero id eaque quas aliquam adipisci recusandae rem obcaecati distinctio, nemo architecto a in excepturi, temporibus esse odit officiis sequi? Deleniti praesentium similique eaque accusamus? Ullam asperiores
                    magnam, accusamus dolorum iure maiores laboriosam fugiat eaque qui, deleniti aut quaerat assumenda corrupti beatae quibusdam? Esse labore nobis eum. Blanditiis odit, iure est explicabo molestiae asperiores minus inventore! Officia
                    ad dolor, quis maiores optio eius sed expedita eligendi inventore odio exercitationem dicta odit aut saepe voluptate eaque. Corrupti facilis officiis ratione reprehenderit neque aut.
                </p>
            </li>
            <li class="list__item ac">
                <h3 class="list__item-title ac-header ac-trigger">
                    ОНКОЛОГИЯ
                    <svg width="38" height="40" viewBox="0 0 38 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.729492 18.9977H37.2788M18.4586 0.583496L18.4586 39.7502" stroke="#F2F2F1" stroke-width="3"/>
</svg>

                </h3>
                <p class="list__item-text ac-panel">
                    <br>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi dicta soluta dolorem, eos iste voluptatibus delectus quaerat placeat illum repudiandae repellat? Rerum nihil suscipit corrupti cum, fugiat aspernatur eaque. Dolore animi enim amet, dolorem
                    modi cum asperiores assumenda libero id eaque quas aliquam adipisci recusandae rem obcaecati distinctio, nemo architecto a in excepturi, temporibus esse odit officiis sequi? Deleniti praesentium similique eaque accusamus? Ullam asperiores
                    magnam, accusamus dolorum iure maiores laboriosam fugiat eaque qui, deleniti aut quaerat assumenda corrupti beatae quibusdam? Esse labore nobis eum. Blanditiis odit, iure est explicabo molestiae asperiores minus inventore! Officia
                    ad dolor, quis maiores optio eius sed expedita eligendi inventore odio exercitationem dicta odit aut saepe voluptate eaque. Corrupti facilis officiis ratione reprehenderit neque aut.
                </p>
            </li>
            <li class="list__item ac">
                <h3 class="list__item-title ac-header ac-trigger">
                    ГИНЕКОЛОГИЯ
                    <svg width="38" height="40" viewBox="0 0 38 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.729492 18.9977H37.2788M18.4586 0.583496L18.4586 39.7502" stroke="#F2F2F1" stroke-width="3"/>
</svg>

                </h3>
                <p class="list__item-text ac-panel">
                    <br>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi dicta soluta dolorem, eos iste voluptatibus delectus quaerat placeat illum repudiandae repellat? Rerum nihil suscipit corrupti cum, fugiat aspernatur eaque. Dolore animi enim amet, dolorem
                    modi cum asperiores assumenda libero id eaque quas aliquam adipisci recusandae rem obcaecati distinctio, nemo architecto a in excepturi, temporibus esse odit officiis sequi? Deleniti praesentium similique eaque accusamus? Ullam asperiores
                    magnam, accusamus dolorum iure maiores laboriosam fugiat eaque qui, deleniti aut quaerat assumenda corrupti beatae quibusdam? Esse labore nobis eum. Blanditiis odit, iure est explicabo molestiae asperiores minus inventore! Officia
                    ad dolor, quis maiores optio eius sed expedita eligendi inventore odio exercitationem dicta odit aut saepe voluptate eaque. Corrupti facilis officiis ratione reprehenderit neque aut.
                </p>
            </li>
            <li class="list__item ac">
                <h3 class="list__item-title ac-header ac-trigger">
                    УЛЬТРАЗВУКОВАЯ ДИАГНОСТИКА
                    <svg width="38" height="40" viewBox="0 0 38 40" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M0.729492 18.9977H37.2788M18.4586 0.583496L18.4586 39.7502" stroke="#F2F2F1" stroke-width="3"/>
</svg>

                </h3>
                <p class="list__item-text ac-panel">
                    <br>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi dicta soluta dolorem, eos iste voluptatibus delectus quaerat placeat illum repudiandae repellat? Rerum nihil suscipit corrupti cum, fugiat aspernatur eaque. Dolore animi enim amet, dolorem
                    modi cum asperiores assumenda libero id eaque quas aliquam adipisci recusandae rem obcaecati distinctio, nemo architecto a in excepturi, temporibus esse odit officiis sequi? Deleniti praesentium similique eaque accusamus? Ullam asperiores
                    magnam, accusamus dolorum iure maiores laboriosam fugiat eaque qui, deleniti aut quaerat assumenda corrupti beatae quibusdam? Esse labore nobis eum. Blanditiis odit, iure est explicabo molestiae asperiores minus inventore! Officia
                    ad dolor, quis maiores optio eius sed expedita eligendi inventore odio exercitationem dicta odit aut saepe voluptate eaque. Corrupti facilis officiis ratione reprehenderit neque aut.
                </p>
            </li>
        </ul>
        </div>
    </section>

    @include('user.appointment')



    <footer>
        <div class="wrapper__footer">
            <div class="footer__left">
                <a href="" class="link__document">Нормативные документы</a> <br>
                <a href="" class="link__document">Лицензии</a>
            </div>
            <div class="footer__right">
                <div class="top__left__footer">
                    <h2 class="footer__address">Адрес</h2>
                    <p class="text__footer">г. Астрахань, ул. Бабаевского №31.</p>
                </div>
            </div>
            <div class="footer__right__3">
                <div class="top__right__footer">
                    <h2 class="footer__address">Контакты</h2>
                    <p class="text__footer">+7 (8512) 555-111 <br>+7 (905) 060-37-13                                </p>
                </div>
            </div>
        </div>
        <div class="copy__footer">
            <a href="" class="link__copyright">Copyright © 2013 - 2023 Политика конфиденциальности</a>
        </div>
        
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/accordion.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>