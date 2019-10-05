<?php

var_dump($_POST);

//最初に変数を定義しておかないとエラーになる
$family_name="";
$first_name="";
$err_msg1 = "";
$err_msg2 = "";

//投稿がある場合は投稿されたデータをそうでなければ空白で定義する
//定義しておかないとエラーとなる
if( isset($_POST["family_name"]) === true){
    $family_name = $_POST["family_name"];
}

if( isset( $_POST["first_name"]) ===true ){
    $first_name = $_POST["first_name"];
}

//投稿がある場合のみ処理を行う
if( isset($_POST["send"]) === true){
    if( $family_name === "") $err_msg1="氏はなんと申すか";

    if( $first_name === "" ) $err_msg2="名はなんと申す";

    if ($err_msg1 === "" && $err_msg2 ===""){
        echo "thanks";
        exit;
    }
}
?>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>お問い合わせフォーム</title>
	</head>
	<body>
		<form method="post" action="">
			氏:<input type="text"name="family_name" value="<?php echo $family_name;?>"><br>
			<?php echo $err_msg1; ?><br>
			名:<input type="text" name="first_name" value="<?php echo $first_name; ?>">><br>
			<?php echo $err_msg2;?><br>
			<input type="submit" name="send" value="クリック">
		</form>
	</body>
</html>