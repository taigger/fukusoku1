@extends('layouts.fukusoku')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">ユーザー一覧</h1>
                    <p class="mb-4">登録されているユーザーの一覧です。<br>新規登録はボタンからお願いします。<a target="_blank"
                            href="https://datatables.net"></a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <button type="url" class="btn btn-success"><a href="/userregister" class="text-decoration-none text-white">新規ユーザー登録</a></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ユーザー名</th>
                                            <th>所属</th>
                                            <th>メールアドレス</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <!--リレーション先のユーザーの名前をこれで表示可能です-->
                                            <td>{{$user->organization}}</td>
                                            <td>{{$user->email}}</td>
                                            </td>
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