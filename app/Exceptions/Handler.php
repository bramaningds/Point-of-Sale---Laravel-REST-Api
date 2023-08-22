<?php

namespace App\Exceptions;

use Throwable;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });

    //     $this->renderable(function (NotFoundHttpException $e, Request $request) {
    //         if ($request->is('api/*')) {
    //             return response()->json([
    //                 'message' => 'Record not found.'
    //             ], 404);
    //         }
    //     });
    }

    // public function render($request, Throwable $e)
    // {
    //     if ($e instanceof ModelNotFoundException) {
    //         return response()->json(['message' => $e->getModel()]);
    //     }

    //     return parent::render($request, $e);
    // }
}
