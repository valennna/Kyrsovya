<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">

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


            <form action="{{url('editdoctor', $data->id)}}" method="POST" enctype="multipart/form-data">

                @csrf
            
                <div style="padding: 1vw">
                    <input type="text" name="name" placeholder="Введите ФИО" value="{{$data->name}}"
                    required=""
                    style="background-color:#161516; 
                    color: #F0F0F0;
                    border:1px solid #F0F0F0;
                    width: 25vw;
                    height:3vw;
                    font-size: 1.2vw;">
                </div>

                <div style="padding: 1vw">
                    <input type="number" name="phone" placeholder="Введите телефон"  value="{{$data->phone}}"
                    required=""
                    style="background-color:#161516; 
                    color: #F0F0F0;
                    border:1px solid #F0F0F0;
                    width: 25vw;
                    height:3vw;
                    font-size: 1.2vw;">
                </div>


                
                <div style="padding: 1vw">
                    <label style="font-size: 32px; color:#F0F0F0;" for="">Специальность:</label> <br>
                    <select name="spesiality" id=""  
                    required="" value="{{$data->spesiality}}"
                    style="background-color:#161516; 
                    color: #F0F0F0;
                    border:1px solid #F0F0F0;
                    width: 25vw;
                    height:3vw;
                    font-size: 1.2vw;">
                        <option>{{$data->spesiality}}</option>
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
                    <img  height="200" width="200"  src="doctorimage/{{$data->image}}" alt="">
                </div>

                <div style="padding: 1vw">
                    <label style="font-size: 32px; color:#F0F0F0;" for="">Изменить старое изображение</label> <br>
                    <input type="file" name="file" required=""  
                    style="
                    width: 25vw;
                    height:3vw;">
                </div>

                <div style="padding-left: 1vw; padding-bottom:3vw;">
                    
                    <input type="submit" name="btn btn-primary"
                    style="border:1px solid #F0F0F0;
                    width: 25vw;
                    height:3vw;
                    font-size: 1.2vw;
                    font-weight:700;">
                </div>
            </form>
        </div>

      </div>

      @include('admin.script')
  </body>
</html>