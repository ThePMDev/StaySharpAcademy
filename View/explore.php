<?php   require '../Model/test_school.php';
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
        <form action="test_quiz.php" method="get">
            <p>Schools</p>
                <select name="schoolID">
                    <?php foreach($school as $row) { ?>
                        <!-- present each option within a drop down list -->
                        <option value="<?php echo $row["schoolID"]; ?>"> <?php echo $row["school_name"]; ?> </option>
                    <?php } ?>
                </select>

            <p>Subjects</p>
                <select name="subjectID">
                    <?php foreach($subject as $row) { ?>
                        <!-- present each option within a drop down list -->
                        <option value="<?php echo $row["subjectID"]; ?>"> <?php echo $row["subject_name"]; ?> </option>
                    <?php } ?>
            </select>

            <p>Courses</p>
                <select name="courseID">
                    <?php foreach($course as $row) { ?>
                        <!-- present each option within a drop down list -->
                        <option value="<?php echo $row["courseID"]; ?>"> <?php echo $row["course_number"]; ?> </option>
                    <?php } ?>
            </select>

            <p>Topics</p>
                <select name="topicID">
                    <?php foreach($topic as $row) { ?>
                        <!-- present each option within a drop down list -->
                        <option value="<?php echo $row["topicID"]; ?>"> <?php echo $row["topic_name"]; ?> </option>
                    <?php } ?>
                </select>
            <label>&nbsp;</label>
            <input type="submit" value="Generate Quiz">
        </form>
    </body>
</html>
    <!-- echo "School ID: ".$row["schoolID"]."  ";
    echo "School name: ".$row["school_name"]."<br>"; -->

<!--        <p>Courses</p> -->
            <?php
                // foreach($course as $row) { ?>
                <!-- present each option with a radio dial -->
<!--                <input type="radio" name="<?php // echo $row["courseID"]; ?>" value="<?php // echo $row["courseID"]; ?>" id="<?php // echo $row["courseID"]; ?>" > <?php // echo $row["course_number"]; ?><br>
                <?php // } ?>


-->
                    