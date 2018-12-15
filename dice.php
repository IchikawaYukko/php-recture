<?php
// やること

// 要件定義(何を作るのか)
// 設計(どう作るのか、どう実装するのか)
// 実装
// デバッグ
// デプロイ(Webサーバにのっけること)

// 🎲 ⚀ ⚁ ⚂ ⚃ ⚄ ⚅  参考→　http://xahlee.info/comp/unicode_games_cards.html

//表示
echo "🎲 リロードでサイコロ振れるよ♪<br />";
//echo "<span style='font-size: 30pt;'>". dice() .'</span>';  // dice()関数を呼び出してサイコロを振る

$d = new Dice6();
$d->roll();
echo $d->get_result();

$d10 = new Dice10();
$d10->roll();
echo $d10->get_result();

class Dice {
    private $side;
    private $result;

    public function roll() {
        $this->result = rand(1, $this->side);
    }
    public function get_result() {  //数字
        return $this->result;
    }
}
//サイコロ表示を漢数字にしてみた
class Dice10 extends Dice {
    public function __construct() {
        $this->side = 10;
    }
    public function get_result_kansuji() {
        $resultbox = ['一', '二', '三'];
        // TODO 宿題 $resultbox[$n-1]; 
        //$this->result; //これを使わないといけない
        return $resultbox[$this->result-1];
    }
}
class LoadedDice extends Dice6_1 {  // 変調ダイス
    public function roll() {    // rollを上書きする
        // ここを作るだけ
        // rand() を使いましょう
        // rand()の結果を一旦何かに入れて、それから
        // ごにょごにょして、$this->resultに代入しましょう
        $a= rand(0,1);
        if($a == 0){
            $this->result = 0;
        }
        if else($a == 1) {
            $this->result = rand(1,5);
        }
    }
}
//Dice10だと、サイコロ表示がないとおもったため、Dice6にて課題を作成
class Dice6_1 extends Dice {
    public function roll() {
        $this->result = rand(0,5);
    }
    public function get_result() {
        $this->resultbox[$this->result];
    }
    private function result(){
        $resultbox = ['⚀','⚁','⚂','⚃','⚄','⚅'];
    }
}


/*class Dice6 extends Dice {
    public function roll($type = 6) {  // dice() 関数定義 (引数を省略した場合のデフォルト値は6)
        if($type == 6) {     // もし6面ダイスなら
            $this->result = rand(1, 6);   // 乱数を生成してサイコロをふる
        }
    }    
    public function get_result() {
        switch($this->result) {     // 条件分岐してUnicodeサイコロに変換
            case 1:
                return "⚀"; // Unicode サイコロを呼び出し元に返す
                break;
            case 2:
                return "⚁";
                break;
            case 3:
                return "⚂";
                break;
            case 4:
                return "⚃";
                break;
            case 5:
                return "⚄";
                break;
            case 6:
                return "⚅";
                break;
        }
    }
}*/
class LoadedDice extends Dice{

}
class Device {
    public function turn_on() {

    }
}

class PC extends Device {
    public function writeDVD() {

    }
}
class SmartPhone extends Device {
    public function shoot() {

    }
}