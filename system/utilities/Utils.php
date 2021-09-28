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

class Utils {
    /**
     * @constant number
     *
     * MyDuka.Biz copyright year start
     */
    const COPYRIGHT_YEAR = 2016;

    /**
     * @constant number
     *
     * Twitter base URL
     */
    const SOCIAL_PROFILE_TWITTER = 'https://twitter.com/';

    /**
     * @constant number
     *
     * Facebook base URL
     */
    const SOCIAL_PROFILE_FB = 'https://facebook.com/';

    function __construct() {
        # Run some inits here
    }

    /**
     * MyDuka error handler
     * @param Exception $e
     * @return Message
     */
    public static function myDukaErrorHandler(Exception $e) {
        $msg = $e -> getMessage();

        return $msg;
    }

    /**
     * MyDuka customised Copyright statement
     * @return string
     */
    public static function myDukaCopyright() {
        $year = date('Y');
        $copy = self::COPYRIGHT_YEAR;

        if ((int)$year > self::COPYRIGHT_YEAR) {
            $copy .= " - $year";
        }
        return sprintf(COPY, $copy);
    }

    /**
     * Logout a user; kill session!
     */
    public static function logout() {
        if (isset($_SESSION[MD_OWNER])) {
            $_SESSION[MD_OWNER] = array();
            unset($_SESSION[MD_OWNER]);
        }
        header("Location: " . MD_D);
    }

    /**
     * Begin a new user session
     * @param $value
     */
    public static function myDukaSession($value) {
        # Regenerate a session id
        session_regenerate_id();
        $_SESSION[MD_OWNER] = $value;
    }

    /**
     * 1) one alphabet.
     * 2) followed by 5 numeric values
     * 3) followed by first two should be fixed "MD-"
     */
    public static function skuGenerator(){
        //some geeky simple code here brother ;-)
        $start = 'MD-';
        $characters = array_merge(range('A','Z'), range('0','9'));
        for ($i = 0; $i < 6; $i++) {
            $rand = mt_rand(0, count($characters)-1);
            $start .= $characters[$rand];
        }
        return $start;
    }

    #get numerals only from a string
    public static function getNumerals ($str) {
        preg_match_all('/\d+/', $str, $matches);
        return $matches[0];
    }

    #get numerals only from a string
    public static function getPrice ($str) {
        preg_match_all('/\d+/', $str, $matches);
        return $matches;
    }
}
