<section id="Registr_IN">
    <div class="wrapper">
        <div class="regist__in__container">
            <div class="container__box__form__left">
                
            </div>
            <div class="container__box__form__right">
                <h1 class="record">Запишитесь</h1>
                <div class="form__container">
                    <form action="{{url('appointment')}}" method="POST">

                        @csrf
                        <div class="inputbox">
                            <input type="text" name="name" required="required" placeholder="Введите ФИО">
                            
                        </div>
                        <div class="inputbox">
                            <input type="text" name="email" required="required" placeholder="Введите почту">
                            
                        </div>
                        <div class="inputbox">
                            <input type="text" name="phone" required="required" placeholder="Введите номер телефона">
                            
                        </div>
                        <div class="inputbox input__change__doctor">
                            <p class="change__doctor"><strong>Выберите специалиста</strong></p>
                            <p><select style="color: #000;" name="doctor" class="select__change">
                            @foreach ($doctor as $doctors)
                                
                            
                            <option style="color: #000;" value="{{$doctors->name}}">{{$doctors->name}} --- {{$doctors->spesiality}}</option>
                            @endforeach
                            </select> 
                        </div>
                        <div class="inputbox data_input">
                            <input type="date" id="meeting-time"
                            name="date" value=""
                            min="2023-04-11T00:00" max="">
                        </div>
                        <div class="inputbox time_input">
                            <select style="color: #000;" name="time" placeholder="Выберите нужное время" class="select__change"> 
                            <option style="color: #000;" value="8:00">8:00</option>
                            <option style="color: #000;" value="8:30">8:30</option>
                            <option style="color: #000;" value="9:00">9:00</option>
                            <option style="color: #000;" value="9:30">9:30</option>
                            <option style="color: #000;" value="10:00">10:00</option>
                            <option style="color: #000;" value="10:30">10:30</option>
                            <option style="color: #000;" value="11:00">11:00</option>
                            <option style="color: #000;" value="11:30">11:30</option>
                            <option style="color: #000;" value="12:00">12:00</option>
                            <option style="color: #000;" value="12:30">12:30</option>
                            <option style="color: #000;" value="13:00">13:00</option>
                            <option style="color: #000;" value="14:00">14:00</option>
                            <option style="color: #000;" value="14:30">14:30</option>
                            <option style="color: #000;" value="15:00">15:00</option>
                            <option style="color: #000;" value="15:30">15:30</option>
                            <option style="color: #000;" value="16:00">16:00</option>
                            <option style="color: #000;" value="16:30">16:30</option>
                            <option style="color: #000;" value="17:00">17:00</option>
                            <option style="color: #000;" value="17:30">17:30</option>
                            <option style="color: #000;" value="18:00">18:00</option>
                            <option style="color: #000;" value="18:30">18:30</option>
                            <option style="color: #000;" value="19:00">19:00</option>
                            <option style="color: #000;" value="19:30">19:30</option>
                            </select>
                        </div>
                        <div class="inputbox input__message">
                            <textarea placeholder="Ваще сообщение" name="message" rows="5"></textarea>
                        </div>
                        <div class="container__button__regist">
                            <button class="button__regist" type="submit" href="/">Записаться</button>
                        </div>            
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="backround__dna__bottom"></div>
</section>