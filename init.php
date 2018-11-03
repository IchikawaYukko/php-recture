<?php
/* こくばん 2018 Nov 03
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