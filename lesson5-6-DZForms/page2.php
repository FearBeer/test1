<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questions</title>
</head>
<body>
    <form action="source.php" method="post">
        <p>Вопрос 1</p>
        <input type="checkbox" name="rQuest1[]" value="Answer1">
        <label for="rQuest1">Answer1</label>
        <input type="checkbox" name="rQuest1[]" value="Answer2">
        <label for="rQuest1">Answer2</label>
        <input type="checkbox" name="rQuest1[]" value="Answer3">
        <label for="rQuest1">Answer3</label>
        <input type="checkbox" name="rQuest1[]" value="Answer4">
        <label for="rQuest1">Answer4</label>

        <p>Вопрос 2</p>
        <input type="checkbox" name="rQuest2[]" value="Answer1">
        <label for="rQuest2">Answer1</label>
        <input type="checkbox" name="rQuest2[]" value="Answer2">
        <label for="rQuest2">Answer2</label>
        <input type="checkbox" name="rQuest2[]" value="Answer3">
        <label for="rQuest2">Answer3</label>
        <input type="checkbox" name="rQuest2[]" value="Answer4">
        <label for="rQuest2">Answer4</label>

        <p>Вопрос 3</p>
        <input type="checkbox" name="rQuest3[]" value="Answer1">
        <label for="rQuest3">Answer1</label>
        <input type="checkbox" name="rQuest3[]" value="Answer2">
        <label for="rQuest3">Answer2</label>
        <input type="checkbox" name="rQuest3[]" value="Answer3">
        <label for="rQuest3">Answer3</label>
        <input type="checkbox" name="rQuest3[]" value="Answer4">
        <label for="rQuest3">Answer4</label>

        <p>Вопрос 4</p>
        <input type="checkbox" name="rQuest4[]" value="Answer1">
        <label for="rQuest4">Answer1</label>
        <input type="checkbox" name="rQuest4[]" value="Answer2">
        <label for="rQuest4">Answer2</label>
        <input type="checkbox" name="rQuest4[]" value="Answer3">
        <label for="rQuest4">Answer3</label>
        <input type="checkbox" name="rQuest4[]" value="Answer4">
        <label for="rQuest4">Answer4</label>

        <p>Вопрос 5</p>
        <input type="checkbox" name="rQuest5[]" value="Answer1">
        <label for="rQuest5">Answer1</label>
        <input type="checkbox" name="rQuest5[]" value="Answer2">
        <label for="rQuest5">Answer2</label>
        <input type="checkbox" name="rQuest5[]" value="Answer3">
        <label for="rQuest5">Answer3</label>
        <input type="checkbox" name="rQuest5[]" value="Answer4">
        <label for="rQuest5">Answer4</label>

        <input type="hidden" name="countOfRightAnswersPage1" value="<?php echo $_GET['right_answers'] ?>">
        <br>
        <button type="submit" name="nNext" value="nNext2">Next</button>
    </form>
</body>
</html>