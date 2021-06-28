<?php
mb_internal_encoding("utf8");

session_start();

if(empty($_POST['from_mypage'])){
    header("Location:login_error.php");
}

?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage.css">
    </head>

    <body>

        <header>
            <img src="4eachblog_logo.jpg">
            <div class="log_out"><a href="log_out.php">ログアウト</a></div>
        </header>

        <main>
            <div class="box">
                <form action="mypage_update.php" method="post">
                    <h2>会員情報</h2>
                    <p>こんにちは！ <?php echo $_SESSION['name']; ?>さん</p>
                    <div class="profile_pic">
                        <img src="<?php echo $_SESSION['picture']; ?>">
                    </div>

                    <div class="basic_info">
                        <p>氏名: <input type="text" size="30" value="<?php echo $_SESSION['name']; ?>" name="name" >
                        </p>

                        <p>メール: <input type="text" size="30" value="<?php echo $_SESSION['mail']; ?>" name="mail">
                        </p>

                        <p>パスワード: <input type="text" size="30" value="<?php echo $_SESSION['password']; ?>" name="password">
                        </p>
                    </div>

                    <textarea name="comments"><?php echo $_SESSION['comments']; ?></textarea> 
                    
                    <div class="henkou">
                        <input type="submit" value="この内容に変更する" size="35" class="submit">
                    </div>
                </form>
            </div>
        </main>

        <footer>
            ⓒ2018 InterNous.inc. All rights reserved
        </footer>

    </body>

</html>