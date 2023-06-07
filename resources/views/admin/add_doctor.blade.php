<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body style="background-color: #161516;">
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        
      <div class="container-fluid page-body-wrapper">


        <div class="container" align-items="center"
        style="padding-top: 5vw;
        ">

        @if (session()->has('message'))
            <div class="alert alert-success">

                <button type="button" class="close" data-dismiss="alert"></button>

                {{session()->get('message')}}

            </div>
        @endif


            <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                
            @csrf
                
                
                <div style="padding: 1vw">
                    <input type="text" name="name" placeholder="Введите ФИО" 
                    required=""
                    style="background-color:#161516; 
                    color: #F0F0F0;
                    border:1px solid #F0F0F0;
                    width: 25vw;
                    height:3vw;
                    font-size: 1.2vw;">
                </div>

                <div style="padding: 1vw">
                    <input type="number" name="number" placeholder="Введите телефон" 
                    required=""
                    style="background-color:#161516; 
                    color: #F0F0F0;
                    border:1px solid #F0F0F0;
                    width: 25vw;
                    height:3vw;
                    font-size: 1.2vw;">
                </div>

                <div style="padding: 1vw">
                    <select name="spesiality" id=""
                    required=""
                    style="background-color:#161516; 
                    color: #F0F0F0;
                    border:1px solid #F0F0F0;
                    width: 25vw;
                    height:3vw;
                    font-size: 1.2vw;">
                        <option>Выберите специальность</option>
                        <option value="Кардиолог">Кардиолог</option>
                        <option value="Невролог">Невролог</option>
                        <option value="Врач УЗД">Врач УЗД</option>
                        <option value="Гинеколог">Гинеколог</option>
                        <option value="Терапевт">Терапевт</option>
                        <option value="Онколог">Онколог</option>
                        <option value="Эндокринолог">Эндокринолог</option>
                        <option value="Акушер-гинеколог">Акушер-гинеколог</option>
                    </select>
                </div>

                <div style="padding: 1vw">
                    <input type="file" name="file" required=""
                    style="
                    width: 25vw;
                    height:3vw;">
                </div>

                <div style="padding: 1vw">
                    
                    <input type="submit" name="btn btn-success"
                    style="border:1px solid #F0F0F0;
                    width: 25vw;
                    height:3vw;
                    font-size: 1.2vw;
                    font-weight:700;">
                </div>
            </form>
        </div>
        {{-- <h1>Добавить специалиста</h1> --}}

      </div>

      @include('admin.script')
  </body>
</html>