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


        $questions_list=["１：髣髴",
        "２：鷹揚",
        "３：具現化",
        "４：補填",
        "５：矛盾",
        "６：傾倒",
        "７：中庸",
        "８：肝要",
        "９：徒に",
        "１０：夭折"
        ];

        $answers_list=["１：よく似ているさま・ありありと思い浮かぶさま",
        "２：ゆったりと落ち着いていること",
        "３：実際の形になって現れること",
        "４：不足を補うこと",
        "５：二つの事柄のつじつまが合わないこと",
        "６：ある人や物事に心を傾けて熱中すること",
        "７：偏りがなく常に変わらないこと",
        "８：非常に大切なこと",
        "９：無駄に・虚しく",
        "１０：年が若くて死ぬこと"
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
			$nums_question=array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
			shuffle($nums_question);
			$str_num='';
			foreach($nums_question as $num){
				$str_num=$str_num.$num.',';
			}
			return $str_num;
		}
			?>
			<h1>日本語　意味５</h1>
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