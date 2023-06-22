<?php 

$course = [
    's1' => 'course1',
    's2' => 'course2',
    's3' => 'course3'
];

//model
function get_courses(){
    global $course;
    return array_values($course);
}

function find_by_semester($semester){
    global $course;
    return (array_key_exists($semester, $course) ? $course[$semester]:'Invalid course');
}

//controller
$list_of_courses = get_courses(); 
$semester = (!empty($_GET['semester']) ? $_GET['semester']:'');
$course_name = find_by_semester($semester);
$page_content = $course_name; 
?>
<!-- view -->
<?php if (isset($page_content))
    echo $page_content;?>
<select name="courses">
    <?php
        foreach($list_of_courses as $course_name): ?>
            <option><?php if(isset($course_name)) echo $course_name; ?></option>
    <?php endforeach; ?>

</select>
 <!-- Course 1: <?php if (!isset($_GET['semester'])) {
    
    echo $course_name;
 }?> -->
     <?php
        foreach($list_of_courses as $course_name): ?>
            <?php if(isset($course_name)) echo $course_name; ?>
    <?php endforeach; ?>


