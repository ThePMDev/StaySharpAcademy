<?php   require '../Model/database.php';
        require '../Model/test_school.php';
        require '../Model/test_subject.php';
        require '../Model/test_course.php';        
        require '../Model/test_topic.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Test View</title>
    </head>
    <body>
        <p>Schools</p>
        <?php foreach($school as $row) { ?>
            <!-- present each option with a radio dial -->
            <input type="radio" name="<?php echo $row["schoolID"]; ?>" value="<?php echo $row["schoolID"]; ?>" id="<?php echo $row["schoolID"]; ?>" > <?php echo $row["school_name"]; ?><br>
            <?php } ?>

        <p>Subjects</p>
        <?php foreach($subject as $row) { ?>
            <!-- present each option with a radio dial -->
            <input type="radio" name="<?php echo $row["subjectID"]; ?>" value="<?php echo $row["subjectID"]; ?>" id="<?php echo $row["subjectID"]; ?>" > <?php echo $row["subject_name"]; ?><br>
            <?php } ?>

        <p>Courses</p>
        <?php foreach($course as $row) { ?>
            <!-- present each option with a radio dial -->
            <input type="radio" name="<?php echo $row["courseID"]; ?>" value="<?php echo $row["courseID"]; ?>" id="<?php echo $row["courseID"]; ?>" > <?php echo $row["course_number"]; ?><br>
            <?php } ?>

        <p>Topics</p>
        <?php foreach($topic as $row) { ?>
            <!-- present each option with a radio dial -->
            <input type="radio" name="<?php echo $row["topicID"]; ?>" value="<?php echo $row["topicID"]; ?>" id="<?php echo $row["topicID"]; ?>" > <?php echo $row["topic_name"]; ?><br>
            <?php } ?>

        <div class="form-group">
            <input type="submit" value="Submit" name="Submit" class="btn btn-primary"/>
        </div>
    </body>
    