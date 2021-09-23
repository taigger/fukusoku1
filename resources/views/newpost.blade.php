@extends('layouts.fukusoku')

@section('content')

 <div class="container-fluid">

                    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">新規申請</h1>
    <p class="mb-4">副業の新規申請はこちらから</p>
    
    <div class='w-100 bg-white mt-2'>

        <form action="{{ url('/newpost') }}" method="POST">
            @csrf
            <div class="form-row mt-2">
              <div class="form-group mb-3 ml-2 mr-2 col">
                <label for="exampleFormControlInput1">副業先会社名</label>
                            <select class="form-control" name="fukugyo_company" maxlength="30">
                                @foreach($fukugyousakis as $fukugyousaki)
                                <option value="{{$fukugyousaki->fukugyousaki}}">{{$fukugyousaki->fukugyousaki}}({{$fukugyousaki->gyousyu}})</option>
                                @endforeach
                            </select>
              </div>
              <div class="form-group mb-3 ml-2 mr-2 col">
                <label for="exampleFormControlInput1">副業先業種</label>
                <select class="form-control" name="fukugyo_industry">
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
            </div>
            <div>
                <div class="form-group mb-3 ml-2 mr-2">
                    <label for="exampleFormControlInput1">業務内容(30字以内)</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="（例）SNSマーケティング支援" maxlength="30" name="fukugyo_naiyou">
                </div>
            </div>
            <div class="form-row mt-2">
              <div class="form-group mb-3 ml-2 mr-2 col">
                <label for="exampleFormControlInput1">業務発生時期</label>
                <input type="month" class="form-control" id="exampleFormControlInput1" placeholder="（例）〇〇株式会社" maxlength="30" name="subbmit_month">
              </div>
              <div class="form-group mb-3 ml-2 mr-2 col">
                <label for="exampleFormControlInput1">労働時間（申請する月の労働時間）</label>
                <div class="form-group row">
                    <div class="col">
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" maxlength="30" name="fukugyo_time">
                    </div>
                    <label class="col mt-2">時間</label>
                </div>
              </div>
            </div>  
            <button type="submit" class="btn btn-primary mt-2 ml-2 mr-2">申請</button>
        </form>
        
      
    </div>
    
</div>


@endsection
