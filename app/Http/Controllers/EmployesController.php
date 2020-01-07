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
			'salary' => ['required','numeric'],
			'profile_image' => ['image','nullable','max:1999']
		]);
		
		//handle image
		if($request->hasFile('profile_image')){
			//get file name with extension
			$fileWithExt = $request->file('profile_image')->getClientOriginalName();
			
			//get file name
			$filename = pathinfo($fileWithExt, PATHINFO_EXTENSION);
			
			//get file extension
			$extension = $request->file('profile_image')->getClientOriginalExtension();
			
			//filename to store
			$fileNameToStore = $filename."_".time().".".$extension;
			
			//file to store
			$path = $request->file('profile_image')->storeAs('public/profile_image', $fileNameToStore);
		}else{
				$fileNameToStore = 'noimage.jpg';
		}
		
		$crud = new Employe;
		$crud->employeeName = $request->empname;
		$crud->designation = $request->des;
		$crud->salary = $request->salary;
		$crud->profile_image = $fileNameToStore;
		
		if($crud->save()){
			echo "<script>alert('Record save successfully!');</script>";
			return redirect('/');
		}else{
			echo "<script>alert('Error occur while saving record.');</script>";
		}
	}
	public function show(){
		
	}
	public function edit($id){
		$emp = Employe::all();
		$editemp = $emp->where('id',$id)->first();
		return view('employes.edit',compact('editemp',$editemp));
	}
	public function update(Request $request,$id){
		$validateData = $request->validate([
			'empname' => ['required','regex:/^[a-zA-Z ]+$/i'],
			'des' => ['required'],
			'salary' => ['required','numeric']
		]);
		
		$oldemp = Employe::find($id);
		
		$oldemp->employeeName = $request->empname;
		$oldemp->designation = $request->des;
		$oldemp->salary = $request->salary;
		
		if($oldemp->save()){
			echo "<script>alert('Record Updated successfully!');</script>";
			return redirect('/');
		}else{
			echo "<script>alert('Error occured while Updated record.');</script>";
		}
	}
	public function destroy($id){
		$emp = Employe::find($id);
		
		if($emp->delete()){
			echo "<script>alert('Record deleted successfully!');</script>";
			return redirect('/');
		}else{
			echo "<script>alert('Error occured while Deleting record.');</script>";			
		}
	}
}
