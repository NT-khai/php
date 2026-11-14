<?php

namespace App\Http\Controllers;

use App\Service\UserService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function __construct(
        private UserService $userService
    ) {}

    /**
     * Lấy user theo id
     */
    public function findById(int $id)
    {
        $user = $this->userService->findById($id);

        return response()->json([
            'success' => true,
            'data' => $user
        ]);
    }

    public function findAll(){
        $user = $this->userService->findAll();
        return response()->json([
            'success'=> true,
            'data'=> $user
        ]);
    }

    /**
     * Tạo user
     */
    public function create(Request $request)
    {
        $user = $this->userService->create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => bcrypt($request->password),
            'phone'     => $request->phone,
            'birthday'  => $request->birthday,
            'gender'    => $request->gender,
            'address'   => $request->address,
            'is_active' => true,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'User created successfully',
            'data' => $user
        ], 201);
    }

    /**
     * Cập nhật user
     */
    public function update(Request $request, int $id)
    {
        $user = $this->userService->update($id, $request->all());

        return response()->json([
            'success' => true,
            'message' => 'User updated successfully',
            'data' => $user
        ]);
    }

    /**
     * Xóa user
     */
    public function delete(int $id)
    {
        $this->userService->delete($id);

        return response()->json([
            'success' => true,
            'message' => 'User deleted successfully'
        ]);
    }
}
