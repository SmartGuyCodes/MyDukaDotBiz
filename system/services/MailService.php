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

require_once  __APIS__ . sprintf('%1$sphpmailer%1$sclass.phpmailer.php', DS);

class MailService extends BaseService{
    function __construct(){
        parent::__construct();
    }

    #Email switches
    const SWITCH_ONE = 1; #REGISTRATION SWITCH
    const SWITCH_TWO = 2; #ORDERS SWITCH
    const SWITCH_FOUR = 4; #AUCTIONS SWITCH
    const SWITCH_EIGHT = 8; #SUPPORT SWITCH
    const SWITCH_SIXTEEN = 16; #PROMOTIONS SWITCH
    const SWITCH_THIRTY_TWO = 32; #NEWSLETTER SWITCH
    const SWITCH_SIXTY_FOUR = 64; #STAFF SWITCH
    const SWITCH_ONE_TWENTY_EIGHT = 128; #RESERVED SWITCH
    const SWITCH_TWO_FIFTY_SIX = 256; #DEVELOPER SWITCH

    const smtpServer = 'mail.myduka.biz';
    const userName = "news@myduka.biz";
    const password = "@Admin2016!";
    const from = "news@myduka.biz";
    const fromName = "My Duka Dot Biz";
    const SMTP_PORT = 26;

    const smtpServer1 = 'mail.myduka.biz';
    const userName1 = "news@myduka.biz";
    const password1 = "@Admin2016!";
    const from1 = "news@myduka.biz";
    const fromName1 = "My Duka Dot Biz";
    const SMTP_PORT1 = 26;

    const smtpAuctionServer1 = 'mail.myduka.biz';
    const userAuctionName1 = "auction@myduka.biz";
    const passwordAuction = "Liduka2016!";
    const fromAuction = "auction@myduka.biz";
    const fromNameAuction = "My Duka Dot Biz RTB";
    const SMTP_PORT_AUCTION = 26;

    /**
     * @param string $subject
     * @param string $toEmail recipient
     * @param string $template
     * @param string $textTemplate for the email template
     *
     * @return bool
     */
    #Configure this mailer fxn to cater for all the my duka dot biz mail with switches.
    public static function mydukaMailer($subject, $toEmail, $template, $textTemplate) {
        $Mail = new PHPMailer(TRUE);
        $Mail->IsSMTP();
        // Sets SMTP server
        $Mail->SMTPDebug = 2;
        // 2 to enable SMTP debug information
        $Mail->SMTPAuth = TRUE;

        // enable SMTP authentication
        //$Mail->SMTPSecure = "tls";
        //$Mail->SMTPSecure = "ssl";
        // Use SMTP
        $Mail->Host = self::smtpServer;
        //Secure conection
        $Mail->Port = self::SMTP_PORT;
        // set the SMTP port
        $Mail->Username = self::userName;
        // SMTP account username
        $Mail->Password = self::password;

        // SMTP account password
        $Mail->Priority = 1;

        // Highest priority - Email priority (1 = High, 3 = Normal, 5 = low)
        $Mail->CharSet = 'UTF-8';
        $Mail->Encoding = '8bit';
        $Mail->Subject = $subject;
        $Mail->ContentType = 'text/html; charset=utf-8\r\n';
        $Mail->From = self::from;
        $Mail->FromName = self::fromName;
        $Mail->WordWrap = 900; // RFC 2822 Compliant for Max 998 characters per line

        $Mail->AddAddress($toEmail); // To:
        $Mail->isHTML(TRUE);
        $Mail->Body = $template;
        $Mail->AltBody = $textTemplate;
        $Mail->SMTPDebug = FALSE;

        try {
            $Mail->Send();
        } catch (Exception $e) {
            echo $e->getMessage();
            $Mail->SmtpClose();

            return false;
        }
        $Mail->SmtpClose();

        return !$Mail->IsError();
    }

