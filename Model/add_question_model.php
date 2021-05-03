<?php   require 'database.php'; 

        if ($conn){
                echo "Add Question Model Connection Successful (per model/add_question_model.php)"."<br>";
        }

        // include header
        include '../view/header_view.php';

// capture user selections from drop down lists
$schoolID = $_POST['schoolID'];
$subjectID = $_POST['subjectID'];
$courseID = $_POST['courseID'];
$topicID = $_POST['topicID'];
$question = $_POST['question'];
$answer = $_POST['answer'];

// Attempt insert query execution
$sql = "INSERT INTO question (schoolID, subjectID, courseID, topicID, question, answer) 
        VALUES ('".$schoolID."','".$subjectID."','".$courseID."','".$topicID."','".$question."','".$answer."')";

?>

<?php if (mysqli_query($conn, $sql)) {
        echo "Question successfully added.";
    } else{
        echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }


?> 
<?php
// Close connection
mysqli_close($conn);

?>

<form action="../view/explore.php" method="post">
        <button type="submit" value="explore">Build Another Quiz</button>
</form>
<form action="../view/add_question_view.php" method="post">
        <button type="submit" value="explore">Add Another Question</button>
</form>