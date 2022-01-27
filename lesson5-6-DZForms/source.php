<?php

if ($_POST['nNext'] === 'nNext1') {
    $countOfRightAnswers = 0;

    if ($_POST['rQuest1'] === 'Answer1') {
        $countOfRightAnswers ++;
    }
    if ($_POST['rQuest2'] === 'Answer3') {
        $countOfRightAnswers ++;
    }
    if ($_POST['rQuest3'] === 'Answer4') {
        $countOfRightAnswers ++;
    }
    if ($_POST['rQuest4'] === 'Answer1') {
        $countOfRightAnswers ++;
    }
    if ($_POST['rQuest5'] === 'Answer2') {
        $countOfRightAnswers ++;
    }
    header('Refresh:0, url=page2.php?right_answers=' . $countOfRightAnswers);
}
elseif ($_POST['nNext'] === 'nNext2') {
    $countOfRightAnswersPage1 = $_POST['countOfRightAnswersPage1'];
    $countOfRightAnswersPage2 = 0;

    if (count($_POST['rQuest1']) == 1) {
        $rQuest1 = $_POST['rQuest1'];
        if ($rQuest1[0] === 'Answer2') {
            $countOfRightAnswersPage2 = $countOfRightAnswersPage2+3;
        }
    }
    if (count($_POST['rQuest2']) == 2) {
        $rQuest2 = $_POST['rQuest2'];
        if (
            ($rQuest2[0] === 'Answer1' || $rQuest2[0] === 'Answer3') &&
            ($rQuest2[1] === 'Answer1' || $rQuest2[1] === 'Answer3')
        ) {
            $countOfRightAnswersPage2 = $countOfRightAnswersPage2+3;
        }
    }
    if (count($_POST['rQuest3']) == 3) {
        $rQuest3 = $_POST['rQuest3'];
        if (
            ($rQuest3[0] === 'Answer2' || $rQuest3[0] === 'Answer3' || $rQuest3[0] === 'Answer4') &&
            ($rQuest3[1] === 'Answer2' || $rQuest3[1] === 'Answer3' || $rQuest3[1] === 'Answer4') &&
            ($rQuest3[2] === 'Answer2' || $rQuest3[2] === 'Answer3' || $rQuest3[2] === 'Answer4')
        ) {
            $countOfRightAnswersPage2 = $countOfRightAnswersPage2+3;
        }
    }
    if (count($_POST['rQuest4']) == 1) {
        $rQuest4 = $_POST['rQuest4'];
        if ($rQuest4[0] === 'Answer2') {
            $countOfRightAnswersPage2 = $countOfRightAnswersPage2+3;
        }
    }
    if (count($_POST['rQuest5']) == 1) {
        $rQuest5 = $_POST['rQuest5'];
        if ($rQuest5[0] === 'Answer1') {
            $countOfRightAnswersPage2 = $countOfRightAnswersPage2+3;
        }
    }
    $result = $countOfRightAnswersPage1 + $countOfRightAnswersPage2;
    header('Refresh:0, url=page3.php?right_answers=' . $result);    
}
elseif ($_POST['nNext'] === 'Finish') {
    $result = $_POST['countOfRightAnswersPage2'];
    $countOfRightAnswersPage3 = 0;
    if(mb_strtolower($_POST['rQuest1']) === 'moscow') {
    $countOfRightAnswersPage3 += 5;
    }
    if(mb_strtolower($_POST['rQuest2']) === 'kiev') {
    $countOfRightAnswersPage3 += 5;
    }
    if(mb_strtolower($_POST['rQuest3']) === 'moscow') {
    $countOfRightAnswersPage3 += 5;
    }
    if(mb_strtolower($_POST['rQuest4']) === 'moscow') {
    $countOfRightAnswersPage3 += 5;
    }
    if(mb_strtolower($_POST['rQuest5']) === 'moscow') {
    $countOfRightAnswersPage3 += 5;
    }
    
    $result +=  $countOfRightAnswersPage3;

    echo '<p>Your score is: '. $result . '</p>';
}

