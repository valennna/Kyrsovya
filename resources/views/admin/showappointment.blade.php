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
                    <th style="padding-bottom: 2vh; padding-right: 4vw; font-size: 20px; font-weight: 500;">Клиент</th>
                    <th style="padding-bottom: 2vh; padding-right: 4vw; font-size: 20px; font-weight: 500;">Почта</th>
                    <th style="padding-bottom: 2vh; padding-right: 4vw; font-size: 20px; font-weight: 500;">Телефон</th>
                    <th style="padding-bottom: 2vh; padding-right: 4vw; font-size: 20px; font-weight: 500;">Врач</th>
                    <th style="padding-bottom: 2vh; padding-right: 2vw; font-size: 20px; font-weight: 500;">Дата</th>
                    <th style="padding-bottom: 2vh; padding-right: 3vw; font-size: 20px; font-weight: 500;">Время</th>
                    <th style="padding-bottom: 2vh; padding-right: 4vw; font-size: 20px; font-weight: 500;">Сообщение</th>
                    <th style="padding-bottom: 2vh; padding-right: 4vw; font-size: 20px; font-weight: 500;">Статус</th>
                    <th style="padding-bottom: 2vh;padding-left: 3vw; padding-right: 4vw; font-size: 20px; font-weight: 500;">Одобрить</th>
                    <th style="padding-bottom: 2vh; padding-right: 2vw; font-size: 20px; font-weight: 500;">Отменить</th>
                </tr>

                @foreach ($data as $appoint)
                    
                
                <tr style="border-bottom: 1px solid #ffffff;">
                    <td style="padding-bottom: 2vh; font-size:16px; padding-top: 2vh; padding-right: 1vw; width: 10vw; height: auto;">{{$appoint->name}}</td>
                    <td style="padding-bottom: 2vh; font-size:16px; padding-top: 2vh; padding-right: 1vw; width: 10vw; height: auto;">{{$appoint->email}}</td>
                    <td style="padding-bottom: 2vh; font-size:16px; padding-top: 2vh; padding-right: 1vw; width: 10vw; height: auto;">{{$appoint->phone}}</td>
                    <td style="padding-bottom: 2vh; font-size:16px; padding-top: 2vh; padding-right: 1vw; width: 10vw; height: auto;">{{$appoint->doctor}}</td>
                    <td style="padding-bottom: 2vh; font-size:16px; padding-top: 2vh; padding-right: 1vw; width: 10vw; height: auto;">{{$appoint->date}}</td>
                    <td style="padding-bottom: 2vh; font-size:16px; padding-top: 2vh; padding-right: 1vw; width: 10vw; height: auto;">{{$appoint->time}}</td>
                    <td style="padding-bottom: 2vh; font-size:16px; padding-top: 2vh; padding-right: 1vw; width: 10vw; height: auto;">{{$appoint->message}}</td>
                    <td style="padding-bottom: 2vh; font-size:16px; padding-top: 2vh; padding-right: 1vw; width: 10vw; height: auto;">{{$appoint->status}}</td>
                    <td><a href="{{url('approved', $appoint->id)}}" class="bt btn-success" style="border:none; background-color:#161516; padding-bottom: 2vh; font-size:16px; padding-top: 2vh; padding-right: 1vw; width: 10vw; height: auto; padding-left:4vw;">Одобрить</a></td>
                    <td><a href="{{url('canceled', $appoint->id)}}" class="bt btn-danger" style="border:none; background-color:#161516; padding-bottom: 2vh; font-size:16px; padding-top: 2vh; padding-right: 1vw; width: 10vw; height: auto; padding-left:1vw;">Отменить</a></td>
                </tr>
                @endforeach
            </table>

        </div>
      </div>

    

      @include('admin.script')
  </body>
</html>