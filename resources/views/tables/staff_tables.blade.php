
@extends('layouts.master')
@section('title')
Hodimlar
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="row">


      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h4>Hodimlar</h4>
            <a href="{{route('create_staff')}}" class="btn btn-danger" style="float:right;" type="button">Hodim qo'shish</a>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive theme-scrollbar">
              <table class="display" id="export-button">
                <thead>
                  <tr>
                    <th>№</th>
                    <th>Hodim ID</th>
                    <th>Ism</th>
                    <th>Familya</th>
                    <th>Rasm</th>
                    <th>Lavozim</th>
                    <th>Telifon</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>System Architect</td>
                    <td> shsajs</td>
                    <td>61</td>
                    <td><img class="img-fluid table-avtar" src="../assets/images/dashboard/default/02.png" alt=""></td>
                    <td>ssdfadfaf</td>
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
                    <th>Hodim ID</th>
                    <th>Ism</th>
                    <th>Familya</th>
                    <th>Rasm</th>
                    <th>Lavozim</th>
                    <th>Telifon</th>
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
