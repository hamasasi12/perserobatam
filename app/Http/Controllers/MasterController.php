<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
public function index() {
    return view('master.landing');
}
public function login() {
    return view('master.auth-login-basic');
}
public function dashboard() {
    return view('master.dashboard');
}
public function datadikerjakan() {
    return view('master.data-dikerjakan');
}
public function dikerjakan() {
    return view('master.dikerjakan');
}
public function formhardware() {
    return view('master.form-hardware');
}
public function formpermintaan() {
    return view('master.form-permintaan');
}
public function formresiko() {
    return view('master.form-resiko');
}
public function formsofware() {
    return view('master.form-sofware');
}
public function formperbaikan() {
    return view('master.form-perbaikan');
}
public function hardware() {
    return view('master.hardware');
}
public function history_pekerjaan() {
    return view('master.history_pekerjaan');
}
public function landing() {
    return view('master.landing');
}
public function pekerjaan_selesai() {
    return view('master.pekerjaan_selesai');
}
public function permintaan_masuk() {
    return view('master.permintaan_masuk');
}
public function permintaan_perbaikan() {
    return view('master.permintaan_perbaikan');
}
public function request_user() {
    return view('master.request_user');
}
public function software() {
    return view('master.software');
}
public function tindaklanjut_perbaikan() {
    return view('master.tindaklanjut_perbaikan');
}
}
