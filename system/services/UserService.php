<?php
/*~
.----------------------------------------------------------------------------.
|  Mission: Code Business Ideas Into Realities                               |
|   Version: 0.1                                                             |
|----------------------------------------------------------------------------|
|     Admin: Charles Evans Ogego Otieno (project admininistrator)            |
|   Authors: C.E.O Otieno (codeartist254) codeartist254@gmail.com            |
|          : trulance247@gmail.com                                                                |
|          :                                   |
| Copyright (c) 2013-2015, C.E.O Otieno. All Rights Reserved.                |
| ---------------------------------------------------------------------------|
|   License:                                                                 |
| This program is distributed in the hope that it will be useful - WITHOUT   |
| ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or      |
| FITNESS FOR A PARTICULAR PURPOSE.                                          |
|                                                                            |
| THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"|
| AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE  |
| IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE |
| ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE  |
| LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR        |
| CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF       |
| SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS   |
| INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN    |
| CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)    |
| ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE |
| POSSIBILITY OF SUCH DAMAGE.                                                |
|----------------------------------------------------------------------------|
| I offer a number of paid services :                                        |
| - Web Hosting on highly optimized fast and secure servers                  |
| - Technology Consulting                                                    |
| - Outsourcing (highly qualified programmers and graphic designers)         |
'----------------------------------------------------------------------------'
*/
Class UserService extends ImageService{
    public $conn;

    /**
     * UserService constructor.
     */
    function __construct () {
        parent::__construct();

        #implement db connection
        $db = $this->dbConnection();
        $this->conn = $db;
    }

    /**
     * @param $fname
     * @param $lname
     * @param $mail
     * @param $phone
     * @param $pwd
     * @param $code
     * @return null|string
     */
    public function insertUser($fname, $lname, $mail, $phone, $pwd, $code){
        try{
            $stmt = $this->runQuery("insert into users(UserFirstName, UserLastName, UserEmail, UserPhone, UserPassword, UserVerificationCode) values (:fname, :lname, :mail, :phone, :pwd, :verif)");
            $stmt->bindParam(':fname', $fname);
            $stmt->bindParam(':lname', $lname);
            $stmt->bindParam(':mail', $mail);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':pwd', $pwd);
            $stmt->bindParam(':verif', $code);
            $result = $stmt->execute();
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }
        return $result;
    }
    
    #INster guset user
    public function insertGuest($mail){
        try{
            $stmt = $this->runQuery("insert into users(UserEmail) values (:mail)");
            $stmt->bindParam(':mail', $mail);
            $stmt->execute();
            
            $result = $this->lastID();
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }
        return $result;
    }

    /**
     * @param $email
     * @param $upass
     * @return bool
     */
    protected function loginUser($email, $upass){
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE UserEmail=:email_id");
        $stmt->execute(array(":email_id"=>$email));
        $userRow = $stmt->fetch(PDO::FETCH_ASSOC);
        if($stmt->rowCount() == 1){
            if(password_verify($upass, $userRow['UserPassword'])){
                 $_SESSION[MD_OWNER] = $userRow['UserID'];
                 return true;
            }
        }
    }

    /**
     * @param $mail
     * @return mixed
     */
    public function userExists($mail){
        try{
            $stmt = $this->conn->prepare("SELECT * FROM users WHERE UserEmail=:email_id");
            $stmt->execute(array(":email_id"=>$mail));
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            return $user;
        }
        catch(PDOException $e){
            die("Error: " .$e->getMessage());
        }
    }

    public function getUsers(){
        try{
            $sql = "SELECT * FROM users";
            $stmt = $this->runQuery($sql);
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $results = $e->getMessage();
        }

        return $results;
    }

    public function updateAccountDetailsById ($uid, $fname, $lname, $mail, $phone, $street, $city, $county, $address, $address2){
        try{
            $sql = "UPDATE
                      users
                    SET
                      UserFirstName=:fname, UserLastName=:lname, UserEmail=:mail, UserPhone=:phone,
                      UserZip=:street, UserCity=:city, UserState=:county, UserAddress=:adres1, UserAddress2=:adres2
                    WHERE UserID=:uID";
            $stmt = $this->runQuery($sql);
            $result = $stmt->execute([
                ":uID" => $uid,
                ":fname" => $fname,
                ":lname" => $lname,
                ":mail" => $mail,
                ":phone" => $phone,
                ":street" => $street,
                ":city" => $city,
                ":county" => $county,
                ":adres1" => $address,
                ":adres2" => $address2
            ]);

        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }

    public function updateUserDetailsById ($uid, $fname, $lname){
        try{
            $sql = "UPDATE
                      users
                    SET
                      UserFirstName=:fname, UserLastName=:lname 
                    WHERE 
                        UserID=:uID";
            $stmt = $this->runQuery($sql);
            $result = $stmt->execute([
                ":uID" => $uid,
                ":fname" => $fname,
                ":lname" => $lname
            ]);
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }

        return $result;
    }
}