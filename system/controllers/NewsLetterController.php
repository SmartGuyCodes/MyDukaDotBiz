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


class NewsLetterController extends UserService implements Controller{
    function __construct(){
        parent::__construct();
    }

    public function subscribeNewsLetter(){
        $result = [];
        $MailService = new MailService;

        $name = trim(filter_input(INPUT_POST, 'uname'));
        $toEmail =  trim(filter_input(INPUT_POST, 'email'));

        $this->assign('dukad', MD_D);
        $this->assign('user', $name);
        $this->assign('emblem', 'www.myduka.biz/cdn/logo.png');
        $this->assign('copy', Utils::myDukaCopyright());
        $this->assign('address', DUKA_ADDRESS);
        $subject = "My Duka Dot Biz Newsletter Subscription";
        $body = $this->fetch('emails/subscription.tpl');

        $altBody = "Newsletter Subscription";
        $wyslij = $MailService->mydukaMailer($subject, $toEmail, $body, $altBody);
        if($wyslij = 1){
            #Now save the mail
            $MailService->saveSubscriptionMail($name, $toEmail, $wyslij);
            $result['msg'] = 'Your message has been successfully sent.';
        }

        header('Content-type: application/json');
        echo $this->getJsonResponse($result);
    }

    function run(){
        $qry = isset($_REQUEST['query']) ? trim(filter_input(INPUT_GET, 'query')) : NULL;
        switch($qry){
            case NULL:
            case 'subscribe':
                $this->subscribeNewsLetter();
            break;
            default:
                die('404');
            break;
        }
    }
}