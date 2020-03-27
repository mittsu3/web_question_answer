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
			width: 250px;
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
			width: 250px;
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


        $questions_list=[
        "２１：露呈",
        "２２：啓示",
        "２３：風潮",
        "２４：鼓舞",
        "２５：錯誤",
        "２６：委嘱",
        "２７：紐帯",
        "２８：滋味",
        "２９：称揚",
        "３０：典拠"
        ];

        $answers_list=[
        "２１：隠れているものが外に表れ出ること",
        "２２：神が現し示すこと・諭し示すこと",
        "２３：時代によって移り変わる世の中の傾向",
        "２４：人の気を奮い立たせること",
        "２５：誤り・間違い",
        "２６：外部の人に仕事を任せ頼むこと",
        "２７：二つの物を結びつけるもの",
        "２８：物事の豊かな深い味わい",
        "２９：褒め称えること",
        "３０：言葉や文章の拠り所となる文献・出典"
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
			<h1>日本語　意味３</h1>
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