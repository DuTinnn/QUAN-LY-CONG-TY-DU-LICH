<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\employee;
use App\Models\tour;
use App\Models\customer;
use App\Models\nha_hang;
use App\Models\phuongtien;
use App\Models\hoadon;
use App\Models\diadiem;
use App\Models\pdk;






class MyController extends Controller
{

    //login///////////////////////////////////////////////////////////////////////////////////

    public function login(){

    	return view('login');

    }

    public function postLogin(Request $request){

        $row=employee::where('username',$request->username)->where('password',$request->password)->get()->toArray();
        if(count($row) !=0 ){
            Session::put('username',$row[0]['username']);
            Session::put('hoten',$row[0]['hoten']);
            return redirect()->route('home');
        }
        return redirect()->route('login');

    }

    //logout///////////////////////////////////////////////////////////////////////////////////

    public function logout(){

        Session::flush();
        return redirect()->route('login');
        
    }

    //trang chu///////////////////////////////////////////////////////////////////////////////////

    public function home(){

        return view('home');
        
    }
 
    //nhan vien///////////////////////////////////////////////////////////////////////////////////

    public function listnv(){
    	$data=employee::get()->toArray();

    	return view('listnv',['data'=>$data]);
    	
    }

    public function addnv(){

        return view('addnv');
        
    }  

    public function themnv(Request $request){
    	$row = new employee;
    	$row->username=$request->username;
    	$row->password= 'ESDC'.$request->username;
    	$row->hoten=$request->hoten;
    	$row->ngaysinh=$request->ngaysinh;
    	$row->diachi=$request->diachi;
    	$row->gioitinh=$request->gioitinh;
    	$row->sdt=$request->sdt;
    	$row->email=$request->email;
    	$row->luong=$request->luong;
    	$row->save();
 		return redirect()->route('listnv');
    	
    }

    public function deletenv(Request $request){
		employee::where('username',$request->username)->delete();
 		return redirect()->route('listnv');
    }

    public function suanv(Request $request){
        $data = employee::where('username',$request->username)->get()->toArray();
        return view('suanv',['data'=>$data]);
        
    }

    public function suattnv(Request $request){
        employee::where('username',$request->username)->update([
    'hoten'=>$request->hoten,    
    'ngaysinh'=>$request->ngaysinh,    
    'email'=>$request->email,
    'diachi'=>$request->diachi,
    'sdt'=>$request->sdt,
    'gioitinh'=>$request->gioitinh,
    'luong'=>$request->luong]);
        return redirect()->route('listnv');  
    }

    //tour///////////////////////////////////////////////////////////////////////////////////

    public function listtour(){
    	$data=tour::get()->toArray();

    	return view('listtour',['data'=>$data]);
    	
    }

    public function addtour(){

        return view('addtour');
        
    }

    public function themtour(Request $request){
        $row = new tour;
        $row->matour=$request->matour;
        $row->Diemxuatphat=$request->Diemxuatphat;
        $row->lichtrinhcuthe=$request->lichtrinhcuthe;
        $row->thoigian=$request->thoigian;
        $row->phuongtien=$request->phuongtien;
        $row->gia=$request->gia;
        $row->giatreem=$request->giatreem;
        $row->save();
        return redirect()->route('listtour');
        
    }

    public function deletetour(Request $request){
        tour::where('matour',$request->matour)->delete();
        return redirect()->route('listtour');
    }

    public function suatour(Request $request){
        $data = tour::where('matour',$request->matour)->get()->toArray();
        return view('suatour',['data'=>$data]);
        
    }

    public function suatttour(Request $request){
        tour::where('matour',$request->matour)->update([
    'Diemxuatphat'=>$request->Diemxuatphat,    
    'lichtrinhcuthe'=>$request->lichtrinhcuthe,    
    'thoigian'=>$request->thoigian,
    'phuongtien'=>$request->phuongtien,
    'gia'=>$request->gia,
    'giatreem'=>$request->giatreem,]);
        return redirect()->route('listtour');  
    }

    //khach hang///////////////////////////////////////////////////////////////////////////////////

    public function listcus(){
        $data=customer::get()->toArray();

        return view('listcus',['data'=>$data]);
        
    }

    public function addkh(){

        return view('addkh');
        
    }
    public function themkh(Request $request){
        $row = new customer;
        $row->makh=$request->makh;
        $row->hotenkh=$request->hotenkh;
        $row->ngaysinh=$request->ngaysinh;
        $row->sdt=$request->sdt;
        $row->diachi=$request->diachi;
        $row->email=$request->email;
        $row->gioitinh=$request->gioitinh;
        $row->save();
        return redirect()->route('listcus');
        
    }

    public function deletekh(Request $request){
        customer::where('makh',$request->makh)->delete();
        return redirect()->route('listcus');
    }

    public function suakh(Request $request){
        $data = customer::where('makh',$request->makh)->get()->toArray();
        return view('suakh',['data'=>$data]);
        
    }

    public function suattkh(Request $request){
        customer::where('makh',$request->makh)->update([
    'hotenkh'=>$request->hotenkh,    
    'ngaysinh'=>$request->ngaysinh,
    'sdt'=>$request->sdt,  
    'diachi'=>$request->diachi,
    'email'=>$request->email,
    'gioitinh'=>$request->gioitinh]);    
        return redirect()->route('listcus');  
    }

    //nha hang///////////////////////////////////////////////////////////////////////////////////

