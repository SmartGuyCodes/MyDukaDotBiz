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
class Message {
    # Message!
    public $message = null;

    # Message code!
    private $code = null;

    # Message task!
    private $task = null;

    # Message object!
    private $object = null;

    function __construct($code, $task = null, $object = null) {
        # Set code!
        $this->setCode($code);

        # Set task!
        $this->setTask($task);

        # Set object!
        $this->setObject($object);
    }

    # Set code!
    public function setCode($code){
        $this->code = $code;
        return $this;
    }

    # Set task!
    public function setTask($task){
        $this->task = $task;
        return $this;
    }

    # Set object!
    public function setObject($obj){
        $this->object = $obj;
        return $this;
    }

    # Get task!
    private function getTask(){
        return $this->task;
    }

    # Get object!
    private function getObject(){
        return ucfirst($this->object);
    }


    # Rerieve message code!
    public function getCode(){
        return $this->code;
    }

    # Get message!
    public function getMessage(){
        $msg = null;
        # Switch through the code!
        switch ($this->getCode()) {
            case self::ERROR_CREATE :
                $msg = self::ERROR_CREATE_MSG;
                break;
            case self::ERROR_UPDATE :
                $msg = self::ERROR_UPDATE_MSG;
                break;
            case self::ERROR_REMOVE :
                $msg = self::ERROR_REMOVE_MSG;
                break;
            case self::ERROR_DB :
                $msg = self::ERROR_DB_MSG;
                break;
            case self::ERROR_READ :
                $msg = self::ERROR_READ_MSG;
                break;
            case self::ERROR_LOGIN :
                $msg = self::ERROR_LOGIN_MSG;
                break;
            case self::ERROR_LOGIN_INVALID_PWD :
                $msg = self::ERROR_LOGIN_INVALID_PWD_MSG;
                break;
            case self::ERROR_LOGIN_INVALID_NAME :
                $msg = self::ERROR_LOGIN_INVALID_NAME_MSG;
                break;
            case self::MSG_COND_EMAIL_CONFIRM :
                $msg = self::MSG_COND_EMAIL_CONFIRM_MSG;
                break;
            case self::MSG_PASSWORD_RESET_EMAIL:
                $msg = self::MSG_PASSWORD_RESET_EMAIL_MSG;
                break;
            case self::SUCCESS :
                $msg = self::SUCCESS_MSG;
                break;
            case self::MSG_FORBIDEN :
                $msg = self::MSG_FORBIDEN_MSG;
                break;
            case self::MSG_GONE :
                $msg = self::MSG_GONE_MSG;
                break;
            case self::MSG_BADREQ:
                $msg = self::MSG_BADREQ_MSG;
                break;
            case self::MSG_PAY:
                $msg = self::MSG_PAY_MSG;
                break;
            case self::MSG_UNAUTH:
                $msg = self::MSG_UNAUTH_MSG;
                break;
            case self::MSG_NOT_FOUND:
                $msg = self::MSG_NOT_FOUND_MSG;
                break;
            case self::ERROR:
                $msg = self::ERROR_MSG;
                break;
            case self::ERROR_MISSING_PARAM:
                $msg = self::ERROR_MISSING_PARAM_MSG;
                break;
            case self::ERROR_IMG_INVALID_FORMAT:
                $msg = self::ERROR_IMG_INVALID_FORMAT_MSG;
                break;
            case self::ERROR_DESC:
                $msg = self::ERROR_DESC_MSG;
                break;
            case self::MSG_WELCOME:
                $msg = self::MSG_WELCOME_MSG;
                break;
            default:
                $msg = $this->message;
                break;
        }
        # Return the message!
        return $msg = ucfirst(sprintf($msg, $this->getTask(), $this->getObject()));
    }

    # List of all possible error codes here! Error messages must not require more than 3 params (for sprintf)!

    #Errors:
    /**
     * General error message!
     */
    const   ERROR = 1,
        ERROR_MSG = 'Sorry, but an error occured';

