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

class Dice {
    public function roll() {
    }
    public function get_result() {

    }
    private $result;//1,2,3,4,5,6
}

class Dice10 extends Dice {

}

class Dice6 extends Dice {
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
}
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