<?php

namespace Modules\Front\Http\Controllers;

use App\Helpers\General;
use Modules\Admin\Entities\Banner;
use PDF;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\LevelCourse;
use Modules\Admin\Entities\Course;
use Modules\Admin\Entities\Majors;
use Modules\Admin\Entities\ProfileSubmited;
use Modules\Admin\Entities\Ranking;
use Modules\Admin\Entities\School;
use Modules\Admin\Entities\News;
use Modules\Admin\Entities\Country;
use Modules\Admin\Entities\Contacts;
use Modules\Admin\Entities\StudyAbroad;
use Modules\Admin\Entities\LandingPagePositions;
use Modules\Admin\Entities\LandingPagePositionImages;
use Modules\Admin\Entities\ProfileAbroad;
use Illuminate\Validation\Rule;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    protected $data = []; // the information we send to the view

    protected $repo;
    protected $view;
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->data['controllerName'] = 'front::home';
    }
    public function index(Request $request)
    {
        $this->data['title']         = "Trang chủ";
        return view("{$this->data['controllerName']}.index");
    }
    public function phpcourse(){
        return view("{$this->data['controllerName']}.phpCourse");
    }
    public function jscourse(){
        return view("{$this->data['controllerName']}.jsCourse");
    }
    public function laravelcourse(){
        return view("{$this->data['controllerName']}.laravelCourse");
    }
    public function nodejscourse(){
        return view("{$this->data['controllerName']}.nodejsCourse");
    }
    public function reactcourse(){
        return view("{$this->data['controllerName']}.reactCourse");
    }
    public function phpAdcourse(){
        return view("{$this->data['controllerName']}.phpAdCourse");
    }
    public function create_contacts(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            $rules = [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'national' => 'required',
            ];

            $valid = Validator::make($data, $rules,["Error"]);
            if ($valid->fails())
            {
                return response()->json([
                    'rs' => 0,
                    'msg' => 'Dữ liệu nhập không hợp lệ',
                    'errors' => $valid->errors()->messages(),
                    'redirect_url' => route('trang-chu')
                ]);
            }
            $rs = Contacts::create($data);
            if($rs)
            {
                return response()->json([
                    'rs' => 1,
                    'msg' => 'Gửi thành công ',
                    'redirect_url' => route('trang-chu')
                ]);

            }
        }
    }
}
