@extends('layouts.master')
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
                  <tr>
                    <td>1</td>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td> ddsfvdfs</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>$320,800</td>
                    <td>
                      <ul class="action">
                        <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                        <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                      </ul>
                    </td>
                  </tr>

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
