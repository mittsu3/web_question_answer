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
        "１０：勘案"
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
        "１０：あれこれ考え合わせること"
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
function chooseNumber() {
    $num=rand(0, 9);
    return $num;
}
	?>
	<h1>日本語　入試頻出語句　意味１～４</h1>
	<h2>語句</h2>
    <?php
        $num = chooseNumber();
        outputQuestion($num,$questions_list);
        outputAnswer($num,$answers_list);
    ?>
	
	<div class="form-conf">
        <form method="POST" action="menu.html">
			<input class="button_menu" type="submit" value="menu" name="sub3">
		</form>

		<form method="POST" action="Japanese0220-1.php">
			<input class="button" type="submit" value="next" name="sub2">
		</form>
	</div>
</body>