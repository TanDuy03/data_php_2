<?php if (isset($page_content))
    echo $page_content;?>
<select name="courses">
    <?php
        foreach($list_of_courses as $course_name): ?>
            <option><?php if(isset($course_name)) echo $course_name; ?></option>
    <?php endforeach; ?>

</select>