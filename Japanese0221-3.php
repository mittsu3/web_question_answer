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


        $questions_list=["１：コンテキスト",
        "２：コンセプト",
        "３：コントラスト",
        "４：コンプライアンス",
        "５：シナジー",
        "６：シニカル",
        "７：シメトリー",
        "８：ジレンマ",
        "９：ジェンダー",
        "１０：ジャーナリズム",
        "１１：シャーマニズム",
        "１２：シュールレアリスム",
        "１３：ジャンル",
        "１４：スタンス",
        "１５：ストイック",
        "１６：スローガン",
        "１７：ニヒリズム",
        "１８：ノスタルジー",
        "１９：ニュアンス",
        "２０：ダイナミズム"
        ];

        $answers_list=["１：文脈",
        "２：概念・意図・構想",
        "３：対照・対比",
        "４：法令遵守",
        "５：共同作用・相乗作用",
        "６：皮肉な態度",
        "７：左右対称",
        "８：板挟み",
        "９：社会的性差",
        "１０：報道活動の総称",
        "１１：巫者を中心とする信仰",
        "１２：超現実主義",
        "１３：種類・領域",
        "１４：立場・位置・態度",
        "１５：禁欲的",
        "１６：標語・宣伝文句",
        "１７：虚無主義",
        "１８：郷愁・懐かしい思い",
        "１９：微妙な意味合い",
        "２０：力強さ・迫力"
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
            $nums_question=array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19);
            shuffle($nums_question);
            $str_num='';
            foreach($nums_question as $num){
                $str_num=$str_num.$num.',';
            }
            return $str_num;
        }
            ?>
            <h1>日本語　カタカナ語３</h1>
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