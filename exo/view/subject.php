<?php 
    include "view/template/header.php";
    include 'models/database.php' ;
    $database = new Database();
?>

    <nav class="navi bg-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col"></div>

                <div class="col"></div>

                <div class="col navi ml-3">
                    <form class="d-flex"> 
                        <input class="form-control me-2" type="text" placeholder="Search">
                        <button class="btn btn-primary ml-1" type="button">Search</button>
                    </form>

                    <a href="http://localhost/exo/index.php?action=logout">
                    <div class="contico ml-5">
                        <img src="public/assets/fontawesome/svgs/solid/power-off.svg" alt="poweroff" class="icon" style="margin-left: 20px; margin-right:10px ;">
                    </div>
                    </a>
                </div>

            </div>
        </div>
    </nav> 

    <div class="container">
        <div class="col" >
            <h3 id="studentinfo">SUBJECTS</h3>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row subtable">
            <div class="col">
                <table class="table table-hover" style="text-align: center;">
                    <thead  style="color: #007bff;"> 
                        <tr>
                            <th>SUBJECT NAME</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $database->subject() ?>
                    </tbody>
                </table>
            </div>

            <div class="col">
                <table class="table table-hover" style="text-align: center;">
                    <thead  style="color: #007bff;">
                        <tr>
                            <th>POINT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $database->point() ?>
                    </tbody>
                </table>
            </div>

            <div class="col">
                <table class="table table-hover" style="text-align: center;">
                    <thead  style="color: #007bff;">
                        <tr>
                            <th>START AT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $database->enter() ?>
                    </tbody>
                </table>
            </div>

            <div class="col">
                <table class="table table-hover" style="text-align: center;">
                    <thead  style="color: #007bff;">
                        <tr>
                            <th>END AT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $database->close() ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    <div class="col" style="text-align: center;">
        <a href="http://localhost/exo/index.php?action=student">
            <div class="btn btn-primary mt-5 linksubStude">
                <p>STUDENT INFORMATION</p>
            </div>
        </a>
    </div>
        

    
            