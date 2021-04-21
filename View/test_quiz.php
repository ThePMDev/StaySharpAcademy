<?php
        include '../controller/functions.php';
        require '../Model/test_question.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Stay Sharp --> Quiz</title>
    </head>
    <body>
        <p>Questions</p>

        <?php 
            $quiz_length = 5;
            shuffle($question);

            $questionID_used = array_slice($question, 0, $quiz_length); ?>
            <form action="../controller/results.php" method="post">
            <?php
                $answers = array();
                for ($i = 0; $i < $quiz_length; $i++){
                echo ($i+1) . ")  ". $question[$i]['question'];
                $a = array();

                array_push($a, $question[$i]['answer']);
                array_push($answers, $question[$i]['answer']);


                $items = count($question);
                $mix = range(0,$items-1);

                while (count($a) < $quiz_length){
                    shuffle($mix);    
                    $random = $question[$mix[$i]]['answer'];
                    if (!in_array($random, $a)){
                        array_push($a, $random);
                    } // end if
                } // end while

                shuffle($a); ?><br>
                <?php foreach ($a as $index => $answer){ ?>
                    <input type="radio" name="<?php echo $i+1;?>" value="<?php echo $answer;?>"> <?php echo $answer;?> </input><br>
                <?php } // end foreach loop ?> <br><br>
            <?php } // end for loop
                        
            ?>            
            <label>&nbsp;</label>
            <input type="hidden" name="q1" value="<?php echo $question[0]['question'];?>" >
            <input type="hidden" name="q2" value="<?php echo $question[1]['question'];?>" >
            <input type="hidden" name="q3" value="<?php echo $question[2]['question'];?>" >
            <input type="hidden" name="q4" value="<?php echo $question[3]['question'];?>" >
            <input type="hidden" name="q5" value="<?php echo $question[4]['question'];?>" >

            <input type="hidden" name="a1" value="<?php echo $question[0]['answer'];?>" >
            <input type="hidden" name="a2" value="<?php echo $question[1]['answer'];?>" >
            <input type="hidden" name="a3" value="<?php echo $question[2]['answer'];?>" >
            <input type="hidden" name="a4" value="<?php echo $question[3]['answer'];?>" >
            <input type="hidden" name="a5" value="<?php echo $question[4]['answer'];?>" >
            <input type="submit" value="Submit Quiz">
        </form>
    </body>
</html>

<!--
//            foreach ($question as $qa) {
//                echo $qa['questionID'] . " " . $qa['question'] . " " . $qa['answer']; 
//            }


//            $question_array = get_questions();

//            for ($i = 1; $i <= 10; $i++) {
//                $answer_array = get_answers();
//                $answer_set = array(); ?>
            
            <p>             
            // echo ($i) . ")  ". $question_array[$i]; ?> <br>

                //    $answer_set += ["y" => $answer_array[$i]];
                //    unset($answer_array[$i]);
                //    shuffle($answer_array);
                //    $answer_set += ["n1" => array_pop($answer_array)];
                //    shuffle($answer_array);
                //    $answer_set += ["n2" => array_pop($answer_array)];
                //    shuffle($answer_array);
                //    $answer_set += ["n3" => array_pop($answer_array)];            
                //    shuffle($answer_set);

                // foreach  ($answer_set as $key => $answer) : ?>
                    <input type="radio" name="<?php // echo $i; ?>" value="<?php //echo $key; ?>" id="<?php // echo $i.$key; ?>" > <?php // echo $answer; ?><br><!-- present each answer with a radio dial option -->
            
