<?php

/* ~
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
 * Ref: 
 * http://www.phpgang.com/how-to-generate-qr-code-in-php_340.html <- Generate QR
 * http://www.phpgang.com/how-to-decode-qr-code_344.html <- Decode QR
 * 
 */

Class QRCodeService extends BaseService{
    //QR Code
    protected $size;
    protected $data;
    protected $encoding;
    protected $errorCorrectionLevel;
    protected $marginInRows;
    protected $debug;
    
    function __construct($data=MD_D,$size='300',$encoding='UTF-8',$errorCorrectionLevel='L',$marginInRows=4,$debug=false) {
        parent::__construct();
        $this->data=urlencode($data); 
        $this->size=($size>100 && $size<800)? $size : 300; 
        $this->encoding=($encoding == 'Shift_JIS' || $encoding == 'ISO-8859-1' || $encoding == 'UTF-8') ? $encoding : 'UTF-8'; 
        $this->errorCorrectionLevel=($errorCorrectionLevel == 'L' || $errorCorrectionLevel == 'M' || $errorCorrectionLevel == 'Q' || $errorCorrectionLevel == 'H') ?  $errorCorrectionLevel : 'L';
        $this->marginInRows=($marginInRows>0 && $marginInRows<10) ? $marginInRows:4; 
        $this->debug = ($debug==true)? true:false; 
    }
    
    public function generate(){  
        $QRLink = "https://chart.googleapis.com/chart?cht=qr&chs=".$this->size."x".$this->size."&chl=" . $this->data .  
                   "&choe=" . $this->encoding . 
                   "&chld=" . $this->errorCorrectionLevel . "|" . $this->marginInRows; 
        if ($this->debug){ 
            echo $QRLink;
        }
        return $QRLink; 
    }
    
    
}
