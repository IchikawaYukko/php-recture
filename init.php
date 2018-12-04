<?php
/* こくばん 2018 Nov 09

機械
*自動販売機
*掃除機

生物
*人間
*ゴキブリ

クラスとは：設計図
*状態
*動作

自販機クラスの説明
--状態--
投入金額
在庫状況
在庫の種類
釣り銭の在庫

--動作--
お金を入れる()
欲しいもののボタンを押す()
取り消し()
商品を取り出す()
補充する()

クラスの作り方 */
class クラスの名前 {
    //クラスの中身
    //状態
    private function $名前;

    //動作の作り方
    public function 名前 {

    }
}

class VendingMachine{
    private $投入金額; //130
    private $ポカリ; //10
    private $コーラ; //10
    private $ビール; //10
    private const 単価 = 120;

    public function 投入($money){
        $this->投入金額 += $money;
    }
    public function 買う($product) {    // $product = 'ポカリ'
        if($投入金額 >= 単価) {
            //おつりを返す
            // 釣り銭を計算する
            // 釣り銭を払う
            //商品を出す
            // 在庫を-1する
            // 商品を出す

            $投入金額-単価;
            echo 釣銭;
            echo $product;
            $product
            
        } else {
            //何もしない
        }
    }
}
/*
こくばん 2018 Nov 03
今日の開始時間19:10
終了予定 20:40
時差忘れてた

やること
* レベル確認 [DONE]
* サイコロを作る？ (次回つづき)
* オブジェクト指向入門のさわり (次回)

phpの終了タグ ?> は省略しましょう
https://thesaibase.com/php/end-tag

*/

// ↓ for, if, while, switch

// if
if($i<10){    
    $i++;
}

// ↓ for
for($i=1;$i<10;$i++){
    echo $i;
}

// foreach()
//foreach( $key as $value){
foreach($ary as $key => $value) {

}

foreach($ary as $value) {

}

// switch
$1 = 10;
switch($hoge){
    case 0:
        $i++;
        break;
    case 1:
        $i--
        break;
    case 'piyo':            //$hoge = 'piyo'
        do_something();
        break;
}

if($hoge == 0) {
    $1++;
} else if($hoge == 1) {
    $i--;
}

while(true) {
    //無限ループ
    if() {
        break;
    }
}

end();