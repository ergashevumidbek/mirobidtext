@extends('layouts.master')
@section('title')
Avtomobillar
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="row">


      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h4>Avtomobillar ro'yhati</h4>
            <a href="{{route('add_avtomobile')}}" class="btn btn-danger" style="float:right;" type="button">Avtomobillar qo'shish</a>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive theme-scrollbar">
              <table class="display" id="export-button">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Mashina rusumi</th>
                    <th>Banner image</th>
                    <th>Rasmlar</th>
                    <th>Taxrirlash</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td> <img class="img-fluid table-avtar" src="../assets/images/dashboard/default/02.png" alt=""></td>
                    <td>61</td>
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
                    <th>Mashina rusumi</th>
                    <th>Banner image</th>
                    <th>Rasmlar</th>
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
