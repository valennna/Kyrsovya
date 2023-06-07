<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;0,800;1,900&family=Roboto:wght@400;700&family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="css/Home.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navigation">
            <div class="navigation__left">
                <div style="width: 10vw; text-align:center;" class="navigation__link link__logo">
                    <a  href="{{url('/')}}">Клиника доктора Калининой</a>
                </div>
                <div class="navigation__link link__about">
                    <a href="{{url('home#About')}}">О Нас</a>
                </div>
            </div>
        
            <div class="navigation__right">
                <div class="navigation__link link__specialist">
                    <a href="{{url('home#Spesialist')}}">Специалисты</a>
                </div>
                <div class="navigation__link link__price">
                    <a href="{{url('home#Price')}}">Прайс</a>
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
    <div class="container__table" 
    style="margin-top: 5vw; padding-left: 5.62vw; padding-right: 5.62vw;"
    >
        <table> 
            <tr style="border-bottom: 1px solid #ffffff;">
                <th style="padding-bottom: 2vh; padding-right: 10vw; text-align: left; font-size: 20px; font-weight: 500;">Имя доктора</th>
                <th style="padding-bottom: 2vh; padding-right: 10vw; text-align: left; font-size: 20px; font-weight: 500;">Дата приема</th>
                <th style="padding-bottom: 2vh; padding-right: 6vw; text-align: left; font-size: 20px; font-weight: 500;">Время</th>
                <th style="padding-bottom: 2vh; padding-right: 10vw; text-align: left; font-size: 20px; font-weight: 500;">Сообщение</th>
                <th style="padding-bottom: 2vh; padding-right: 10vw; text-align: left; font-size: 20px; font-weight: 500;">Статус</th>
                <th style="padding-left: 6vw; padding-bottom: 2vh; padding-right: 5vw; text-align: left; font-size: 20px; font-weight: 500;">Отмена заявки</th>
            </tr>


            @foreach ($appoint as $appoints)

            <tr style="border-bottom: 1px solid #ffffff;">
                <td style="padding-bottom: 2vh; font-size:18px; padding-top: 2vh; padding-right: 1vw; width: 19vw; height: auto;">{{$appoints->doctor}}</td>
                <td style="padding-bottom: 2vh; font-size:18px; padding-top: 2vh; padding-right: 1vw; width: 19vw; height: auto;">{{$appoints->date}}</td>
                <td style="padding-bottom: 2vh; font-size:18px; padding-top: 2vh; padding-right: 1vw; width: 8vw; height: auto;">{{$appoints->time}}</td>
                <td style="padding-bottom: 2vh; font-size:18px; padding-top: 2vh; padding-right: 1vw; width: 8vw; height: auto;">{{$appoints->message}}</td>
                <td style="padding-bottom: 2vh; font-size:18px; padding-top: 2vh; padding-right: 1vw; width: 8vw; height: auto;">{{$appoints->status}}</td>
                <td><a href="{{url('cancel_appoint', $appoints->id)}}" onclick="return confirm('Вы уверены, что хотите удалить заявку?')" class="bt btn-danger" style="padding-left: 6vw; font-size:20px;">Отменить</a></td>
            </tr>
            @endforeach
        </table>
    </div>
    <footer style="position: fixed;
    left: 0;
    right:0;
    bottom:1vw;">
        <div class="wrapper__footer" >
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
</body>
</html>