    /**
     * @param string $subject
     * @param string $toEmail recipient
     * @param string $template
     * @param string $textTemplate for the email template
     *
     * @return bool
     */
    public static function mydukaBidMailer($subject, $toEmail, $template, $textTemplate) {
        $Mail = new PHPMailer(TRUE);
        $Mail->IsSMTP();
        // Sets SMTP server
        $Mail->SMTPDebug = 2;
        // 2 to enable SMTP debug information
        $Mail->SMTPAuth = TRUE;

        // Use SMTP
        $Mail->Host = self::smtpAuctionServer1;
        //Secure connection
        $Mail->Port = self::SMTP_PORT_AUCTION;
        // set the SMTP port
        $Mail->Username = self::userAuctionName1;
        // SMTP account username
        $Mail->Password = self::passwordAuction;

        // SMTP account password
        $Mail->Priority = 1;

        // Highest priority - Email priority (1 = High, 3 = Normal, 5 = low)
        $Mail->CharSet = 'UTF-8';
        $Mail->Encoding = '8bit';
        $Mail->Subject = $subject;
        $Mail->ContentType = 'text/html; charset=utf-8\r\n';
        $Mail->From = self::fromAuction;
        $Mail->FromName = self::fromNameAuction;
        $Mail->WordWrap = 900; // RFC 2822 Compliant for Max 998 characters per line

        $Mail->AddAddress($toEmail); // To:
        $Mail->isHTML(TRUE);
        $Mail->Body = $template;
        $Mail->AltBody = $textTemplate;
        $Mail->SMTPDebug = FALSE;

        try {
            $Mail->Send();
        } catch (Exception $e) {
            echo $e->getMessage();
            $Mail->SmtpClose();

            return false;
        }
        $Mail->SmtpClose();

        return !$Mail->IsError();
    }

    /**Send registration confirmation email
     * @param $temat
     * @param $regEmail
     * @param $tpl
     * @param $textTpl
     * @return bool
     */
    Public Static function registrationMail($temat, $regEmail, $tpl, $textTpl){
        $Mail = new PHPMailer(TRUE);
        $Mail->IsSMTP();
        
        // Sets SMTP server
        //$Mail->SMTPDebug = 2;
        //$mail->Debugoutput = 'html';
        
        // 2 to enable SMTP debug information
        $Mail->SMTPAuth = true;
        
        // Use SMTP
        $Mail->Host = self::smtpServer;
        
        //Secure connection
        $Mail->Port = self::SMTP_PORT;
        
        //Set the encryption system to use - ssl (deprecated) or tls
        $Mail->SMTPSecure = 'ssl';
        
        // SMTP account username
        $Mail->Username = self::userName;
        
        // SMTP account password
        $Mail->Password = self::password;

        // Highest priority - Email priority (1 = High, 3 = Normal, 5 = low)
        $Mail->Priority = 1;

        $Mail->CharSet = 'UTF-8';
        $Mail->Encoding = '8bit';
        $Mail->Subject = $temat;
        $Mail->ContentType = 'text/html; charset=utf-8\r\n';
        $Mail->From = self::from;
        $Mail->FromName = self::fromName;
        $Mail->WordWrap = 900; // RFC 2822 Compliant for Max 998 characters per line

        $Mail->AddAddress($regEmail); // To:
        $Mail->isHTML(TRUE);
        $Mail->Body = $tpl;
        $Mail->AltBody = $textTpl;
        $Mail->SMTPDebug = 2;

        try {
            $Mail->Send();
        } catch (Exception $e) {
            echo $e->getMessage();
            $Mail->SmtpClose();

            return false;
        }
        $Mail->SmtpClose();

        return !$Mail->IsError();
    }

    #add mail to db after subscription
    public function saveSubscriptionMail($name, $mail, $delivery = 0){
        try{
            $sql = "insert into subscriptions(name, email, delivery, created_at)
                    values (:uname, :mail, :deli, now())";
            $stmt = $this->runQuery($sql);
            $stmt->bindParam(':uname', $name);
            $stmt->bindParam(':mail', $mail);
            $stmt->bindParam(':deli', $delivery);
            $result = $stmt->execute();
        }
        catch(PDOException $e){
            $result = $e->getMessage();
        }
        return $result;
    }
}