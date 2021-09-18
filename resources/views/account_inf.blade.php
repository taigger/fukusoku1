@extends('layouts.fukusoku')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">アカウント情報</h1>
                    <p class="mb-4">アカウント情報です<a target="_blank"
                            href="https://datatables.net"></a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ユーザー名</th>
                                            <th>メールアドレス</th>
                                             <th>権限</th>
                                             <th>通知設定</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            @if($user->authority = 1)
                                            <td>オーナー</td>
                                            @elseif($user->authority = 2)
                                             <td>管理者</td>
                                            @elseif($user->authority = 3)
                                             <td>ユーザー</td>
                                             @endif
                                            <!--リレーション先のユーザーの名前をこれで表示可能です-->
                                            <td><button type="url" class="btn btn-success"><a href="" class="text-decoration-none text-white">通知設定</a></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

@endsection