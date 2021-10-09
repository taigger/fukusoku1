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
                              <div class="form-group">
                                <label for="exampleInputEmail1">業種登録</label>
                               <select class="form-control" name="gyousyu">
                    <option value="">選択してください</option>
                    <optgroup label="製造業">
                        <option value="電機・電子・機械">電機・電子・機械</option>
                        <option value="建築・設備・工事業">建築・設備・工事業</option>
                        <option value="化学・製薬">化学・製薬</option>
                        <option value="繊維・素材">繊維・素材</option>
                        <option value="印刷・出版業">建印刷・出版業</option>
                        <option value="農林水産業">農林水産業</option>
                        <option value="食品">食品</option>
                        <option value="その他の製造業">その他の製造業</option>
                    </optgroup>
                    <optgroup label="物流・通信業">
                        <option value="IT・情報通信業">IT・情報通信業</option>
                        <option value="電気・ガス・水道業">水道業</option>
                        <option value="運輸･物流">運輸･物流</option>
                        <option value="卸売・小売">卸売・小売</option>
                        <option value="その他の物流・通信業">その他の物流・通信業</option>
                    </optgroup>
                    <optgroup label="金融・保険・不動産業">
                        <option value="銀行・信託・金融業">銀行・信託・金融業</option>
                        <option value="投資業">投資業</option>
                        <option value="証券・商品取引">証券・商品取引</option>
                        <option value="不動産取引業">不動産取引業</option>
                        <option value="不動産賃貸業">不動産賃貸業</option>
                        <option value="その他の金融・保険・不動産業">その他の金融・保険・不動産業</option>
                    </optgroup>
                    <optgroup label="サービス業">
                        <option value="ホテル・旅館">ホテル・旅館</option>
                        <option value="飲食">飲食</option>
                        <option value="娯楽">娯楽</option>
                        <option value="美容・理容業">美容・理容業</option>
                        <option value="病院・医療・ヘルスケア">病院・医療・ヘルスケア</option>
                        <option value="教育・研究・学会">教育・研究・学会</option>
                        <option value="その他のサービス業">その他のサービス業</option>
                    </optgroup>
                    <optgroup label="各種団体">
                        <option value="官公庁･政府機関･公益法人">官公庁･政府機関･公益法人</option>
                        <option value="法人団体">法人団体</option>
                        <option value="自治体">自治体</option>
                        <option value="その他の団体">その他の団体</option>
                    </optgroup>
                    <option value="その他の業種">その他の業種</option>
                    </select>
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
                                             <th>業種</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($fukugyousakis as $fukugyousaki)
                                        <tr>
                                            <td>{{$fukugyousaki->fukugyousaki}}</td>
                                            <!--リレーション先のユーザーの名前をこれで表示可能です-->
                                            <td>{{$fukugyousaki->gyousyu}}</td>
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