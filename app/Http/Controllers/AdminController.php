<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //переход на страницу добавления докторов
    public function addview()
    {
        //проверка на пользователя(админ, авторизированный или нет)
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
                return view('admin.add_doctor');
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }


        
    }
    //добавлениe докторов

    public function upload(Request $request)
    {
        
        $doctor=new doctor;
        
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage', $imagename);

        $doctor->image=$imagename;
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->spesiality=$request->spesiality;


        $doctor->save();

        return redirect()->back()->with('message', 'Новый специалист был успешно добавлен');

    }


    //Отображение заявок
    public function showappointment()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
                $data=appointment::all();

                return view('admin.showappointment', compact('data'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }

        
    }

    // Одобрение заявки
    public function approved($id)
    {

        $data=appointment::find($id);

        $data->status='Заявка одобрена. Мы ждем вас на приеме';

        $data->save();

        return redirect()->back();
    }
    // отмена
    public function canceled($id)
    {

        $data=appointment::find($id);

        $data->status='Заявка отменена, но мы в скором времени с вами свяжемся и назначим другое время.';

        $data->save();

        return redirect()->back();
    }

    //Отображение врачей
    public function showdoctor()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
                $data=doctor::all();

                return view('admin.showdoctor', compact('data'));
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login');
        }

        
    }
    //Удвление врача
    public function deletedoctor($id)
    {
        $data=doctor::find($id);
        $data->delete();
        

        return redirect()->back();
    }
     //страница редактирования данных врача
    public function updatedoctor($id)
    {
        $data=doctor::find($id);

        return view('admin.update_doctor',compact('data'));
    }
     //редактирование данных врача
     public function editdoctor(Request $request, $id)
     {
        $doctor = doctor::find($id);

        $doctor->name=$request->name;

        $doctor->phone=$request->phone;
        
        $doctor->spesiality=$request->spesiality;

        $image=$request->file;

        if($image)
        {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);

        $doctor->image=$imagename;
        }

        $doctor->save();

        return redirect()->back()->with('message', 'Данные были успешно отредактированы.');
     }

}
