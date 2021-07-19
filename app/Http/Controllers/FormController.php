<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\FormOne;
use App\Models\FormTwo;
use App\Models\FormThree;
use App\Models\FormFour;
use App\Models\FormFive;
use App\Models\FormSix;
use DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class FormController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

         $data = [
            'count_user' => '5',
            'menu'       => 'menu.v_menu_admin',
            'content'    => 'content.view_form',
            'title'    => 'Table Form'
        ];

        if ($request->ajax()) {
            $q_user = Form::select('*')->orderByDesc('created_at');
            return Datatables::of($q_user)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $url=route('form-list',$row->id);
                        $btn = '<div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="btn btn-sm btn-icon btn-outline-success btn-circle mr-2 edit editUser"><i class=" fi-rr-edit"></i></div>';
                        $btn = $btn.'<a href="'.$url.'"><div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="view" class="btn btn-sm btn-icon btn-outline-info btn-circle mr-2"><i class="ki ki-bold-menu"></i></div></a> ';

                         return $btn;
                    })
                    ->editColumn('status', function($row) {
                        if($row->status=='1'){
                            return "Deactive";
                        }else{
                            return "Active";
                        }
                    })

                    ->editColumn('count', function($row) {
                        if($row->status=='1'){
                            return "Deactive";
                        }else{
                            return "Active";
                        }
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('layouts.v_template',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Form::updateOrCreate(['id' => $request->form_id],
                [
                 'title' => $request->title,
                 'form_email' => $request->form_email,
                 'status' => $request->status,
                ]);

        return response()->json(['success'=>'Form saved successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $User = Form::find($id);
        return response()->json($User);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function formOne(Request $request){
        $data = [
            'count_user' => '',
            'menu'       => 'menu.v_menu_admin',
            'content'    => 'content.forms.form1',
            'title'    => 'Form'
        ];
        return view('layouts.v_template',$data);
    }


    public function getFormOneList(Request $request,$id){

        $Obj=Form::find($id);
        $content='';
            switch ($id) {
                case "1":
                    $content = "content.forms.form_one_list";
                    break;
                case "2":
                    $content = "content.forms.form_two_list";
                    break;
                case "3":
                    $content = "content.forms.form_three_list";
                    break;
                case "4":
                    $content = "content.forms.form_four_list";
                    break;
                case "5":
                    $content = "content.forms.form_five_list";
                    break;
                case "6":
                    $content = "content.forms.form_six_list";
                    break;
                default:
                    echo "Your favorite color is neither red, blue, nor green!";
                }

                $data = [
                    'count_user' => '',
                    'menu'       => 'menu.v_menu_admin',
                    'content'    => $content,
                    'title'    => $Obj->title,
                    'id'        => $Obj->id
                ];


        if ($request->ajax()) {

            switch ($id) {
                case "1":
                    $q_user = FormOne::select('*')->orderByDesc('created_at');
                    break;
                case "2":
                    $q_user = FormTwo::select('*')->orderByDesc('created_at');
                    break;
                case "3":
                    $q_user = FormThree::select('*')->orderByDesc('created_at');
                    break;
                case "4":
                    $q_user = FormFour::select('*')->orderByDesc('created_at');
                    break;
                case "5":
                    $q_user = FormFive::select('*')->orderByDesc('created_at');
                    break;
                case "6":
                    $q_user = FormSix::select('*')->orderByDesc('created_at');
                    break;
                default:
                    echo "Your favorite color is neither red, blue, nor green!";
                }



            return Datatables::of($q_user)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $url=route('form-list',$row->id);
                        $btn ='<a href="javascript:;"><div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="view" class="btn btn-sm btn-icon btn-outline-info btn-circle mr-2 more-details"><i class="ki ki-bold-menu"></i></div></a> ';

                         return $btn;
                    })

                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('layouts.v_template',$data);


    }


    public function formonedetail(Request $request, $id){


        $data = DB::table('form_one')->select('*')->where('id', $id)->get();
        $data=array('menu'=>'menu.v_menu_admin','data'=>$data);
        return view('layouts.f_details',$data);
    }


}
