<?php   
        // include header
        include 'header.php';
        // use each of the models to pull the data needed for the drop down lists
        require '../model/school.php';
        require '../model/subject.php';
        require '../model/course.php';        
        require '../model/topic.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Test View</title>
    </head>
    <body>
        <form action="quiz.php" method="get">
        <!-- the form's action parameter is the path to where it will send the user upon submit -->
            <p>Schools</p>
                <select name="schoolID">
                    <?php foreach($school as $row) { ?>
                    <!-- data is coming from the school.php model -->
                    <!-- the model opens the connection to the database, sends the SQL querry string -->
                    <!-- the model returns the $school array that you need to loop through to get the contents by field name -->
                    <!-- present each option within a drop down list -->
                        <option value="<?php echo $row["schoolID"]; ?>"> <?php echo $row["school_name"]; ?> </option>
                    <?php } ?>
                </select>

            <p>Subjects</p>
                <select name="subjectID">
                    <?php foreach($subject as $row) { ?>
                    <!-- data is coming from the subject.php model -->
                    <!-- the model opens the connection to the database, sends the SQL querry string -->
                    <!-- the model returns the $subject array that you need to loop through to get the contents by field name -->
                    <!-- present each option within a drop down list -->
                        <option value="<?php echo $row["subjectID"]; ?>"> <?php echo $row["subject_name"]; ?> </option>
                    <?php } ?>
            </select>

            <p>Courses</p>
                <select name="courseID">
                    <?php foreach($course as $row) { ?>
                    <!-- data is coming from the course.php model -->
                    <!-- the model opens the connection to the database, sends the SQL querry string -->
                    <!-- the model returns the $course array that you need to loop through to get the contents by field name -->
                    <!-- present each option within a drop down list -->
                        <option value="<?php echo $row["courseID"]; ?>"> <?php echo $row["course_number"]; ?> </option>
                    <?php } ?>
            </select>

            <p>Topics</p>
                <select name="topicID">
                    <?php foreach($topic as $row) { ?>
                    <!-- data is coming from the topic.php model -->
                    <!-- the model opens the connection to the database, sends the SQL querry string -->
                    <!-- the model returns the $topic array that you need to loop through to get the contents by field name -->
                    <!-- present each option within a drop down list -->
                        <option value="<?php echo $row["topicID"]; ?>"> <?php echo $row["topic_name"]; ?> </option>
                    <?php } ?>
                </select>
            <label>&nbsp;</label>
            <!-- the type "submit" parameter will send each 'name' and 'value' parameter as a key/value pair -->
            <!-- the value parameter is the text for the submit button -->
            <input type="submit" value="Generate Quiz">
        </form>
    </body>
</html>