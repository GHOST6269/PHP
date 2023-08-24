
<?php
    
    class Database{
        public $db;
        
        public function __construct(){
            $this->db = $this->Sql();
        }

        public function Sql(){
            $servername = "localhost" ;
            $username = "root" ;
            $password = "" ;
            $conn = new PDO("mysql:host = $servername; dbname=exo", $username,$password) ;
            return $conn;
        }

        public function insert($email, $name, $firstname, $password){
            $a = $this->db->prepare("INSERT INTO info (email, name, firstname, password) VALUES (?, ?, ?, ?)") ;
            $a->execute([$email, $name, $firstname, $password]) ;
        }

        public function update($id, $email, $name, $firstname, $password){
            $a = $this->db->prepare("UPDATE info SET email = ?, name = ?, firstname = ?, password = ? WHERE id = ?") ;
            $a->execute([$email, $name, $firstname, $password, $id]) ;
        }

        public function delete($id){
            $a = $this->db->prepare("DELETE FROM info WHERE id = $id") ;
            $a->execute([$id]) ;
        }

        public function select($email, $pwd){
            $a = $this->db->prepare('SELECT * FROM info WHERE email = ? AND password = ?') ;
            $a->execute([$email, $pwd]) ;
            return $a->fetch() ;
        }

        public function verifipasswd($id, $pwd){
            $a = $this->db->prepare('SELECT * FROM info WHERE id = ? AND password = ?') ;
            $a->execute([$id, $pwd]) ;
            return $a->fetch() ;
        }

        public function selectemail($email){
            $a = $this->db->prepare('SELECT * FROM info WHERE email = ?') ;
            $a->execute([$email]) ;
            return $a->fetch() ;
        }

        public function firstname(){
            $a = $this->db->prepare("SELECT * FROM info") ;
            $a->execute() ;

            while($data = $a->fetch()){
                ?>  
                    <tr>
                        <td>
                            <?php echo $data['firstname']; ?>
                        </td>
                    </tr> 
                <?php
            }
        }

        public function name(){
            $a = $this->db->prepare("SELECT * FROM info") ;
            $a->execute() ;
            
            while($data = $a->fetch()){
                echo "<tr><td>{$data['name']}</td></tr>" ;  
            }
        }

        public function id(){
            $a = $this->db->prepare("SELECT * FROM info") ;
            $a->execute() ;
            while($data = $a->fetch()){
                ?>
                <tr>
                    <td>
                        <?php echo $data['id']; ?>
                    </td>
                    <td>
                        <div id="delete">
                            <button class="btn btn-danger delete respb" type="submit" data-toggle="modal" data-target="#h">X</button>

                            <form action="/exo/index.php?action=delete" method="POST">
                                <div class="modal fade" id="h">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header" style="text-align: center;">
                                                <h4 class="modal-title"  style="color: #007bff;">ARE YOU SURE TO DELETE ACCOUNT ???</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <input type="hidden" value="<?php echo $data['id'] ;?>" name="delete">
                                            </div>
                                            <!-- Modal body -->

                                            <div class="modal-body">
                                                <div class="email mt-2">
                                                    <label for="password" class="mb-2">Enter the password of account</label>
                                                    <input type="password" class="form-control login" placeholder="Enter your password" name="password" required>
                                                </div>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <div style="margin: auto;">
                                                    <button type="submit" class="btn btn-primary mt-2">YES</button>
                                                    <button type="button" class="btn btn-danger mt-2" data-dismiss="modal">NO</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="delete" style="display: inline-block ; ">                                
                            <button class="btn btn-primary delete respb" type="submit" data-toggle="modal" data-target="#myModal">U</button>
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
                                                    <input type="text" class="form-control login" placeholder="Enter your name" name="ufname" required>
                                                </div>

                                                <div class="email mt-2">
                                                    <input type="text" class="form-control login" placeholder="Enter your first name" name="uname" required>
                                                </div>

                                                <div class="email mt-2">
                                                    <input type="password" class="form-control login" placeholder="Enter the account password" name="cpwd" required>
                                                </div>
                                                
                                                <div class="email mt-2">
                                                    <input type="password" class="form-control login" placeholder="Enter your new password" name="upwd" required>
                                                </div>

                                                <div class="email mt-2">
                                                    <input type="hidden" value="<?php echo $data['id'] ;?>" name="update">
                                                </div>
                                            </div>
                                            
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <div style="margin: auto;">
                                                    <button type="submit" class="btn btn-primary mt-2">UPDATE</button>
                                                    <button type="button" class="btn btn-danger mt-2" data-dismiss="modal">CLOSE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>

                <?php
            }
        }


        /* ----------------------------------------------------------------------------- */

        public function subject(){
            $a = $this->db->prepare("SELECT * FROM subject") ;
            $a->execute() ;
            while($data = $a->fetch()){
                echo "<tr><td>{$data['subjectName']}</td></tr>" ;   
            }
        }

        public function point(){
            $a = $this->db->prepare("SELECT * FROM subject") ;
            $a->execute() ;
            while($data = $a->fetch()){
                echo "<tr><td>{$data['point']}</td></tr>" ;  
            }
        }

        public function enter(){
            $a = $this->db->prepare("SELECT * FROM subject") ;
            $a->execute() ; 
            while($data = $a->fetch()){
                echo "<tr><td>{$data['enter']}</td></tr>" ;  
            }
        }

        public function close(){
            $a = $this->db->prepare("SELECT * FROM subject") ;
            $a->execute() ;
            while($data = $a->fetch()){
                echo "<tr><td>{$data['close']}</td></tr>" ; 
            }
        }
    }    
?>