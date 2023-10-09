@extends('backend.layouts.master')
@section('title')
Slayder to'plami
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="row">

      <div class="col-sm-12 ">
        <div class="card">
          <div class="card-header pb-0">
            <h4>Slayder jadvali</h4>
            <a href="{{route('add_slayder')}}" class="btn btn-danger" style="float:right;" type="button">Slayder qo'shish</a>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive theme-scrollbar">
              <table class="display" id="export-button">
                <thead>
                  <tr>
                    <th>№</th>
                    <th>Slayder text</th>
                    <th>Qisqa matn</th>
                    <th>Tarif</th>
                    <th>Banner rasm</th>
                    <th>Yaratilgan sana</th>
                    <th>Taxrirlash</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($slayder_data as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->slayder_main_text}}</td>
                        <td>{{$value->slayder_short_text}}</td>
                        <td>{{$value->slayder_label}}</td>
                        <td> <img src="{{asset('/storage/'.$value->slayder_img)}}" style="width: 50px;height:50px;" alt="" class=""></td>
                        <td>{{$value->created_at}}</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="{{route('slayder_content.edit', ['slayder_content'=>$value->id])}}"><i class="icon-pencil-alt"></i></a></li>
                            <li class="delete">
                                <form action="{{route('slayder_content.destroy', ['slayder_content'=>$value->id])}}" method="post"
                                    onsubmit="return confirm('Rostdan ham o\'chirishni hohlaysizmi')"
                                    >
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" class="" style="outline-style: none; border-style:none;"><i class="icon-trash"></i></button>
                                </form>

                            </li>
                          </ul>
                        </td>
                      </tr>
                    @endforeach


                </tbody>
                <tfoot>
                    <th>№</th>
                    <th>Slayder text</th>
                    <th>Qisqa matn</th>
                    <th>Tarif</th>
                    <th>Banner rasm</th>
                    <th>Yaratilgan sana</th>
                    <th>Taxrirlash</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
