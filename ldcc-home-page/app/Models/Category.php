<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
class Category extends Model
{

    protected $table = 'categories';
    protected $fillable = [
        'name',
        'description',
        'slug',
        'status',
        'type',
        'parent_id',
        'path',
        'deleted_at',
        'deactive_at'
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * @param $params
     * @return \Illuminate\Database\Query\Builder
     */
    public function getList ($params) {
        $configs = Category::with('parent');
        $configs->where('status',1);
        // 3 : HR  ; 4:Sale
        if (auth()->user()->type == 3){
            $configs->where('id','<>' ,3);
        }

        if (auth()->user()->type == 4){
            $configs->where('id','<>' ,2);
        }

        if (!empty($params['keyword'])) {
            $keyword = '%'.$params['keyword'].'%';
            $configs->whereRaw('((`name` like ?))',
                [$keyword,$keyword,$keyword]
            );
        }

        $configs->with('parent')->orderBy('created_at', 'desc');
        return $configs;
    }


    /**
     * @param $data
     */
    public function createCategory ($data) {
        if (!empty($data['parent'])) $data['parent_id'] = $data['parent'];
        if (empty($data['slug'])) $data['slug'] = str_slug($data['name']);
        $category = Category::where('slug',$data['slug'])->first();

        if ($category) {
            $numericalPrefix = 1;
            while(1){
                $newSlug = str_slug($data['name'])."-".$numericalPrefix++;

                $checkSlug = Category::where('slug', $newSlug)->exists(); //CHeck có trong DB chưa

                if(!$checkSlug){
                    $data['slug'] = $newSlug; //New Slug
                    break;
                }
            }
        } else {
            $data['slug'] = str_slug($data['name']);
        }

        Category::create($data);
    }

    /**
     * @param $id
     * @param $data
     */
    public function updateCategory ($id,$data) {
        $customer = Category::findOrFail($id);
        if (!empty($data['parent'])) { 
            $data['parent_id'] = $data['parent']; 
        }else{ 
            $data['parent_id'] = null;
        };
        if (empty($data['slug'])) $data['slug'] = str_slug($data['name']);
        $categoryCheck = Category::where('slug',$data['slug'])->first();

        if ($categoryCheck) {
            if($categoryCheck->id == $id && $categoryCheck->slug == $data['slug']){
                // ko can update(thực ra vẫn là data slug gửi lên)
            }else if($categoryCheck->id == $id && $categoryCheck->slug != $data['slug']){
                // update theo cai moi(thực ra vẫn là data slug gửi lên)
            }else if($categoryCheck->id != $id && $categoryCheck->slug == $data['slug']){
                // update theo số count post check

                $numericalPrefix = 1;
                while(1){
                    $newSlug = $data['slug']."-".$numericalPrefix++;

                    $checkSlug = Category::where('slug', $newSlug)->exists(); //CHeck có trong DB chưa

                    if(!$checkSlug){
                        $data['slug'] = $newSlug; //New Slug
                        break;
                    }
                }
            }else{
                $data['slug'] = $data['slug'].'-1';
            }
        }

        
        $customer->update($data);
    }

    /**
     * @param $id
     * @param $data
     */
    public function updateDeleteCategory ($id,$data) {
        $customer = Category::findOrFail($id);
        $customer->update($data);
    }

    public function parent () {
        return $this->belongsTo(Category::class, 'parent_id')->select(['id','name','description','slug']);
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function childrenCategories()
    {
        return $this->hasMany(Category::class, 'parent_id')->where('status',1)->with('childrenCategories');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }

    public function checkCountPostCategory($id) {
        // DB::enableQueryLog();
        $dbx = DB::table('posts')->select(DB::raw('count(*) as count'))->where('status','=',1)->where('category_id', $id)->get();
        // dd(DB::getQueryLog());
        return $dbx[0]->count;
    }

    public function getAllChildren ()
    {
        $sections = new Collection();

        foreach ($this->categories as $section) {
            if ($section->status) {
                $sections->push($section);
                $sections = $sections->merge($section->getAllChildren());
            }

        }

        return $sections;
    }

    /**
     * @return array
     */
    public function getAllChildrenIds () {
        $children = $this->getAllChildren();
        $ids = [$this->id];
        foreach ($children as $category) {
            if ($category->status) $ids[] = $category->id;
        }
        return $ids;
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id')
            ->select(['id','name as label','parent_id'])
            ->where('status',1)
            ->with('children');
    }
}
