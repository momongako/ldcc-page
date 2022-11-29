<?php

namespace App\Lib;

use Illuminate\Support\Facades\DB;
use App\Models\Category;

class BHelp
{
    /**
     * @param $key
     * @param null $default
     * @return mixed|null
     */
    public static function getConfigSetting ($key,$default = null) {
        $config = DB::table('configs')->where('key',$key)->first();
        if($config) return $config->value;
        return $default;
    }

    public static function callAPI($method, $url, $data, $headers = false){
        $curl = curl_init();
        switch ($method){
           case "POST":
              curl_setopt($curl, CURLOPT_POST, 1);
              if ($data)
                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
              break;
           case "PUT":
              curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
              if ($data)
                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);                              
              break;
           default:
              if ($data)
                 $url = sprintf("%s?%s", $url, http_build_query($data));
        }
 
         // OPTIONS:
         curl_setopt($curl, CURLOPT_URL, $url);
         if(!$headers){
             curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                 'Content-Type: application/json',
             ));
         }else{
             $arr = array(
                 $headers
             );
             curl_setopt($curl, CURLOPT_HTTPHEADER, $arr);
        }
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
 
        // EXECUTE:
        $result = curl_exec($curl);
        if(!$result){die("Connection Failure");}
        curl_close($curl);
        return $result;
    }

    public static function getMenu () {
        $menu = DB::table('menus')->select(['id','name','link','parent_id','sort_number'])->where('status',1)->where('parent_id',0)->orderBy('sort_number', 'ASC')->get();
        $arrMenu = [];
        foreach($menu as $key => $value){
            $arrMenu[$key]['id'] = $value->id;
            $arrMenu[$key]['name'] = $value->name;
            $arrMenu[$key]['link'] = url('/').$value->link;
            $arrMenu[$key]['url'] = str_replace("/", "",$value->link);
            $arrMenu[$key]['parent_id'] = $value->parent_id;
            $arrMenu[$key]['sort_number'] = $value->sort_number;
            $menusub = DB::table('menus')->select(['id','name','link','parent_id','sort_number'])->where('status',1)->where('parent_id',$value->id)->orderBy('sort_number', 'ASC')->get();
            if($menusub){
                foreach($menusub as $key1 => $value1){
                    $arrMenu[$key]['sub'][$key1]['id'] = $value1->id;
                    $arrMenu[$key]['sub'][$key1]['name'] = $value1->name;
                    $arrMenu[$key]['sub'][$key1]['link'] = url('/').$value1->link;
                    $arrMenu[$key]['sub'][$key1]['url'] = str_replace("/", "",$value1->link);
                    $arrMenu[$key]['sub'][$key1]['parent_id'] = $value1->parent_id;
                    $arrMenu[$key]['sub'][$key1]['sort_number'] = $value1->sort_number;
                }
            }
        }
        
        return $arrMenu;
    }
    public static function getLinkCustom ($xx, $post) {
        if($xx == 'post'){
            $linkC = url('/').'/tt/'.$post->category->slug.'/'.$post->slug;
            
        }

        if($xx == 'category'){
            if(!empty($post->category->slug)){
                if($post->category->slug == 'tin-tuc'){
                    $linkC = url('/').'/'.$post->category->slug;
                }elseif($post->category->slug == 'danh-muc-kien-thuc'){
                    $linkC = url('/').'/kien-thuc';
                }else{
                    $linkC = url('/').'/cat/'.$post->category->slug;
                }
                
            }else{
                if($post->slug == 'tin-tuc'){
                    $linkC = url('/').'/'.$post->slug;
                }elseif($post->slug == 'danh-muc-kien-thuc'){
                    $linkC = url('/').'/kien-thuc';
                }else{
                    $linkC = url('/').'/cat/'.$post->slug;
                }
            }
        }
        
        if($xx == 'tag'){
            $linkC = url('/').'/tag/'.$post;
        }

        if($xx == 'img'){
            if(strpos($post, '://') !== false){
                $linkC = $post;
            }else{
                if($post == '' || $post == '/frontend/assets/images/hex-image.jpg' || $post == '/frontend/assets/images/image-blog/related-1.png'){
                    $post = '/img/default.jpg';
                }
                $linkC = env('AWS_URL').''.$post;
            }
        }
        
        return $linkC;
    }

    
    public static function getBreadcrums ($xx, $post) {
        
        // Trang chi tiet
        if($xx == 'post'){
            $categoryCha = Category::where('id',$post->category->id)->with('parent')->first();
            if(!empty($categoryCha->parent->name)){

                $categoryCha1 = Category::where('id',$categoryCha->parent->id)->with('parent')->first();
                if(!empty($categoryCha1->parent->name)){                    
                    $htmlx = '<ul class="breadcrum">
                            <li class="link"><a href="'.url('/').'"> Trang chủ </a></li>

                            <li><i class="fa fa-angle-right"></i></li>
                            <li class="link"><a href="'.\App\Lib\BHelp::getLinkCustom('category', $categoryCha1->parent).'">'.$categoryCha1->parent->name.'</a></li>
                            
                            <li><i class="fa fa-angle-right"></i></li>
                            <li class="link"><a href="'.\App\Lib\BHelp::getLinkCustom('category', $categoryCha->parent).'">'.$categoryCha->parent->name.'</a></li>
    
                            <li><i class="fa fa-angle-right"></i></li>
                            <li class="last"><a href="'.\App\Lib\BHelp::getLinkCustom('category', $post).'">'.$post->category->name.'</a></li>
    
                            <!--<li><i class="fa fa-angle-right"></i></li>
                            <li class="last"><span>'.$post->title.'</span></li>-->
                        </ul>';
                }else{
                    $htmlx = '<ul class="breadcrum">
                        <li class="link"><a href="'.url('/').'"> Trang chủ </a></li>
                        
                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="link"><a href="'.\App\Lib\BHelp::getLinkCustom('category', $categoryCha->parent).'">'.$categoryCha->parent->name.'</a></li>

                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="last"><a href="'.\App\Lib\BHelp::getLinkCustom('category', $post).'">'.$post->category->name.'</a></li>

                        <!--<li><i class="fa fa-angle-right"></i></li>
                        <li class="last"><span>'.$post->title.'</span></li>-->
                    </ul>';
                }
                
            }else{
                $htmlx = '<ul class="breadcrum">
                        <li class="link"><a href="'.url('/').'"> Trang chủ </a></li>

                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="last"><a href="'.\App\Lib\BHelp::getLinkCustom('category', $post).'">'.$post->category->name.'</a></li>
                        
                        <!--<li><i class="fa fa-angle-right"></i></li>
                        <li class="last"><span>'.$post->title.'</span></li>-->
                    </ul>';
            }
        }

        // trang list category
        if($xx == 'category'){
            $categoryCha = Category::where('id',$post->id)->with('parent')->first();
            if(!empty($categoryCha->parent->name)){

                $categoryCha1 = Category::where('id',$categoryCha->parent->id)->with('parent')->first();
                if(!empty($categoryCha1->parent->name)){
                    $htmlx = '<ul class="breadcrum">
                            <li class="link"><a href="/"> Trang chủ </a></li>
                            
                            <li><i class="fa fa-angle-right"></i></li>
                            <li class="link"><a href="'.\App\Lib\BHelp::getLinkCustom('category', $categoryCha1->parent).'">'.$categoryCha1->parent->name.'</a></li>

                            <li><i class="fa fa-angle-right"></i></li>
                            <li class="link"><a href="'.\App\Lib\BHelp::getLinkCustom('category', $categoryCha->parent).'">'.$categoryCha->parent->name.'</a></li>

                            <li><i class="fa fa-angle-right"></i></li>
                            <li class="last"><span>'.$post->name.'</span></li>
                        </ul>';
                }else{
                    $htmlx = '<ul class="breadcrum">
                            <li class="link"><a href="/"> Trang chủ </a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li class="link"><a href="'.\App\Lib\BHelp::getLinkCustom('category', $categoryCha->parent).'">'.$categoryCha->parent->name.'</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li class="last"><span>'.$post->name.'</span></li>
                        </ul>';
                }
            }else{
                $htmlx = '<ul class="breadcrum">
                        <li class="link"><a href="/"> Trang chủ </a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="last"><span>'.$post->name.'</span></li>
                    </ul>';
            }
        }
        
        // trang list tag
        if($xx == 'tag'){            
            $htmlx = '<ul class="breadcrum">
                        <li class="link"><a href="/"> Trang chủ </a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="last"><span>Tag: '.$post.'</span></li>
                    </ul>';
        }
        // trang list tag
        if($xx == 'search'){            
            $htmlx = '<ul class="breadcrum">
                        <li class="link"><a href="/"> Trang chủ </a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="last"><span>Search: '.$post.'</span></li>
                    </ul>';
        }
        return $htmlx;
    }



    public static function fileToS3($arrfile){
        // Establish connection with DreamObjects with an S3 client.
        // $awsacc = \Config::get('awsacc');
        $client = new S3Client([
            // 'version'     => \Config::get('awsacc_version'),
            'region'      => 'ap-southeast-1',
            'credentials' => [
                'key'      => 'AKIASR4L6JPWXUMPU7N6',
                'secret'   => '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',
            ]
        ]);


        // Creating an object
        $bucket = 'pronexus-media-files';
        $key = 'pdf/'.$arrfile['fileName'].'.pdf';        
        $file_Path = $arrfile['filePath'];
        try{
            $result = $client->putObject([
                'Bucket'     => $bucket,
                'Key'        => $key,
                'SourceFile' => $file_Path,
                'ACL'        => 'public',
            ]);
        } catch (S3Exception $e) {
            echo $e->getMessage() . "\n";
        }

        return $result;
    }
}
