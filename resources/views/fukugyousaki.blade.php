@extends('layouts.fukusoku')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">副業先一覧</h1>
                    <p class="mb-4">登録されている副業先です<a target="_blank"
                            href="https://datatables.net"></a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <form action="{{ url('/fukugyousakis') }}" method="POST">
                                @csrf
                              <div class="form-group">
                                <label for="exampleInputEmail1">副業先登録　※正式名称で登録お願いします。　（例）フクソク株式会社</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="副業企業名" name=fukugyousaki>
                              </div>
                            <button type="submit" class="btn btn-success">登録</button>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>副業先名</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($fukugyousakis as $fukugyousaki)
                                        <tr>
                                            <td>{{$fukugyousaki->fukugyousaki}}</td>
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