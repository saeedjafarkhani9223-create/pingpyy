<?php
$password = "123456"; // 👈 حتماً این رمز را عوض کن

if (isset($_POST['link']) && $_POST['pass'] == $password) {
    file_put_contents("config.txt", $_POST['link']);
    $msg = "✅ لینک با موفقیت آپدیت شد!";
}
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>مدیریت کانفیگ</title>
    <style>
        body { background: #1a1a2e; color: white; font-family: tahoma; text-align: center; padding: 50px; }
        input, textarea { width: 100%; max-width: 400px; padding: 10px; margin: 10px 0; border-radius: 5px; border: none; }
        button { background: #3498db; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 5px; }
    </style>
</head>
<body>
    <h2>تغییر لینک VPN</h2>
    <?php if(isset($msg)) echo "<p style='color:lime'>$msg</p>"; ?>
    <form method="post">
        <input type="password" name="pass" placeholder="رمز عبور" required><br>
        <textarea name="link" rows="5" placeholder="لینک جدید VLESS را اینجا پیست کنید..." required></textarea><br>
        <button type="submit">ذخیره و انتشار</button>
    </form>
</body>
</html>
