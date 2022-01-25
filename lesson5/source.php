<?php 

if ($_POST['nNext'] === 'nNext1') {
    $countOfRightAnswers = 0;
    if ($_POST['rQuest1'] === 'Answer 1') {
        $countOfRightAnswers++;
    }
    if ($_POST['rQuest2'] === 'Answer 3') {
        $countOfRightAnswers++;
    }
    if ($_POST['rQuest3'] === 'Answer 4') {
        $countOfRightAnswers++;
    }
    if ($_POST['rQuest4'] === 'Answer 1') {
        $countOfRightAnswers++;
    }
    header('Refresh: 0, url=page2.php');
} elseif ($_POST['nNext'] === 'nNext2') {
    echo 'page2';
}