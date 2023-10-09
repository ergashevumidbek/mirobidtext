@extends('backend.layouts.master')
@section ('title')
Galeriya
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="row">


      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h4>Galeriya</h4>
            <a href="{{route('add_gallery')}}" class="btn btn-danger" style="float:right;" type="button">Content qo'shish</a>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive theme-scrollbar">
              <table class="display" id="export-button">
                <thead>
                  <tr>
                    <th>№</th>
                    <th>Galereya nomi</th>
                    <th>Qisqa matn </th>
                    <th>Rasm banner</th>
                    <th>Sana</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($gallery as $value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->gallery_name}}</td>
                        <td>{{$value->gallery_short_text}}</td>

                        <td><img src="{{asset('storage/'.$value->gallery_img)}}" class="img-fluid table-avtar" alt=""></td>
                        <td>{{$value->created_at}}</td>
                        <td>
                          <ul class="action">
                            <li class="edit"> <a href="{{route('gallery.edit', ['gallery'=>$value->id])}}"><i class="icon-pencil-alt"></i></a></li>
                            <li class="delete">
                                <form action="{{route('gallery.destroy', ['gallery'=>$value->id])}}" method="post"
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
                    <th>Galereya nomi</th>
                    <th>Qisqa matn </th>
                    <th>Rasm banner</th>
                    <th>Sana</th>
                    <th>Action</th>
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
