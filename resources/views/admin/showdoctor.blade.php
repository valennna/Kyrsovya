<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body  style="background-color: #161516;">
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div style="margin-top: 6vw; ">
            <table>
                <tr style="border-bottom: 1px solid #ffffff;">
                    <th style="padding-bottom: 2vh; padding-right: 6vw; font-size: 20px; font-weight: 500;">Имя врача</th>
                    <th style="padding-bottom: 2vh; padding-right: 6vw; font-size: 20px; font-weight: 500;">Телефон</th>
                    <th style="padding-bottom: 2vh; padding-right: 6vw; font-size: 20px; font-weight: 500;">Специальность</th>
                    <th style="padding-bottom: 2vh; padding-right: 6vw; font-size: 20px; font-weight: 500;">Изображение</th>
                    <th style="padding-bottom: 2vh; padding-right: 6vw; font-size: 20px; font-weight: 500;">Удалить</th>
                    <th style="padding-bottom: 2vh; padding-right: 6vw; font-size: 20px; font-weight: 500;">Редактировать</th>
                </tr>

                @foreach ($data as $doctor)
                    
                
                <tr style="border-bottom: 1px solid #ffffff;">
                    <td style="padding-bottom: 2vh; font-size:16px; padding-top: 2vh; padding-right: 1vw; width: 11vw; height: auto;">{{$doctor->name}}</td>
                    <td style="padding-bottom: 2vh; font-size:16px; padding-top: 2vh; padding-right: 1vw; width: 11vw; height: auto;">{{$doctor->phone}}</td>
                    <td style="padding-bottom: 2vh; font-size:16px; padding-top: 2vh; padding-right: 1vw; width: 11vw; height: auto;">{{$doctor->spesiality}}</td>
                    <td style="padding-bottom: 2vh; font-size:16px; padding-top: 2vh; padding-right: 1vw; width: 12vw; height: auto;"><img height="100" width="100" src="doctorimage/{{$doctor->image}}" alt=""></td>
                    <td><a href="{{url('deletedoctor', $doctor->id)}}" onclick="return confirm('Вы уверены, что хотите удалить специалиста?')" class="bt btn-danger" style="border:none; background-color:#161516; padding-bottom: 2vh; font-size:16px; padding-top: 2vh;padding-left: 1vw; padding-right: 1vw; width: 12vw; height: auto;">Удалить</a></td>
                    <td><a href="{{url('updatedoctor',$doctor->id)}}" class="bt btn-primary" style="border:none; background-color:#161516; padding-bottom: 2vh; font-size:16px; padding-top: 2vh; padding-left: 1vw; padding-right: 1vw; width: 11vw; height: auto;">Редактировать</a></td>
                </tr>
                @endforeach
            </table>

        </div>
      </div>

    

      @include('admin.script')
  </body>
</html>