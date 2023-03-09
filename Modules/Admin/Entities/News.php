<?php
namespace Modules\Admin\Entities;

class News extends BaseModel
{
    protected $is_deleted   = true;
    protected $table = 'news';
    protected $primaryKey = 'id';

    const  DEACTIVE = 0;
    const  ACTIVE = 1;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'content',
        'alias',
        'keywords',
        'image_url',
        'image_location',
        'image_location_100',
        'image_location_300',
        'image_location_1000',
        'status',
        'is_index',
        'view_count',
        'category_id',
        'is_deleted',
        'updated_at',
        'meta_title',
        'meta_description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
//    public static function getListAll($filter)
//    {
//        $sql = self::select('news.*')
//            ->where('news.is_deleted', 0);
//
//        if (!empty($filter['keyword']) && !empty($filter['search']))
//        {
//            $sql->where(function ($query) use ($filter)
//            {
//                $query->where('news.name', 'LIKE', '%' . $filter['keyword'] . '%');
//                $query->orWhere('news.name', 'LIKE', '%' . $filter['search'] . '%');
//            });
//        }
//        else if(!empty($filter['keyword']))
//        {
//            $sql->where(function ($query) use ($filter)
//            {
//                $query->where('news.name', 'LIKE', '%' . $filter['keyword'] . '%');
//            });
//        }
//        else if(!empty($filter['search']))
//        {
//            $sql->where(function ($query) use ($filter)
//            {
//                $query->where('news.name', 'LIKE', '%' . $filter['search'] . '%');
//            });
//        }
//        $date_from = $filter['date_from'] ?? '';
//        if ($date_from) {
//            $date_from = date('Y-m-d 00:00:00', strtotime($date_from));
//            $sql->where('news.created_at', '>=', $date_from);
//        }
//
//        $date_to = $filter['date_to'] ?? '';
//        if ($date_to) {
//            $date_to = date('Y-m-d 23:59:59', strtotime($date_to));
//            $sql->where('news.created_at', '<=', $date_to);
//        }
//
//        $total = $sql->count();
//
//        $data = $sql->skip($filter['offset'])
//            ->take($filter['limit'])
//            ->orderBy($filter['sort'], $filter['order'])
//            ->get()
//            ->toArray();
//
//        return ['total' => $total, 'data' => $data];
//    }
}
