<?php
class Dice {
    protected $side;
    protected $result;

    public function roll() {
        $this->result = rand(1, $this->side);
        //var_dump($this->result);
        //var_dump($this->side);
    }

    public function get_result() {  //数字
        return $this->result;
    }

    /*private function set_side($side) {
        $this->side = $side;
    }*/
}

//サイコロ表示を漢数字にしてみた
class Dice10 extends Dice {
    public function __construct() {
        $this->side = 10;
    }
    public function get_result_kansuji() {
        $resultbox = ['一', '二', '三'];
        return $resultbox[$this->result-1];
    }
}

class LoadedDice extends Dice6 {  // 変調ダイス
    public function roll() {    // rollを上書きする
        if(0 == rand(0,1)){
            $this->result = 0;
        } else {
            $this->result = rand(1,5);
            var_dump($this->result);
        }
    }
}

//Dice10だと、サイコロ表示がないとおもったため、Dice6にて課題を作成
class Dice6 extends Dice {
    private $resultbox;
    
    public function __construct() {
        $this->side = 6;
        $this->resultbox = ['⚀','⚁','⚂','⚃','⚄','⚅'];
    }
    public function get_result_icon() {
        //var_dump($this->resultbox);
        //var_dump($this->result - 1);
        return $this->resultbox[$this->result - 1];
    }
}
// 🎲 ⚀ ⚁ ⚂ ⚃ ⚄ ⚅  参考→　http://xahlee.info/comp/unicode_games_cards.html

//表示
echo "🎲 リロードでサイコロ振れるよ♪<br />";
//echo "<span style='font-size: 30pt;'>". dice() .'</span>';  // dice()関数を呼び出してサイコロを振る

$d = new Dice6();
$d->roll();
echo 'Dice6'.$d->get_result_icon();

$d10 = new Dice10();
$d10->roll();
echo 'Dice10:'.$d10->get_result();

$loaded = new LoadedDice();
$loaded->roll();
echo 'Loaded:'.$loaded->get_result_icon();