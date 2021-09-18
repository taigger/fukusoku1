@extends('layouts.fukusoku')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">申請一覧</h1>
                    <p class="mb-4">未承認のものは精査のうえ承認お願いします。アラートはCが最もリスク高です。<br>承認はボタンを押すと取り消せませんので注意してください。<a target="_blank"
                            href="https://datatables.net"></a>.</p>
                       @if(Auth::user()->authority != 3)
                        <div class="nav-item">
                            <a class="nav-link" href="/usertables">
                                <span>個人申請一覧</span></a>
                        </div>
                        @endif
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <!--<div class="card-header py-3">-->
                        <!--    <button type="url" class="btn btn-success"><a href="/registercompany" class="text-decoration-none text-white">新規申請</a></button>-->
                        <!--</div>-->
                        <div class="card-body">
                            <div class="table-responsive" style="font-size:12px;">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>申請日時</th>
                                            <th>申請者名</th>
                                            <th>会社名</th>
                                            <th>業種</th>
                                            <th>業務内容</th>
                                            <th>時期</th>
                                            <th>労働時間(月間)</th>
                                            <th>アラート</th>
                                        　  <th>ステータス</th>
                                        　  <th>承認/差戻し</th>
                                            <th>コメント</th>
                                            <th>送信ボタン</th>
                                                
                                             
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>申請日時</th>
                                            <th>申請者名</th>
                                            <th>会社名</th>
                                            <th>業種</th>
                                            <th>業務内容</th>
                                            <th>時期</th>
                                            <th>労働時間(月間h)</th>
                                            <th>アラート</th>
                                            <th>ステータス</th>
                                             <th>承認/差戻し</th>
                                             <th>コメント</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                         @foreach($posts as $post)
                                        <tr>
                                            <form action="{{ url('/approve/'.$post->id)}}" method="POST">
                                            @csrf
                                            <td>{{$post->created_at}}</td>
                                            <!--リレーション先のユーザーの名前をこれで表示可能です-->
                                            <td>{{$post->user->name}}</td>
                                            <td>{{$post->fukugyo_company}}</td>
                                            <td>{{$post->fukugyo_industry}}</td>
                                            <td>{{$post->fukugyo_naiyou}}</td>
                                            <td>{{$post->subbmit_month}}</td>
                                            <td>{{$post->fukugyo_time}}</td>
                                         
                                            <td>{{$post->judge}}</td>
                                            <td>{{$post->status}}</td>
                                            <td>
                                                <select class="form-select" name='status'>
                                                    <option value="承認済">承認</option>
                                                    <option value="差戻し">差戻し</option>
                                                </select>
                                            </td>
                                            <td><textarea></textarea></td>
                                            <td>
                                          
                                             <button type="submit" class="btn btn-primary active" data-bs-toggle="button" autocomplete="off" aria-pressed="true">送信</button>
                                   \
                                            <!--@if($post->status =='承認')-->
                                            <!--<button type="submit" class="btn btn-primary active" data-bs-toggle="button" autocomplete="off" aria-pressed="true" name="approve">承認済</button>-->
                                            <!--@else($post->status =='未承認')-->
                                            <!--<button type="submit" class="btn btn-warning active" data-bs-toggle="button" autocomplete="off" aria-pressed="true" name="approve">承認する</button>-->
                                            <!--@endif-->
                                           
                                            </td>
                                            </form>
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