<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info save</title>
</head>
<body>
<form action="/create" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<table>
    <tr>
        <td>Your text</td>
        <td><input type='text' name='user_text'/></td>
    </tr>
    <tr>
    <td>Do it</td>
        <td><input type='text' name='do_it'/></td>
    </tr>
    <tr>
        <td>user id</td>
        <td><input type='text' name='user_id'/></td>
    </tr>
    <tr>
        <td colspan = '2'>
            <input type = 'submit' value = "Add data"/>
        </td>
    </tr>
</table>
</form>
</body>
</html>
