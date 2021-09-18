@extends('layouts.fukusoku')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">組織一覧</h1>
                    <p class="mb-4">登録されている組織一覧です<a target="_blank"
                            href="https://datatables.net"></a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                             <div class="nav-item">
                                    <a class="nav-link" href="/showarart">
                                <span>リスク基準設定</span></a>
                            </div>
                            <form action="{{ url('/organizations') }}" method="POST">
                                @csrf
                              <div class="form-group">
                                <label for="exampleInputEmail1">組織登録</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="部署名" name=organization>
                              </div>
                            <button type="submit" class="btn btn-success">登録</button>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>組織名</th>
                                            <th>アカウント数</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($organizations as $organization)
                                        <tr>
                                            <td>{{$organization->organization}}</td>
                                            <!--リレーション先のユーザーの名前をこれで表示可能です-->
                                            <td></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@endsection