<?php
namespace Modules\Admin\Repositories\Setting;

use App\Repositories\BaseRepository;
use Modules\Admin\Entities\Setting;

class SettingRepository extends BaseRepository implements SettingRepositoryInterface
{
    public function getModel()
    {
        return Setting::class;
    }

    public function get_status_options() {
        return [
            '0' => 'Chờ duyệt',
            '1' => 'Đã kích hoạt',
        ];
    }

    public function getObjectByKey($key = '') {
        $object = Setting::select('*')
            ->where('key', $key)
            ->where('active', 1)
            ->first();
        if(!empty($object))
            return $object->toArray();
        return array();
    }

    public function getObjectById($id) {
        $object = Setting::select('*')
            ->where('id', $id)
            ->where('active', 1)
            ->first();

        if(!empty($object))
            return $object->toArray();
        return array();
    }

    public function getObjectsByKeys($keys) {
        $objects = Setting::select('id', 'key', 'value', 'field')
            ->whereIn('key', $keys)
            ->where('active', 1)
            ->get();

        $rs = [];
        foreach ($objects as $item) {
            $rs[$item->key] = $item->toArray();
        }

        return $rs;
    }
    public function getAllSettings() {
        $tmp = self::all()->toArray();

        $objects = [];
        foreach ($tmp as $item) {
            $objects[$item['key']] = $item;
        }

        return $objects;
    }
}