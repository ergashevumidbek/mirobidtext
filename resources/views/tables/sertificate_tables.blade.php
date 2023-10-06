@extends('layouts.master')
@section('title')
Guvohnoma va sertifikatlar
@endsection
@section('main_content')
<div class="container-fluid">
    <div class="row">


      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0">
            <h4>Guvohnoma va sertifikatlar</h4>
            <a href="{{route('add_sertificate')}}" class="btn btn-danger" style="float:right;" type="button">Gost yaratish</a>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive theme-scrollbar">
              <table class="display" id="export-button">
                <thead>
                  <tr>
                    <th>№</th>
                    <th>Gost nomi</th>
                    <th>Gost rasm</th>
                    <th>Taxrirlash</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>61</td>
                    <td>2011/04/25</td>
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
                    <th>Gost nomi</th>
                    <th>Gost rasm</th>
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
