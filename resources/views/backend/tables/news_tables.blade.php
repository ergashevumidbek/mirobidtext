@extends('backend.layouts.master')
@section('title')
Yangiliklar
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="row">

      <div class="col-sm-12 ">
        <div class="card">
          <div class="card-header pb-0">
            <h4>Yangiliklar ro'yhati</h4>
            <a href="{{route('add_news')}}" class="btn btn-danger" style="float:right;" type="button">Yangilik qo'shish</a>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive theme-scrollbar">
              <table class="display" id="export-button">
                <thead>
                  <tr>
                    <th>№</th>
                    <th>Yangilik sarlovha</th>
                    <th>Qisqa matn</th>
                    <th>Banner rasm</th>
                    <th>Rasm-1</th>
                    <th>Rasm-2</th>
                    <th>Yaratilgan sana</th>
                    <th>Taxrirlash</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($mirobidtext_news as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->news_title}}</td>
                        <td>{{$value->news_short_content}}</td>
                        <td> <img src="{{asset('storage/'.$value->banner_img)}}" style="width: 50px;height:50px;" alt="" class=""></td>
                        <td><img src="{{asset('storage/'.$value->news_img_1)}}" style="width: 50px;height:50px;" alt="" class=""></td>
                        <td><img src="{{asset('storage/'.$value->news_img_2)}}" style="width: 50px;height:50px;" alt="" class=""></td>
                        <td>{{$value->created_at}}</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="{{route('mirobidtext_news.edit', ['mirobidtext_news'=>$value->id])}}"><i class="icon-pencil-alt"></i></a></li>
                            <li class="delete">
                                <form action="{{route('mirobidtext_news.destroy', ['mirobidtext_news'=>$value->id])}}" method="post"
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
                  <tr>
                    <th>№</th>
                    <th>Yangilik sarlovha</th>
                    <th>Qisqa matn</th>
                    <th>Banner rasm</th>
                    <th>Rasm-1</th>
                    <th>Rasm-2</th>
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
