<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employe;

class EmployesController extends Controller
{
    public function index(){
		$emp = Employe::all();
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
