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


        $questions_list=["１：啓蒙",
        "２：遺憾なく",
        "３：常軌を逸して",
        "４：包摂",
        "５：歴然",
        "６：準拠",
        "７：婉曲",
        "８：膾炙",
        "９：踏襲",
        "１０：勘案",
        "１１：添削",
        "１２：含蓄に富む",
        "１３：癒着",
        "１４：福音",
        "１５：帰納",
        "１６：批准",
        "１７：吐露",
        "１８：虚心",
        "１９：薫陶",
        "２０：炯眼",
        "２１：露呈",
        "２２：啓示",
        "２３：風潮",
        "２４：鼓舞",
        "２５：錯誤",
        "２６：委嘱",
        "２７：紐帯",
        "２８：滋味",
        "２９：称揚",
        "３０：典拠",
        "３１：忖度",
        "３２：彫琢",
        "３３：通底",
        "３４：割愛",
        "３５：釈然",
        "３６：騰貴",
        "３７：及第",
        "３８：反芻",
        "３９：看破",
        "４０：吟味"
        ];

        $answers_list=["１：無知な人を啓発して教え導くこと",
        "２：申し分なく・十分に",
        "３：常識外れの行動をとる",
        "４：ある事柄を一定の範囲内に包み込むこと",
        "５：ありありとして明白なさま",
        "６：拠り所として従うこと",
        "７：はっきりと表現せず遠まわしに言うさま",
        "８：広く知れ渡っていること",
        "９：それまでのやり方を受け継ぐこと",
        "１０：あれこれ考え合わせること",
        "１１：文章などを改め直すこと",
        "１２：深い意味が含まれていること",
        "１３：本来関係あるべきでない者同士が手を結ぶこと",
        "１４：喜ばしい知らせ",
        "１５：個々の具体的な事実から一般的な法則を導き出すこと",
        "１６：条約を確認し同意すること",
        "１７：思いを隠さず述べること",
        "１８：わだかまりのない心・素直な心",
        "１９：優れた徳で人を感化し影響を与えること",
        "２０：眼力が鋭いこと・洞察力が優れていること",
        "２１：隠れているものが外に表れ出ること",
        "２２：神が現し示すこと・諭し示すこと",
        "２３：時代によって移り変わる世の中の傾向",
        "２４：人の気を奮い立たせること",
        "２５：誤り・間違い",
        "２６：外部の人に仕事を任せ頼むこと",
        "２７：二つの物を結びつけるもの",
        "２８：物事の豊かな深い味わい",
        "２９：褒め称えること",
        "３０：言葉や文章の拠り所となる文献・出典",
        "３１：他人の心中を推し量ること",
        "３２：文章に磨きを掛けること",
        "３３：二つ以上の事柄が基底の部分で共通性を持っていること",
        "３４：惜しいと思う物を思い切って省いたり手放したりすること",
        "３５：疑いや恨みが解けてすっきりするさま",
        "３６：物価や相場が上がること",
        "３７：試験に合格すること",
        "３８：何度も繰り返して考え味わうこと",
        "３９：隠れていることを見破ること",
        "４０：物事を詳しく調べて選ぶこと"
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
            $nums_question=array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39);
            shuffle($nums_question);
            $str_num='';
            foreach($nums_question as $num){
                $str_num=$str_num.$num.',';
            }
            return $str_num;
        }
            ?>
            <h1>日本語　総まとめ</h1>
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