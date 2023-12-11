<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\AbstractUserController;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\ListRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Http\Resources\ClientResource;
use App\Models\Client;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

/**
 * @group Users
 */
class ClientController extends AbstractCrudController
{
    public function __construct()
    {
    }

    /**
     * @apiResourceCollection App\Http\Resources\ClientResource
     * @apiResourceModel App\Models\Client
     */
    public function index(Request $request)
    {
        return ClientResource::collection(Client::all());
    }

    /**
     * @apiResource App\Http\Resources\ClientResource
     * @apiResourceModel App\Models\Client
     */
    public function store(ClientRequest $request)
    {
        $user = $request->createUser();
        return new ClientResource($user);
    }

    /**
     * @apiResource App\Http\Resources\ClientResource
     * @apiResourceModel App\Models\Client
     */
    public function show(Client $client)
    {
        return new ClientResource($client);
    }

    /**
     * @apiResource App\Http\Resources\ClientResource
     * @apiResourceModel App\Models\Client
     */
    public function registration(RegistrationRequest $request)
    {
        $user = $request->createUser();
        return new ClientResource($user);
    }

    /**
     * @apiResource App\Http\Resources\ClientResource
     * @apiResourceModel App\Models\Client
     */
    public function login(LoginRequest $request)
    {
        $client = Client::whereEmail($request->email)->first();
        if($client->password == $request->password) {
            return new ClientResource($client);
        }
        return false;
    }
    /**
     * @apiResource App\Http\Resources\ClientResource
     * @apiResourceModel App\Models\Client
     */
    public function update(ClientRequest $request, Client $client)
    {
        $user = $request->updateUser($client);
        return new ClientResource($user);
    }

    public function destroy(Client $client)
    {
        $client->delete();
    }

    protected function createListQuery(ListRequest $request): Builder
    {
        return Client::query();
    }

    protected function applyListFilter(Builder $builder, ListRequest $request, array $filter = []): Builder
    {
        $queryBuilder = parent::applyListFilter($builder, $request, $filter);
        return $queryBuilder;
    }
}
