<?php namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LogoutResponse as ContractsLogoutResponse;

class LogoutResponse implements ContractsLogoutResponse
{
  public function toResponse($request)
    {
      return redirect('/login');
    }
}