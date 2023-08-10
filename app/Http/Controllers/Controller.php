<?php

namespace App\Http\Controllers;

use App\Models\LaravelUser;
use App\Packages\User\Domain\Model\Address;
use App\Packages\User\Domain\Model\User;
use App\Packages\User\Repository\AddressRepository;
use App\Packages\User\Repository\UserRepository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(): JsonResponse
    {
        return response()->json(['hello_world' => 'Welcome to the API'], Response::HTTP_CREATED);
    }

    public function listUsers(): JsonResponse
    {
        $usersData = [];
        LaravelUser::all()->each(function (LaravelUser $user) use (&$usersData) {
            $usersData[] = [
                'name' => $user->name,
                'email' => $user->email
            ];
        });

        return response()->json($usersData, Response::HTTP_OK);
    }

    public function createOne(): JsonResponse
    {
        $addressAttributes = [
            'street' => 'Rua dos bobos numero 0',
            'neighbourhood' => 'Vila do Esmero',
            'state' => 'RJ',
            'city' => 'Rio de Janeiro'
        ];

        /** @var AddressRepository $addressRepository */
        $addressRepository = app(AddressRepository::class);

        $address = $addressRepository->save($addressAttributes);


        /** @var UserRepository $userRepository */
        $userRepository = app(UserRepository::class);

        $userAttributes = [
            'name' => 'Neves',
            'email' => 'fake@bol.com.br',
            'phone_number' => '11999999996',
            'address_id' => $address->getKey(),
        ];

        $user = $userRepository->save($userAttributes);

        return response()->json($user, Response::HTTP_OK);
    }
}
