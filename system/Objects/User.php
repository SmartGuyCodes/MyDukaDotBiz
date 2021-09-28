<?php
/*~
.----------------------------------------------------------------------------.
|  Mission: Code Business Ideas Into Realities                               |
|   Version: 0.1                                                             |
|----------------------------------------------------------------------------|
|     Admin: Charles Evans Ogego Otieno (project admininistrator)            |
|   Authors: C.E.O Otieno (trulance247)                                      |
|          : trulance247@gmail.com                                           |                     |
|          :                                                                 |
| Copyright (c) 2013-2016, C.E.O Otieno. All Rights Reserved.                |
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

class User implements ModelContract{
    use Model;

    /**
     * @constant Number
     * Active user status value
     */
    const USER_ACTIVE = 1;

    /**
     * @constant Number
     * Inactive church status value
     */
    const USER_INACTIVE = 0;

    # PK

    /**
     * @var \MongoId|null
     */
    public $_id = null;

    # uuid!
    /**
     * @var null
     */
    public $url = null;

    # First name!
    /**
     * @var \Name|null
     */
    public $name = null;

    # Phone number!
    /**
     * @var array
     */
    public $phone = null;

    # Email!
    /**
     * @var array
     */
    public $mail = [];

    #city
    /**
     * @var mixed|null
     */
    public $city = null;

    #country
    /**
     * @var mixed|null
     */
    public $country = null;

    #Password
    /**
     * @var null|\Password
     */
    public $pwd = null;

    # User profile picture!
    /**
     * @var null
     */
    public $pic = null;

    #user status
    /**
     * @var int
     */
    public $status = self::USER_ACTIVE;

    # Cover picture
    /**
     * @var null
     */
    public $cover = null;

    # Is this an admin of any church?
    /**
     * @var bool
     */
    public $admin = false;

    # A user's prayer list
    /**
     * @var array
     */
    public $prayers = [];

    # Count user's prayer list
    /**
     * @var int
     */
    public $prayerscnt = 0;

    # user account type for charging premium accounts
    /**
     * @var int
     */
    public $accountType = null;

    # A list of all churches this user admins
    /**
     * @var array
     */
    public $churches = [];

    # A list of all churchlist this user admins
    /**
     * @var array
     */
    public $churchlist = [];

    #leader details
    public $leader = [];


    #if leaders, number of followers
    public $followers = 0;

    /**if church leader, is this user verified?
     * var bool
     */
    public $verified=false;

    # Time?
    /**
     * @var \MongoDate|null
     */
    public $created_at = null;

    # Update?
    /**
     * @var null
     */
    public $updated_at = null;

    /**
     * Facebook id
     */
    public $fb_id = null;
    /**
     * @param null $uuid
     * @param null $pwd
     * @param array $position
     * @param null $fbId
     * */
    function __construct($uuid = null, $pwd = null, $fbId = null, $position = null) {
        if ($uuid) {
            # Set PK
            $this->_id = new MongoId();

            #fbid
            $this->fb_id = $fbId;

            # Make a name object!
            $this->name = new Name();


            $this->url = $this->generateSeoFriendlyUrl($this->name->first,$this->name->last);

            #set the church leader
            if(isset($_REQUEST['leader']) && $_REQUEST['leader'] === 'on'){
                if(isset($_REQUEST['position'])){
                    $position = $_REQUEST['position'];
                }
                $perm = $this->getUid();
                $this->leader = new Leader($perm, $position);
            }

            # Make a phone object!
            if (isset($_REQUEST['phone'])) {
                $this->phone[] = new Phone(null, true, md5((string)new MongoId()));
            }

            # Make an email object!
            if (isset($_REQUEST['email']) || !isset($_REQUEST['fb_id']))
            {
                $this->mail[] = new Email(null, true, md5((string)new MongoId()));
            }

            #City object
            if (isset($_REQUEST['city'])) {
                $this->city = filter_input(INPUT_POST, 'city');
            }

            #country object
            if (isset($_REQUEST['country'])) {
                $this->country = filter_input(INPUT_POST, 'country');
            }

            # Make password!
            if (isset($_REQUEST['password']) || !isset($_REQUEST['fb_id']))
            {
                $this->pwd = new Password($pwd);
            }

            # Set time of creation
            $this->created_at = new MongoDate();
        }
    }


    /**
     * Create a user object from an array object
     *
     * @param $user
     * @return null|User
     */
    public static function createFromObject($user){
        $result = null;
        if ($user && is_array($user)) {
            $result = new User();
            foreach ($user as $key => $value) {
                $result->{$key} = $value;
            }
            // dd($result);
            // dd($result->pic);
            # Is there a user pic?
            if (!$result->pic) {

                $result->pic = Controller::USER_DEFAULT_PIC;

            } else {
                # Scale a pic to default 120x120

                $result->pic = Utils::scaleImage($result->pic, Image::getOptions(Image::TYPE_PIC));
            }
            if (!$result->cover) {

                $result->cover = Controller::USER_DEFAULT_COVER;


            } else {
                # Scale cover image to default 1000 x 300
                $result->cover = Utils::scaleImage($result->cover, Image::getOptions(Image::TYPE_COVER));
            }

            # Is it own?
            $result->self = isset($_SESSION[KS_OWNER]) && (string)$result->_id === (string)$_SESSION[KS_OWNER];
        }
        return $result;
    }
    /**
     * Get active user
     */
    public static function getActiveUser(){
        $user = null;
        if (isset($_SESSION[KS_OWNER])) {
            if (is_array($_SESSION[ KS_OWNER ]) && isset($_SESSION[ KS_OWNER ]['church'])) {
                $church = $_SESSION[KS_OWNER]['church'];

                # Set session with the admins id
                $userId = $church->superadmin['_id'];
                Utils::keshaSession($userId);

                # Save user
                $user = User::createFromObject($church->superadmin);
                $user->save();

                # Update church - wholesale
                $church->superadmin = $userId;
                $church->save(Service::COLLECTION_CHURCHES);

                return $user;
            }
            $user = User::find($_SESSION[KS_OWNER]);

            # Does a user has a church?
            if (!$user->churches) {
                $user->churches[] = Utils::DEFAULT_CHURCH_ID;
            }
        }
        return $user;
    }


    public function generateSeoFriendlyUrl($firstname,$lastname){
        $result = strtolower($firstname)."-".strtolower($lastname);
        //check if name exists
        $usersrv = new UserService();
        $records = $usersrv->getRecords(array('url'=>$result), array('updated_at' => 0));

        while($records->count() > 0){
            $newRecordCount = ($records->count()) + 1;
            $result = $firstname."-".$lastname."-".$newRecordCount;
            $records = $usersrv->getRecords(array('url'=>$result), array('updated_at' => 0));
        }
        return $result;
    }

    /**
     * @return bool
     */
    public function getChurch () {
        return Church::find(array_get($this->churches, 0, Utils::DEFAULT_CHURCH_ID));
    }
}