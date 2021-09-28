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

Class ImageService extends BaseService{
    function __construct () {
        parent::__construct();
    }

    public function uploadImage(){
        ############ Configuration #################################################################################################################################
        $img_info["image_max_size"]                 = 500; //Maximum image size (height and width)
        $img_info["thumbnail_size"]                 = 150; //Thumbnails will be cropped and resized to 200x200 pixels
        $img_info["thumbnail_prefix"]               = "thumb_"; //thumb Prefix
        $img_info["destination_folder"]             = 'home/Websites/ajax-img-upload/ajax-image-upload/uploads/'; //Image directory ends with / (slash)
        $img_info["thumbnail_destination_folder"]   = 'home/Websites/ajax-img-upload/ajax-image-upload/uploads/thumbs/'; //Thumbnail directory ends with / (slash)
        $img_info["quality"]                        = 90; //jpeg quality
        $img_info["random_file_name"]               = true; //randomize each file name
        ############################################################################################################################################################

        //Accept HTTP POST comming as Ajax request
        if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

            //Check empty file field
            if(!isset($_FILES['image_file']) || !is_uploaded_file($_FILES['image_file']['tmp_name'])){
                die('Image file is Missing!');
            }

            $img_info["image_data"] = $_FILES['image_file']; //file input
            $img_info["unique_id"]  = uniqid(); //unique id for random filename

            //Check destination dir
            if(!file_exists($img_info["destination_folder"])){
                die( $img_info["destination_folder"]. " - (Folder doesn't exist!)");
            }

            //Check thumbnail destination dir
            if(!file_exists($img_info["thumbnail_destination_folder"])){
                die( $img_info["thumbnail_destination_folder"]. " - (Folder doesn't exist!)");
            }

            //Get image size info from a valid image file
            $im_info = getimagesize($img_info["image_data"]["tmp_name"]);
            if($im_info){
                $img_info["image_width"]    = $im_info[0]; //image width
                $img_info["image_height"]   = $im_info[1]; //image height
                $img_info["image_type"]     = $im_info['mime']; //image type
            }else{
                die("Make sure image file is valid!");
            }

            $img_info["img_res"] = get_image_resource($img_info);

            //Resize image file
            if($img_info["img_res"]){
                $resize_image = resizeImage($img_info); //call image resize function
                $generate_thumb = gen_thumbnail($img_info); //call thumbnail generator function

                if($resize_image && $generate_thumb){
                    echo "<img src=\"uploads/$resize_image\"><br />";
                    echo "<img src=\"uploads/thumbs/$generate_thumb\">";
                }
            }else{
                die("Error creating image resource!");
            }
        }
    }

    #####  Function to proportionally resize images #####
    public function resizeImage($img_info){
        if($img_info["image_width"] <= 0 || $img_info["image_height"] <= 0){
            return false; //return false if nothing to resize
        }

        //Path for saving resized images
        if($img_info["random_file_name"]){
            $new_image_name = $img_info["unique_id"] . get_extention($img_info);
        }else{
            $new_image_name = $img_info["image_data"]["name"];
        }

        $img_info["save_dir"] = $img_info["destination_folder"] . $new_image_name;

        //Do not resize if image is smaller than max size
        if($img_info["image_width"] <= $img_info["image_max_size"] && $img_info["image_height"] <= $img_info["image_max_size"]){
            if(save_image($img_info)){
                return $new_image_name;
            }
        }

        //Construct a proportional size of new image
        $image_scale    = min($img_info["image_max_size"]/$img_info["image_width"], $img_info["image_max_size"]/$img_info["image_height"]);
        $new_width      = ceil($image_scale * $img_info["image_width"]);
        $new_height     = ceil($image_scale * $img_info["image_height"]);

        //Create a new true color image
        $img_info["canvas"]  = imagecreatetruecolor($new_width, $new_height);

        //Copy and resize part of an image with resampling
        if(imagecopyresampled($img_info["canvas"], $img_info["img_res"], 0, 0, 0, 0, $new_width, $new_height, $img_info["image_width"], $img_info["image_height"])){
            if(save_image($img_info)){
                return $new_image_name;
            }
        }
    }

    ##### Function to create thumbnails! images will be cropped and exact size ######
    function genThumbnail($img_info){
        if($img_info["image_width"] <= 0 || $img_info["image_height"] <= 0){
            return false; //return false if nothing to resize
        }

        //Path for saving resized images
        if($img_info["random_file_name"]){
            $new_image_name = $img_info["thumbnail_prefix"].$img_info["unique_id"] . get_extention($img_info);
        }else{
            $new_image_name = $img_info["thumbnail_prefix"] . $img_info["image_data"]["name"];
        }

        $img_info["save_dir"] = $img_info["thumbnail_destination_folder"] . $new_image_name;

        //Offsets
        if( $img_info["image_width"] > $img_info["image_height"]){
            $y_offset = 0;
            $x_offset = ($img_info["image_width"] - $img_info["image_height"]) / 2;
            $s_size     = $img_info["image_width"] - ($x_offset * 2);
        }else{
            $x_offset = 0;
            $y_offset = ($img_info["image_height"] - $img_info["image_width"]) / 2;
            $s_size = $img_info["image_height"] - ($y_offset * 2);
        }

        //Create a new true color image
        $img_info["canvas"] = imagecreatetruecolor($img_info["thumbnail_size"], $img_info["thumbnail_size"]);

        //Copy and resize part of an image with resampling
        if(imagecopyresampled($img_info["canvas"], $img_info["img_res"], 0, 0, $x_offset, $y_offset, $img_info["thumbnail_size"], $img_info["thumbnail_size"], $s_size, $s_size)){
            if(save_image($img_info)){
                return $new_image_name;
            }
        }
    }

    ##### Saves images to destination directory ######
    function saveImage($img_info){
        switch(strtolower($img_info["image_type"])){
            case 'image/png':
                imagepng($img_info["canvas"], $img_info["save_dir"]); //save png file
                break;

            case 'image/gif':
                imagegif($img_info["canvas"], $img_info["save_dir"]); //save gif file
                break;

            case 'image/jpeg': case 'image/pjpeg':
            imagejpeg($img_info["canvas"], $img_info["save_dir"], $img_info["quality"]);  //save jpeg file
            break;

            default:
                return false;
        }

        imagedestroy($img_info["canvas"]); //free-up memory
        return true;
    }

    ##### Create a new image resource from file #####
    function getImageResource($img_info){

        switch($img_info["image_type"]){
            case 'image/png':
                return imagecreatefrompng($img_info["image_data"]["tmp_name"]);
            case 'image/gif':
                return imagecreatefromgif($img_info["image_data"]["tmp_name"]);
            case 'image/jpeg':
            case 'image/pjpeg':
                return imagecreatefromjpeg($img_info["image_data"]["tmp_name"]);
            default:
                return false;
        }
    }

    ##### Returns file extension from given image type ######
    function getExtension($img_info){
        switch($img_info["image_type"]){
            case 'image/gif':
                return ".gif";
            case 'image/jpeg':
            case 'image/pjpeg':
                return ".jpg";
            case 'image/png':
                return ".png";
        }
    }
}