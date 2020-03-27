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


        $questions_list=["１：オプティミズム",
        "２：ニヒリズム",
        "３：シニカル",
        "４：ナイーブ",
        "５：ストイック",
        "６：フェティシズム",
        "７：ニュートラル",
        "８：リベラル",
        "９：ラディカル",
        "１０：アナーキー",
        "１１：アナクロニズム",
        "１２：プリミティブ",
        "１３：エッセンス",
        "１４：コスモロジー",
        "１５：アカデミズム",
        "１６：ぺダンティック",
        "１７：シミュレーション ",
        "１８：フィードバック",
        "１９：コンセプト",
        "２０：プロローグ",
        "２１：カタストロフ",
        "２２：ダイナミズム",
        "２３：パトロン",
        "２４：シュールレアリスム"
        ];

        $answers_list=["１：楽観主義。楽観論",
        "２：虚無主義",
        "３：皮肉な。冷笑的な",
        "４：素直で傷つきやすい。無邪気な。素朴な",
        "５：禁欲的",
        "６：呪物崇拝。物神崇拝",
        "７：中立の。不偏不党の",
        "８：自由主義の。自由を重んじる。偏見のない",
        "９：過激な。急進的な。根本的な",
        "１０：無秩序なさま。無政府主義",
        "１１：時代錯誤",
        "１２：原始的。素朴なさま",
        "１３：本質。精髄",
        "１４：宇宙論",
        "１５：学問や芸術の純粋性・正統性を守ろうとする立場。学問の世界。",
        "１６：学識を誇示し、ひけらかすさま",
        "１７：仮想現実。模擬実験",
        "１８：結果を参考に、その原因を修正し、調整していくこと",
        "１９：概念。基本理念",
        "２０：序章。導入部",
        "２１：突然の大変動。破局",
        "２２：力強さ。運動の仕組み",
        "２３：経済的な支援者",
        "２４：超現実主義"
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