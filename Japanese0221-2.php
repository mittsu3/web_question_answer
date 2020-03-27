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


        $questions_list=["１：エゴ",
        "２：エレメント",
        "３：エコノミー",
        "４：エコロジー",
        "５：エスプリ",
        "６：オーソリティー",
        "７：オプチミスト",
        "８：カオス",
        "９：カスタマー",
        "１０：カタルシス",
        "１１：カテゴリー",
        "１２：カリスマ",
        "１３：グローバル",
        "１４：コスモス",
        "１５：コネクション",
        "１６：コミュニティ",
        "１７：コモンセンス",
        "１８：コロニアル",
        "１９：コンサバティブ",
        "２０：コンセンサス"
        ];

        $answers_list=["１：自己・自我",
        "２：要素・成分・化学元素",
        "３：倹約・経済的",
        "４：生態学",
        "５：機智",
        "６：その分野の第一人者・権威",
        "７：楽天家・楽観主義者",
        "８：混沌・無秩序",
        "９：顧客・得意先",
        "１０：精神的な解放感",
        "１１：範疇・尺度",
        "１２：人に支持される強い魅力",
        "１３：国家間を超えた地球規模",
        "１４：宇宙",
        "１５：縁故・つながり",
        "１６：人々のつながり",
        "１７：常識・良識",
        "１８：植民地風の",
        "１９：保守的な・保守層",
        "２０：合意・同意"
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
            <h1>日本語　カタカナ語２</h1>
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