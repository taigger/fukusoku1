@extends('layouts.fukusoku')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">企業一覧</h1>
                    <p class="mb-4">登録されている企業一覧です<a target="_blank"
                            href="https://datatables.net"></a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <button type="url" class="btn btn-success"><a href="/registercompany" class="text-decoration-none text-white">新規企業登録</a></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>企業名</th>
                                            <th>アカウント数</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($companys as $company)
                                        <tr>
                                            <td>{{$company->company}}</td>
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