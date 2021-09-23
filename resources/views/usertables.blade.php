@extends('layouts.fukusoku')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">申請承認状況</h1>
                    <p class="mb-4">承認状況はこちらで把握できます<a target="_blank"
                            href="https://datatables.net"></a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <button type="url" class="btn btn-success"><a href="/newpost" class="text-decoration-none text-white">新規申請</a></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>申請日</th>
                                            <th>申請者名</th>
                                            <th>会社名</th>
                                            <th>業種</th>
                                            <th>業務内容</th>
                                            <th>時期</th>
                                            <th>労働時間(月間)</th>
                                            <th>承認状況</th>
                                            <th>コメント</th>
                                             <th>削除</th>
                                        </tr>
                                    </thead>
                                    <!--<tfoot>-->
                                    <!--    <tr>-->
                                    <!--        <th>申請日</th>-->
                                    <!--        <th>申請者名</th>-->
                                    <!--        <th>会社名</th>-->
                                    <!--        <th>業種</th>-->
                                    <!--        <th>業務内容</th>-->
                                    <!--        <th>時期</th>-->
                                    <!--        <th>労働時間(月間h)</th>-->
                                    <!--        <th>承認状況</th>-->
                                    <!--    </tr>-->
                                    <!--</tfoot>-->
                                    <tbody>
                                         @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->created_at}}</td>
                                            <!--リレーション先のユーザーの名前をこれで表示可能です-->
                                            <td>{{$post->user->name}}</td>
                                            <td>{{$post->fukugyo_company}}</td>
                                            <td>{{$post->fukugyo_industry}}</td>
                                            <td>{{$post->fukugyo_naiyou}}</td>
                                            <td>{{$post->subbmit_month}}</td>
                                            <td>{{$post->fukugyo_time}}</td>
                                            <td>{{$post->status}}</td>
                                            <td>{{$post->comment}}</td>
                                            <td><button type="url" class="btn btn-danger active" data-bs-toggle="button" autocomplete="off" aria-pressed="true"><a href="destroy/{{$post->id}}" class="text-decoration-none text-white">削除</a></button></td>
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