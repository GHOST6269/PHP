    <?php
        include 'models/database.php' ;
        $database = new Database() ;
    ?>
    <nav class="navi bg-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col"></div>

                <div class="col"></div>

                <div class="col navi ml-3">
                    <form class="d-flex"> 
                        <input class="form-control" type="text" placeholder="Search">
                        <button class="btn btn-primary ml-1" type="button">Search</button>
                    </form>

                    <a href="/exo/index.php?action=logout">
                    <div class="contico">
                        <img src="public/assets/fontawesome/svgs/solid/power-off.svg" alt="poweroff" class="icon" style="margin-left: 20px; margin-right:10px ;">
                    </div>
                    </a>
                </div>

            </div>
        </div>
    </nav> 

    <div class="container">
        <div class="col">
            <h3 id="studentinfo">STUDENT INFORMATION</h3>
        </div>
    </div>

    <div class="container mt-5 scroll">
        <div class="sect2">
            <div class="row subtable">
                
                <div class="col">
                    <table class="table table-hover tableinfo" style="text-align: center;">
                        <thead  style="color: #007bff ;">
                            <tr>
                                <th>NAME</th>
                            </tr>
                        </thead>
                        <tbody  style="text-transform: uppercase;">
                            <?php  $database->name() ?>
                        </tbody>
                    </table>
                </div>

                <div class="col">
                    <table class="table table-hover tableinfo" style="text-align: center;">
                        <thead  style="color: #007bff;">
                            <tr>
                                <th>FIRST NAME</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $database->firstname() ?>
                        </tbody>
                    </table>
                </div>

                <div class="col">
                    <table class="table table-hover tableinfo" style="text-align: center;">
                        <thead  style="color: #007bff;">
                            <tr>
                                <th>ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $database->id() ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    

    <form action="/exo/index.php?action=update" method="POST">
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"  style="color: #007bff;">UPDATE INFORMATION</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">

                        <div class="email mt-2">
                            <input type="email" class="form-control login" placeholder="Enter your email" name="uemail" required>
                        </div>
                        
                        <div class="email mt-2">
                            <input type="text" class="form-control login" placeholder="Enter your First name" name="ufname" required>
                        </div>

                        <div class="email mt-2">
                            <input type="text" class="form-control login" placeholder="Enter your name" name="uname" required>
                        </div>

                        <div class="email mt-2">
                            <input type="password" class="form-control login" placeholder="Enter your password" name="upwd" required>
                        </div>

                        <div class="email mt-2">
                            <input type="number" class="form-control login" placeholder="Enter your id" name="id">  
                        </div>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <div class="submit">
                            <button type="submit" class="btn btn-primary mt-2">UPDATE</button>
                            <button type="button" class="btn btn-danger mt-2" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    
    <div class="col" style="text-align: center;">
        <a href="/exo/index.php?action=subject">
            <div class="btn btn-primary mt-5 linksubStude">
                <p>SUBJECTS</p>
            </div>
        </a>
    </div>


   

