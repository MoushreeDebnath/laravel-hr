<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProjectController;

route::get('/home',[EmployeeController::class,'index']);
route::get('/junior-employee',[EmployeeController::class,'displayjunior']);
route::get('/senior-employee',[EmployeeController::class,'displaysenior']);
route::get('/employee-form',[EmployeeController::class,'employeeForm']);
route::post('/add-employee',[EmployeeController::class,'addEmployee']);

route::get('/login',[AuthController::class,'index']);
route::get('/registration',[AuthController::class,'registration']);
route::post('/post-registration',[AuthController::class,'postRegistration']);
route::post('/post-login',[AuthController::class,'postLogin']);
route::get('/logout',[AuthController::class,'logout']);

route::get('/project-form',[ProjectController::class,'index']);
route::post('/add-project',[ProjectController::class,'addProject']);