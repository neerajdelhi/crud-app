<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employe;

class EmployesController extends Controller
{
    public function index(Request $request){
		$ename = $request->input('ename');
		$des = $request->input('des');
		$sal = $request->input('sal');
		
		$emp = Employe::all();
		$emp = $emp->sortBy('id');
		if(!empty($ename)){
			$emp = $emp->where('employeeName',$ename);
		}
		if(!empty($des)){
			$emp = $emp->where('designation',$des);
		}
		if(!empty($sal)){
			$emp = $emp->where('salary',$sal);
		}
		//$emp = Employe::latest()->paginate(5);
		return view('employes.index')->with('emp',$emp);
	}
	public function create(){
		return view('employes.add');
	}
	public function store(Request $request){
		$validateData = $request->validate([
			'empname' => ['required','regex:/^[a-zA-Z ]+$/i'],
			'des' => ['required'],
			'salary' => ['required','numeric']
		]);
		
		$crud = new Employe;
		$crud->employeeName = $request->empname;
		$crud->designation = $request->des;
		$crud->salary = $request->salary;
		
		if($crud->save()){
			echo "<script>alert('Record save successfully!');</script>";
			return redirect('/');
		}else{
			echo "<script>alert('Error occur while saving record.');</script>";
		}
	}
	public function show(){
		
	}
	public function edit(Employe $emp){
		/*$validateData = $request->validate([
			'empname' => ['required','regex:/^[a-zA-Z ]+$/i'],
			'des' => ['required'],
			'salary' => ['required', 'numeric']
		]);
		*/
		//$emp = $emp->all();
		return view('employes.edit',compact('emp',$emp));
	}
	public function update(){

	}
	public function destry(){
		
	}
}
