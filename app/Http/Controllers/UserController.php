<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    private User $users;
    private Role $roles;
    private UserService $userService;


    public function __construct(User $users, Role $roles, UserService $userService)
    {
        $this->users = $users;
        $this->roles = $roles;
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View|Factory
    {
        $users = $this->users->where("id", "!=", 1)->paginate(10);
        $roles = $this->roles->where("id", "!=", 1)->get();
        return view('backEnd.user_management.user.index', compact('users', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request): RedirectResponse
    {
        return $this->userService->saveUser($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user): JsonResponse
    {
        if(!empty($user)){
            $roles = $this->roles->where("id", "!=", 1)->get();
            $idRole = [];
            if(!empty($user->roles)){
                foreach($user->roles as $user_role){
                    $idRole[] = $user_role->id;
                }
            }
            if(!empty($roles)){
                foreach($roles as $key => $role){
                    $roles[$key]->selected = '';
                    if(in_array($role->id, $idRole)){
                        $roles[$key]->selected = 'selected';
                    }
                }
            }
            return response()->json([
                'status'  => true,
                'data'    => $user,
                'roles'   => $roles,
                'message' => 'Data berhasil diambil.',
            ], JsonResponse::HTTP_OK);
        }else{
            return response()->json([
                'message' => 'Data Tidak Ada.',
                'data'    => [],
                'roles'   => [],
                'status' => false,
            ], JsonResponse::HTTP_NOT_FOUND);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user): RedirectResponse
    {
        return $this->userService->saveUser($request, $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request): JsonResponse
    {
        $service = $this->userService->deleteUser($request);
        if($service){
            return response()->json([
                'message' => 'Data berhasil dihapus.',
                'status' => true,
            ], JsonResponse::HTTP_OK);
        }else{
            return response()->json([
                'message' => 'Data Gagal Di hapus.',
                'status' => false,
            ], JsonResponse::HTTP_BAD_REQUEST);
        }
    }
}
