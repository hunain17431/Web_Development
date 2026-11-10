<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="formulario">
        <form action="./process.php" method="POST">
            <div>
                <label for="nam">Name</label>
                <input type="text" name="nam" id="nam">
            </div>
            <div>
                <label for="mail">Mail</label>
                <input type="email" name="mail" id="mail">
            </div>
            <div>
                <label for="person">PERSON</label>
                <select name="person" id="person">
                    <option value="">-- Choose --</option>
                    <option value="Student">Student</option>
                    <option value="Teacher">Teacher</option>
                </select>
            </div>
            <div>
                <label for="comment">Comment</label>
                <textarea name="comment" id="comment"></textarea>
            </div>
            <div>
                <label>
                    <input type="checkbox" name="sendmail" value="yes">
                    Send email notification to all users
                </label>
            </div>
            <button type="submit">SUBMIT</button>
        </form>
    </div>
</body>
</html>