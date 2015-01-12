<!DOCTYPE html>
<!-- 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title> </title>
    </head>
    
    <body>
        <?php 
        
        include('Student.php');
        
        // create a student array variable
        $students = array();
        
        // create a first student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        // create a second student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        // create a third student
        $third = new Student();
        $third->surname = "Yee";
        $third->first_name = "Mae";
        $third->add_email('main','maeyee@shaw.ca');
        $third->add_email('school1','mae.cst@hotmail.com');
        $third->add_email('school2','myee12@my.bcit.ca');
        $third->add_grade(99);
        $third->add_grade(82);
        $third->add_grade(90);
        $students['m789'] = $third;
        
        // sort students alphabetically
        ksort($students);
        
        // print info for each student
        foreach($students as $student) {
            echo $student->toString();
        }

        ?>
    </body>
</html>

