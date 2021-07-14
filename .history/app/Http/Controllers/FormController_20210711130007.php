<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
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

                        $btn = '<div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="btn btn-sm btn-icon btn-outline-success btn-circle mr-2 edit editUser"><i class=" fi-rr-edit"></i></div>';
                        $btn = $btn.' <div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-sm btn-icon btn-outline-danger btn-circle mr-2 deleteUser"><i class="fi-rr-trash"></i></div>';
                        $btn = $btn.' <div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="view" class="btn btn-sm btn-icon btn-outline-info btn-circle mr-2"><i class="fi-rr-trash"></i></div>';

                         return $btn;
                    })
                    ->editColumn('status', function($row) {
                        if($row->status=='1'){
                            return "Deactive";
                        }else{
                            return "Active";
                        }
                        // return date('d M, Y',strtotime($row->created_at));
                    })

                    ->editColumn('count', function($row) {
                        if($row->status=='1'){
                            return "Deactive";
                        }else{
                            return "Active";
                        }
                        // return date('d M, Y',strtotime($row->created_at));
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        //dd($data);
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
        //
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




}
