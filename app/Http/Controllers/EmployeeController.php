<?php

namespace App\Http\Controllers;
use App\Skill;
use App\Human;
use App\Employee_Type;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['skills']=Skill::all();
        $data['url']="/employee";
        $data['step']=1;
        return  view('employee.step1',$data);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $step=$request->input('step');
        switch($step){
            case 1:
                $this->validateData($request,$step);
                $human=new Human;
                $human=$this->getData($request,$human,$step);
                $human->save();
                $human_id=$human->id;
                $data['step']=2;
                $data['designations']=Employee_Type::all();
                $data['url']="/employee";
                $data['human_id']=$human_id;
                return  view('employee.step2',$data);
                break;
            case 2:
                $this->validateData($request,$step);
                $employee=new Employee;
                $employee=$this->getData($request,$employee,$step);
                $employee->save();
                $data['employee_id']=$employee->id;
                $data['human_id']=$request->input('human_id');
                $data['step']=3;
                $data['url']="/employee";
                return  view('employee.step3',$data);
                break;
            default:

                echo "No information available for that day.";

                break;

        }
        
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

    public function validateData(Request $request,$step)
    {
        switch($step){
            case 1:
                $this->validate(request(),[
                'full_name' => 'required',
                'name_with_initials' => 'required',
                'adress' => 'required',
                'date_of_birth' => 'required',
                'nic_no' => 'required',
                'mobile_number' => 'required',
                'telephone_number' => 'required',
                'gender' => 'required',
                'emergency_contact_name' => 'required',
                'emergency_mobile_no' => 'required',
                'emergency_home_tp_no' => 'required',
                'relationship' => 'required',
                ]);

                break;
            case 2:
                $this->validate(request(),[
                'employee_type_id' => 'required',
                'salary_type' => 'required',
                'fingerprint_id' => 'required',
                'amount' => 'required',
                ]);
                break;
            default:

                echo "No information available for that day.";

                break;

        }
        
    }

    public function getData(Request $request,$data,$step)
    {
        switch($step){
            case 1:
                $data->full_name=$request->input('full_name');
                $data->name_with_ini=$request->input('name_with_initials');
                $data->address=$request->input('adress');
                $data->nic=$request->input('nic_no');
                $data->dob=$request->input('date_of_birth');
                $data->tp_home=$request->input('telephone_number');
                $data->tp_mobile=$request->input('mobile_number');
                $data->emergency_name=$request->input('emergency_contact_name');
                $data->emergency_tp_mobile=$request->input('emergency_mobile_no');
                $data->emergency_relationship=$request->input('relationship');
                $data->emergency_tp_home=$request->input('emergency_home_tp_no');
                $data->gender=$request->input('gender');
                $data->created_at=now();
                break;
            case 2:
                $data->humans_id=$request->input('human_id');
                $data->employee_type_id=$request->input('employee_type_id');
                $data->status=$request->input('salary_type');
                $data->amount=$request->input('amount');
                $data->fingerprint_id=$request->input('fingerprint_id');
                $data->created_at=now();
                break;
            default:

                echo "No information available for that day.";

                break;

        }

        return $data;
    }
}
