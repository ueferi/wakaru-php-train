<?php

// じゃんけんの手
// 0: グー
// 1: チョキ
// 2: パー
// として処理する

$hand = ['ぐー', 'ちょき', 'ぱー']; //表示用配列
$comSelect = rand(0, 2); //CPUの手を取得
$playerSelect = intval($_REQUEST['hand']);
//表示作成
echo '<p>あなた:', $hand[$playerSelect], '</p>';
echo '<p>コンピュータ:', $hand[$comSelect], '</p>';

// 勝ち負けは（プレイヤーが）
// 0: 負け
// 1: 勝ち
// 2: あいこ

if ($playerSelect == $comSelect) {
    // 一緒だったらあいこ
    //return 2;
    echo 'あいこ';
} else {
    // 違うので条件によって勝敗を振り分ける
    if ($playerSelect == 0) {
        // プレイヤーはグー
        if ($comSelect == 1) {
            // コンピューターはチョキ
            //return 1; 
            echo '勝ち';
        } else {
            // コンピューターはパー
            //return 0; 
            echo '負け';
        }
    } else if ($playerSelect == 1) {
        // プレイヤーはチョキ
        if ($comSelect == 0) {
            // コンピューターはグー
            //return 0; 
            echo '負け';
        } else {
            // コンピューターはパー
            //return 1; 
            echo '勝ち';
        }
    } else {
        // プレイヤーはパー
        if ($comSelect == 0) {
            // コンピューターはグー
            //return 1; 
            echo '勝ち';
        } else {
            // コンピューターはチョキ
            //return 0; 
            echo '負け';
        }
    }
}