    public function listnh(){
        $data=nha_hang::get()->toArray();

        return view('listnh',['data'=>$data]);
        
    }

    public function addnh(){

        return view('addnh');
        
    }

    public function themnh(Request $request){
        $row = new nha_hang;
        $row->manh=$request->manh;
        $row->tennh=$request->tennh;
        $row->matour=$request->matour;
        $row->giavaocua=$request->giavaocua;
        $row->save();
        return redirect()->route('listnh');
    }

    public function deletenh(Request $request){
        nha_hang::where('manh',$request->manh)->delete();
        return redirect()->route('listnh');
    }

    public function suanh(Request $request){
        $data = nha_hang::where('manh',$request->manh)->get()->toArray();
        return view('suanh',['data'=>$data]);
        
    }

    public function suattnh(Request $request){
        nha_hang::where('manh',$request->manh)->update([
    'tennh'=>$request->tennh,    
    'matour'=>$request->matour,
    'giavaocua'=>$request->giavaocua]);    
        return redirect()->route('listnh');  
    }

    //phuong tien///////////////////////////////////////////////////////////////////////////////////

    public function listpt(){
        $data=phuongtien::get()->toArray();

        return view('listpt',['data'=>$data]);
        
    }

    public function addpt(){

        return view('addpt');
        
    }

    public function thempt(Request $request){
        $row = new phuongtien;
        $row->mapt=$request->mapt;
        $row->tenpt=$request->tenpt;
        $row->matour=$request->matour;
        $row->giave=$request->giave;
        $row->save();
        return redirect()->route('listpt');
    }

    public function deletept(Request $request){
        phuongtien::where('mapt',$request->mapt)->delete();
        return redirect()->route('listpt');
    }

    public function suapt(Request $request){
        $data = phuongtien::where('mapt',$request->mapt)->get()->toArray();
        return view('suapt',['data'=>$data]);
        
    }

    public function suattpt(Request $request){
        phuongtien::where('mapt',$request->mapt)->update([
    'tenpt'=>$request->tenpt,    
    'matour'=>$request->matour,
    'giave'=>$request->giave]);    
        return redirect()->route('listpt');  
    }

    //hoa don

    public function hoadon(){
        $data=hoadon::get()->toArray();

        return view('hoadon',['data'=>$data]);
        
    }

    public function addhd(){

        return view('addhd');
        
    }

    public function themhd(Request $request){
        $row = new hoadon;
        $row->mahd=$request->mahd;
        $row->makh=$request->makh;
        $row->ngaylaphd=$request->ngaylaphd;
        $row->matour=$request->matour;
        $row->chiphi=$request->chiphi;
        $row->save();
        return redirect()->route('hoadon');
    }


    //dia diem 

    public function listdd(){
        $data=diadiem::get()->toArray();

        return view('listdd',['data'=>$data]);
        
    }

    public function adddd(){

        return view('adddd');
        
    }

    public function themdd(Request $request){
        $row = new diadiem;
        $row->madd=$request->madd;
        $row->matour=$request->matour;
        $row->tendd=$request->tendd;
        $row->diachi=$request->diachi;
        $row->giovaocua=$request->giovaocua;
        $row->sdtquanly=$request->sdtquanly;
        $row->save();
        return redirect()->route('listdd');
    }
    public function deletedd(Request $request){
        diadiem::where('madd',$request->madd)->delete();
        return redirect()->route('listdd');
    }
    public function suadd(Request $request){
        $data = diadiem::where('madd',$request->madd)->get()->toArray();
        return view('suadd',['data'=>$data]);
        
    }

    public function suattdd(Request $request){
        diadiem::where('madd',$request->madd)->update([
    'matour'=>$request->matour,    
    'tendd'=>$request->tendd,
    'diachi'=>$request->diachi,
    'giovaocua'=>$request->giovaocua,
    'sdtquanly'=>$request->sdtquanly]);    
        return redirect()->route('listdd');  
    }

    //phieu dang ky
    public function dangky(){
        $data=pdk::get()->toArray();

        return view('dangky',['data'=>$data]);
        
    }

    public function addpdk(){

        return view('addpdk');
        
    }
    public function thempdk(Request $request){
        $row = new pdk;
        $row->manv=$request->manv;
        $row->mapdk=$request->mapdk;
        $row->matour=$request->matour;
        $row->makh=$request->makh;
        $row->hoten=$request->hoten;
        $row->ngaylap=$request->ngaylap;
        $row->giatour=$request->giatour;
        $row->giokhoihanh=$request->giokhoihanh;
        $row->save();
        return redirect()->route('dangky');
        
    }

    public function deletepdk(Request $request){
        pdk::where('mapdk',$request->mapdk)->delete();
        return redirect()->route('dangky');
    }

    public function suapdk(Request $request){
        $data = pdk::where('mapdk',$request->mapdk)->get()->toArray();
        return view('suapdk',['data'=>$data]);
        
    }

    public function suattpdk(Request $request){
        pdk::where('mapdk',$request->mapdk)->update([
    'manv'=>$request->manv,    
    'matour'=>$request->matour,
    'makh'=>$request->makh,  
    'hoten'=>$request->hoten,
    'ngaylap'=>$request->ngaylap,
    'giatour'=>$request->giatour,
    'giokhoihanh'=>$request->giokhoihanh,]);    
    return redirect()->route('dangky');
    }
}
