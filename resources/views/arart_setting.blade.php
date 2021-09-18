@extends('layouts.fukusoku')

@section('content')


 <div class="container-fluid">

                    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">アラート設定</h1>
    <p class="mb-4">アラートの設定はこちらから。労働時間の変更は本部に連絡ください</p>
     <h5 class="mb-4">定義</p>
     <p class="mb-4">A　基準時間内かつリスク業種外</p>
     <p class="mb-4">B　基準時間超過またはリスク業種</p>
     <p class="mb-4">C　基準時間超過かつリスク業種</p>

     <div class='w-100 bg-white mt-4 mb-4'>
            <!--<div class="row">-->
                <!--<div class="form-group mb-3 ml-2 mr-2 col">-->
                <!--    <label for="exampleFormControlInput1">副業先業種</label>-->
                <!--    <select name="ng_industry" multiple="multiple">-->
                <!--        <option value="">選択してください</option>-->
                <!--        <optgroup label="製造業">-->
                <!--            <option type="checkbox" value="電機・電子・機械">電機・電子・機械</option>-->
                <!--            <option value="建築・設備・工事業">建築・設備・工事業</option>-->
                <!--            <option value="化学・製薬">化学・製薬</option>-->
                <!--            <option value="繊維・素材">繊維・素材</option>-->
                <!--            <option value="印刷・出版業">建印刷・出版業</option>-->
                <!--            <option value="農林水産業">農林水産業</option>-->
                <!--            <option value="食品">食品</option>-->
                <!--            <option value="その他の製造業">その他の製造業</option>-->
                <!--        </optgroup>-->
                <!--        <optgroup label="物流・通信業">-->
                <!--            <option value="IT・情報通信業">IT・情報通信業</option>-->
                <!--            <option value="電気・ガス・水道業">水道業</option>-->
                <!--            <option value="運輸･物流">運輸･物流</option>-->
                <!--            <option value="卸売・小売">卸売・小売</option>-->
                <!--            <option value="その他の物流・通信業">その他の物流・通信業</option>-->
                <!--        </optgroup>-->
                <!--        <optgroup label="金融・保険・不動産業">-->
                <!--            <option value="銀行・信託・金融業">銀行・信託・金融業</option>-->
                <!--            <option value="投資業">投資業</option>-->
                <!--            <option value="証券・商品取引">証券・商品取引</option>-->
                <!--            <option value="不動産取引業">不動産取引業</option>-->
                <!--            <option value="不動産賃貸業">不動産賃貸業</option>-->
                <!--            <option value="その他の金融・保険・不動産業">その他の金融・保険・不動産業</option>-->
                <!--        </optgroup>-->
                <!--        <optgroup label="サービス業">-->
                <!--            <option value="ホテル・旅館">ホテル・旅館</option>-->
                <!--            <option value="飲食">飲食</option>-->
                <!--            <option value="娯楽">娯楽</option>-->
                <!--            <option value="美容・理容業">美容・理容業</option>-->
                <!--            <option value="病院・医療・ヘルスケア">病院・医療・ヘルスケア</option>-->
                <!--            <option value="教育・研究・学会">教育・研究・学会</option>-->
                <!--            <option value="その他のサービス業">その他のサービス業</option>-->
                <!--        </optgroup>-->
                <!--        <optgroup label="各種団体">-->
                <!--            <option value="官公庁･政府機関･公益法人">官公庁･政府機関･公益法人</option>-->
                <!--            <option value="法人団体">法人団体</option>-->
                <!--            <option value="自治体">自治体</option>-->
                <!--            <option value="その他の団体">その他の団体</option>-->
                <!--        </optgroup>-->
                <!--        <option value="その他の業種">その他の業種</option>-->
                <!--        </select>-->
                <!--         <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>-->
                <!--            <script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>-->
                <!--            <script>-->
                <!--              $(function () {-->
                <!--                $('select').multipleSelect()-->
                <!--              })-->
                <!--        </script>-->
                <!--  </div>-->
            <!--    <div class="form-group mb-3 ml-2 mr-2 col">-->
            <!--    <label for="exampleFormControlInput1">月間労働時間</label>-->
            <!--    <input type="number" class="" id="exampleFormControlInput1" placeholder="" maxlength="30" name="ng_time">-->
            <!--    <label class="mt-2">時間</label>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="row">-->
         <form action="{{ url('/arart') }}" method="POST">
            @csrf
            <div>
                <h3>基準労働時間</h3>
                <input type="number" class="form-control-w50" name="ng_time" value="{{$default_time}}">時間/月</p>
            </div>
            <div>
                <h3 class="mt-3">リスク業種指定</h3>
                <div style="font-size:13px;">
                <h5 class="mt-3">製造業</h5>
                <div class="row">
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="電機・電子・機械" name="ng_industry">電機・電子・機械</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="建築・設備・工事業" name="ng_industry">建築・設備・工事業</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="化学・製薬" name="ng_industry">化学・製薬</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="繊維・素材" name="ng_industry">繊維・素材</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="印刷・出版業" name="ng_industry">印刷・出版業</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="農林水産業" name="ng_industry">農林水産業</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="食品" name="ng_industry">食品</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="その他の製造業" name="ng_industry">その他の製造業</option>
                </div>
                <h5 class="mt-3">物流・通信業</h5>
                <div class="row">
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="IT・情報通信業" name="ng_industry">IT・情報通信業</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="電気・ガス・水道業" name="ng_industry">水道業</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="運輸･物流" name="ng_industry">運輸･物流</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="卸売・小売" name="ng_industry">卸売・小売</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="その他の物流・通信業" name="ng_industry">その他の物流・通信業</option>
                </div>
                 <h5 class="mt-3">金融・保険・不動産</h5>
                 <div class="row"> 
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="銀行・信託・金融業" name="ng_industry">銀行・信託・金融業</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="投資業" name="ng_industry">投資業</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="証券・商品取引" name="ng_industry">証券・商品取引</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="不動産取引業" name="ng_industry">不動産取引業</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="不動産賃貸業" name="ng_industry">不動産賃貸業</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="その他の金融・保険・不動産業" name="ng_industry">その他の金融・保険・不動産業</option>
                </div>
                <h5 class="mt-3">サービス業</h5>
                <div class="row">
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="ホテル・旅館" name="ng_industry">ホテル・旅館</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="飲食" name="ng_industry">飲食</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="娯楽" name="ng_industry">娯楽</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="美容・理容業" name="ng_industry">美容・理容業</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="病院・医療・ヘルスケア" name="ng_industry">病院・医療・ヘルスケア</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="教育・研究・学会" name="ng_industry">教育・研究・学会</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="その他のサービス業" name="ng_industry">その他のサービス業</option>
                </div>
                <h5 class="mt-3">各種団体</h5>
                <div class="row">
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="官公庁･政府機関･公益法人" name="ng_industry">官公庁･政府機関</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="法人団体" name="ng_industry">法人団体</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="自治体" name="ng_industry">自治体</option>
                    <button type="submit" class="btn btn-md btn-outline-primary mr-2 col" value="その他団体" name="ng_industry">その他団体</option>
                </div>
            </div>
        </form>
    </div>
     <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NG産業</th>
                        <th>削除</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($ararts as $arart)
                    <tr>
                        <td>{{$arart->ng_industry}}</td>
                        <!--リレーション先のユーザーの名前をこれで表示可能です-->
                        <td><button type="url" class="btn btn-danger active" data-bs-toggle="button" autocomplete="off" aria-pressed="true"><a href="arartdestroy/{{$arart->id}}" class="text-decoration-none text-white">削除</a></button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection