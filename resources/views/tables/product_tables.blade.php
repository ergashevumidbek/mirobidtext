@extends('layouts.master')
@section('title')
Mahsulotlar
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="row">


      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h4>Mahsulotlar qo'shish</h4>
            <a href="{{route('add_product')}}" class="btn btn-danger" style="float:right;" type="button">Mahsulot qo'shish</a>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive theme-scrollbar">
              <table class="display" id="export-button">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Mahsulot nomi</th>
                    <th>Mahsulot turi</th>
                    <th>Banner rasm</th>
                    <th>Kontent rasmlar </th>
                    <th>Sana</th>
                    <th>Taxrirlash</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>System Architect</td>
                    <td>daasfsf </td>
                    <td><img class="img-fluid table-avtar" src="../assets/images/dashboard/default/02.png" alt=""></td>
                    <td>
                        <img class="img-fluid table-avtar" src="../assets/images/dashboard/default/02.png" alt="">
                        <img class="img-fluid table-avtar" src="../assets/images/dashboard/default/02.png" alt="">
                    </td>
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
                    <th>#</th>
                    <th>Mahsulot nomi</th>
                    <th>Mahsulot turi</th>
                    <th>Banner rasm</th>
                    <th>Kontent rasm</th>
                    <th>Sana</th>
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
