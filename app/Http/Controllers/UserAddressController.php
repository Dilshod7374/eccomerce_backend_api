<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserAddressRequest;
use App\Http\Requests\UpdateUserAddressRequest;
use App\Models\UserAddress;
use Illuminate\Database\Eloquent\Collection;

class UserAddressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index(): Collection
    {
        return auth()->user()->addresses;
    }

    public function store(StoreUserAddressRequest $request): bool
    {
        auth()->user()->addresses()->create($request->toArray());

        return true;
    }

    public function show(UserAddress $userAddress)
    {
        //
    }

    public function edit(UserAddress $userAddress)
    {
        //
    }

    public function update(UpdateUserAddressRequest $request, UserAddress $userAddress)
    {
        //
    }

    public function destroy(UserAddress $userAddress)
    {
        //
    }
}
