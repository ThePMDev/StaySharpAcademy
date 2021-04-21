<?php 
// pull the question IDs, questions, and answers from the database
// pair question IDs and questions into an array
// pair question IDs and answers into an array
// create a question with it's answer
// select three other answers and add it to the question's answer options

    require '../model/database.php';

    $answer_list = array();

    function save_answers($list){
        foreach ($list as $answer){
            array_push($answer_list, $answer);
        }

    }

    function get_answers(){
        return $answer_list;
    }


    function randomize($list){
        $length = count($list);
        
    }

    function get_questions(){
        $questions = array();
        include ('test_question.php');
        foreach ($question as $q){array_push($questions, $q['question']);} 
        return $questions;
    }

/*    function get_answers(){
        $answers = array();
        include ('test_question.php');
        foreach ($question as $a){array_push($answers, $a['answer']);} 
        return $answers;
    }
*/
?>