    # Errors occuring when writing(CUD) to db!
    /**
     * Failed to create an object (DB write failed)
     *
     */
    const   ERROR_CREATE                            = 100,
        ERROR_CREATE_MSG                        = 'Failed to save %1$s. Sorry for the incovinience we caused';

    /**
     * Failed to update a record!
     *
     */
    const   ERROR_UPDATE                            = 105,
        ERROR_UPDATE_MSG                        = 'We failed to modify the record';

    /**
     * Failed to delete!
     *
     */
    const   ERROR_REMOVE                            = 110,
        ERROR_REMOVE_MSG                        = 'An error occured while trying to delete a %1$s';

    #Errors due to DB reading - if any!
    /**
     * Failed to retrieve records or any other read failures!
     *
     */
    const   ERROR_READ                              = 115,
        ERROR_READ_MSG                          = 'The database engine seems busy, it just threw an error back!';

    # General DB error!
    const   ERROR_DB                                = 120,
        ERROR_DB_MSG                            = 'Our database agent seems to be out of gas. She\'ll be up soon!';

    # Module errors!
    #Login

    /**
     * General login failure!
     */
    const   ERROR_LOGIN                             = 290,
        ERROR_LOGIN_MSG                         = 'Login failed';

    /**
     * Login, invalid password!
     */
    const   ERROR_LOGIN_INVALID_PWD                 = 291,
        ERROR_LOGIN_INVALID_PWD_MSG             = 'Invalid password';

    /**
     * Login, invalid username!
     */
    const   ERROR_LOGIN_INVALID_NAME                = 292,
        ERROR_LOGIN_INVALID_NAME_MSG            = 'The email given is not in our system';



    # Messages!
    const   MSG_COND_EMAIL_CONFIRM                  = 650,
        MSG_COND_EMAIL_CONFIRM_MSG              = 'You have not confirmed your email address. Please do so to use this service',
        MSG_PASSWORD_RESET_EMAIL                = 651,
        MSG_PASSWORD_RESET_EMAIL_MSG            = 'An email has been sent with your password reset link',
        MSG_PASSWORD_RESET                      = 652,
        MSG_PASSWORD_RESET_MSG                  = 'Your password has been reset successfully!';

    # Success!
    const   SUCCESS                                 = 0,
        SUCCESS_MSG                             = 'Awesome! %2$s %1$s successfully!';

    # 400 codes!
    const   MSG_BADREQ                              = 400,
        MSG_BADREQ_MSG                          = 'Bad Request! The request was not understood',
        MSG_UNAUTH                              = 401,
        MSG_UNAUTH_MSG                          = 'Unauthorized! You are not authorised to perform the requested operation.',
        MSG_PAY                                 = 402,
        MSG_PAY_MSG                             = 'Payment required',
        MSG_FORBIDEN                            = 403,
        MSG_FORBIDEN_MSG                        = 'Forbidden! You do not have permision to %1$s a %2$s',
        MSG_NOT_FOUND                           = 404,
        MSG_NOT_FOUND_MSG                       = '%2$s can not be found!',
        MSG_GONE                                = 410,
        MSG_GONE_MSG                            = 'Gone in a flush! We came in late, he\'s gone!';

    /**
     * Missing required params
     */
    const   ERROR_MISSING_PARAM                     = 610,
        ERROR_MISSING_PARAM_MSG                 = 'Operation was %1$s because a required value for %2$s was not supplied';
    /**
     * Invalid image format
     */
    const   ERROR_IMG_INVALID_FORMAT                = 611,
        ERROR_IMG_INVALID_FORMAT_MSG            = 'Invalid image format';

    const   ERROR_DESC                              = 612,
        ERROR_DESC_MSG                          = 'Ooops! %2$s not %1$s';

    const   MSG_WELCOME                             = 2020,
        MSG_WELCOME_MSG                         = 'Welcome to User Management System.';
}
