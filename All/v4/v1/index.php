<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Different Input Types</h1>  
        <label for="pets">Pets:</label>
        <select id="pets">
            <optgroup label="Mammals">
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
            </optgroup>
            <optgroup label="Insects">
                <option value="spider">Spider</option>
                <option value="ants">Ants</option>
            </optgroup>
            <optgroup label="Fish">
                <option value="goldfish">Goldfish</option>
            </optgroup>
        </select>
        <hr> 
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday"> 

        <label for="start">Select Month:</label>
        <input type="month" id="start" >

        <label for="meeting-time">Choose a time for your appointment:</label>
        <input type="datetime-local" id="meeting-time" >

        <label for="time">Select Time:</label>
        <input type="time" id="time">

        <label for="week">Week</label>
        <input type="week" id="week" >
        <br>
        <input type="checkbox" id="subscribe" value="subscribe">
        <label for="subscribe">Subscribe to newsletter!</label><br>
        <input type="color" id="background">
        <label for="background">Background Color</label>
        <hr>
        <label for="email">Enter your email:</label>
        <input type="email" id="email"> <input type="file" name="file">
        <details>
    <summary>Click me</summary> 
    <p>Hidden content</p>
 </details>
        <?php
        // put your code here
        ?>
    </body>
</html>
