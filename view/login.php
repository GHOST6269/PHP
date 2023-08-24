

    <div class="container">
        <div class="row">
            <div class="col">
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col mt-5" style="text-align: center;">
                <img src="public/assets/anonymous.jpg" alt="" id="profil">
            </div>
        </div>

        <div class="row" style="margin-top: 35px;">

            <div class="col"></div>

            <div class="col mt-2 shadow">
                <form action="/exo/index.php?action=login" method="POST" id="login">
                    <div class="email">
                        <input type="email" class="form-control login" placeholder="Enter email" name="email" required>
                    </div>
                    <div class="pwd">
                        <input type="password" class="form-control login" placeholder="Enter password" name="pwd" required>
                    </div>
                    <div class="submit">
                        <button type='submit' class="btn btn-primary" style="margin-top: 5px;">LOGIN</button>
                        <button type='button' class="btn btn-danger" style="margin-top: 5px;">CANCEL</button>
                        <p id="sign" data-toggle="modal" data-target="#mymodal"><b><i>Need an account Click here</i></b></p>
                    </div>
                </form> 
            </div>
            <div class="col"></div>
        </div>
    </div>


    <form action="/exo/index.php?action=signup" method="POST">
        <div class="modal fade" id="mymodal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"  style="color: #007bff;">SIGN UP</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">

                        <div class="email mt-2">
                            <input type="email" class="form-control login" placeholder="Enter your email" name="s_email"required>
                        </div>
                        
                        <div class="email mt-2">
                            <input type="text" class="form-control login" placeholder="Enter your name" name="s_name"required>
                        </div>

                        <div class="email mt-2">
                            <input type="text" class="form-control login" placeholder="Enter your First name" name="s_fname"required>
                        </div>

                        <div class="email mt-2">
                            <input type="password" class="form-control login" placeholder="Enter your password" name="s_pwd"required>
                        </div>

                        <div class="email mt-2" style="text-align: center;">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customRadio" name="gender" value="customEx">
                                <label class="custom-control-label" for="customRadio">MALE</label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customRadio2" name="gender" value="customEx">
                                <label class="custom-control-label" for="customRadio2">FEMALE</label>
                            </div> 
                        </div>

                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <div style="margin: auto;">
                            <button type="submit" class="btn btn-primary mt-2">SIGNUP</button>
                            <button type="button" class="btn btn-danger mt-2" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    
