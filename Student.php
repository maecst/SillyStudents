<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author maecst
 */
class Student {
    
    // student constructor
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    // function to add an email for a student
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    } 
    
    // function to add a grade for a student
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    // function to compute the average grade for a student
    public function average() {
        $total = 0;

        foreach ($this->grades as $value) {
            $total += $value;
        }

        return $total / count($this->grades);
    }

    // toString function to display info for a student
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        
        foreach ($this->emails as $which => $what) {
            $result .= $which . ':' . $what . "\n";
        }
        $result .= "\n";
        
        return '<pre>' . $result . '</pre>';
    }

}
