<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes">
	<style>
		h1 {
			color: red;
			text-align: center;
		}
		p.questionTitle {
			font-size: 30px;
			text-align: center;
            max-width: 100%;
            max-height: 10vw;
		}
		p.answerTitle {
			font-size: 30px;
			text-align: center;
            max-width: 100%;
            max-height: 10vw;
		}
        p.question{
            text-align: center;
            font-size: 35px;
            max-width: 100%;
            max-height: 10vw;
        }
        p.answer{
            text-align: center;
            color: red;
            font-size: 35px;
            max-width: 100%;
            max-height: 40vw;
        }
		p.TorF {
			font-size: 100px;
			color: red;
			margin-top: -110px;
			text-align: center;
		}
		h2 {
			text-align: center;
		}
		.button {
			display: block;
			width: 30vw;
			height: 70px;
			line-height: 70px;
			color: #FFF;
			text-decoration: none;
			background-color: #f39800;
			border-radius: 5px;
			-webkit-transition: all 0.5s;
			transition: all 0.5s;
            position: absolute;
            bottom: 5vw;
            left: 50%;
            right: 0;
            margin: auto;
		}
        .button_menu {
			display: block;
			width: 30vw;
			height: 70px;
			line-height: 70px;
			color: #FFF;
			text-decoration: none;
			background-color: #f39800;
			border-radius: 5px;
			-webkit-transition: all 0.5s;
			transition: all 0.5s;
            position: absolute;
            bottom: 5vw;
            left: 0;
            right: 50%;
            margin: auto;
		}
		.button:hover {
			background-color: #f9c500;
		}
		.form-conf {
			text-align: center;
		}
		.form-conf form {
			display: inline-block;
			margin: 0 10px;
		}
		p.description {
			text-align: center;
			font-size: 30px;
		}
        p {
            max-height: 20vw;
            max-width: 20vw;
        }
	</style>
</head>

<body>
	<?php


        $questions_list=["１：エクリチュール",
        "２：メディア・リテラシー",
        "３：モード",
        "４：ダブル・スタンダード",
        "５：クレオール",
        "６：ノスタルジー",
        "７：パトス",
        "８：エートス",
        "９：トポス",
        "１０：アプリオリ",
        "１１：アンチテーゼ",
        "１２：アポリア",
        "１３：コミュニティ",
        "１４：ローカル",
        "１５：マクロ",
        "１６：インフラストラクチャー",
        "１７：ヒエラルキー",
        "１８：ユートピア",
        "１９：エスニシティ",
        "２０：ジェンダー",
        "２１：セクシュアリティ",
        "２２：ボーダーレス",
        "２３：バイアス",
        "２４：モラトリアム"
        ];

        $answers_list=["１：書くこと。書かれたもの",
        "２：メディアの情報を識別し、活用する能力",
        "３：方法。状態。流行",
        "４：二重基準",
        "５：母語として用いられる混成語",
        "６：郷愁。懐古趣味",
        "７：感情。情念。情熱",
        "８：性格。気風",
        "９：場所。場",
        "１０：経験に先立って。先験的。先天的",
        "１１：反対命題。反措定",
        "１２：解決できない難問",
        "１３：共同体。地域社会",
        "１４：地元の。局所的な",
        "１５：巨視的な。大きな",
        "１６：社会生活の基盤となる施設。インフラ。",
        "１７：階層秩序",
        "１８：理想郷",
        "１９：言語・文化を共有する集団への帰属意識。民族性。",
        "２０：社会的・文化的につくられた性別や性差",
        "２１：人間の性のあり方の総称。セクシャリティ",
        "２２：境界がないこと。国境がないこと",
        "２３：先入観。偏見。バイヤス",
        "２４：（物事の遂行や支払いの）猶予"
        ];

		function outputQuestion($num,$question){
			?><p class="question"><?php echo $question[$num]; ?></p>
<?php
		}
		function outputAnswer($num,$answer){
            ?><p class="answer"><?php echo $answer[$num]; ?>
            <br><br><b></p>
<?php
		}
        function reset_num($questions_list){
            $num_max=count($questions_list);
            $nums_question=array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19,20,21,22,23);
            shuffle($nums_question);
            $str_num='';
            foreach($nums_question as $num){
                $str_num=$str_num.$num.',';
            }
            return $str_num;
        }
            ?>
            <h1>日本語　外来語</h1>
            <h2>語句</h2>
            <?php
                $str_num=$_POST["nums_question"];
                $num_qu = $_POST["num"];
                if (is_null($num_qu)){
                    $str_num = reset_num($questions_list);
                    $num_qu = 0;
                }
                $num_qu+=1;
                if ($num_qu>=count($questions_list)){
                    $str_num = reset_num($questions_list);
                    $num_qu = 0;
                }
                $nums_question=explode(',', $str_num);
                $num = array_search((string)$num_qu , $nums_question);
        
                outputQuestion($num,$questions_list);
                outputAnswer($num,$answers_list);
            ?>
            
            <div class="form-conf">
                <form method="POST" action="menu.html">        
                    <input class="button_menu" type="submit" value="menu" name="sub3">
                </form>
        
                <form method="POST" action="#">
                    <input type="hidden" name="nums_question" value="<?php echo $str_num; ?>">
                    <input type="hidden" name="num" value="<?php echo $num_qu; ?>">
                    <input class="button" type="submit" value="next" name="sub2">
                </form>
            </div>
        </body>