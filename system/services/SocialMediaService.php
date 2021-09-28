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

require_once '../vendor/facebook/php-sdk-v4/src/Facebook/Facebook.php';

Class SocialMediaService extends BaseService{
    function __construct(){
        parent::__construct();
    }

    public function shareOnFacebook($msg, $ln, $pic, $name, $caption, $desc){
        $config = [];
        $config['appId'] = FB_ID;
        $config['secret'] = FB_SECRET;
        $config['default_graph_version'] = FB_GRAPH_VERSION;

        $fb = new \Facebook\Facebook($config);

        //define the post parameters here
        $params = [
            'access_token' => '', // see: https://developers.facebook.com/docs/facebook-login/access-tokens/
            'message' => $msg,
            'link' => $ln,
            'picture' => $pic,
            'name' => $name,
            'caption' => $caption,
            'description' => $desc
        ];

        #now post to fb
        try{
            //NB: Returns a 'Facebook\FaceboookResponse' Object
            //$fb->post('/me/feed', $params, '');
        }
        catch(\Facebook\FacebookSDKException $e){
            echo $e->getMessage();
        }
    }
}