<?php

namespace App\Http\Controllers;

use App\Http\Requests\usersStoreRequest;
use App\Http\Requests\usersUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class usersController extends Controller
{
    public function index(Request $request): Response
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    public function create(Request $request): Response
    {
        return view('user.create');
    }

    public function store(usersStoreRequest $request): Response
    {
        $user = User::create($request->validated());

        $request->session()->flash('user.id', $user->id);

        return redirect()->route('user.index');
    }

    public function show(Request $request, user $user): Response
    {
        return view('user.show', compact('user'));
    }

    public function edit(Request $request, user $user): Response
    {
        return view('user.edit', compact('user'));
    }

    public function update(usersUpdateRequest $request, user $user): Response
    {
        $user->update($request->validated());

        $request->session()->flash('user.id', $user->id);

        return redirect()->route('user.index');
    }

    public function destroy(Request $request, user $user): Response
    {
        $user->delete();

        return redirect()->route('user.index');
    }
}
