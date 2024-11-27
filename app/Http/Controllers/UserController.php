<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Menampilkan daftar semua user
    public function index()
    {
        $users = User::paginate(5);
        return view('user.index', compact('users'));
    }

    // Menampilkan form untuk membuat user baru
    public function create()
    {
        return view('user.create');
    }

    // Menyimpan data user baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('user.index');
    }

    // Menampilkan form untuk mengedit user
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    // Mengupdate data user
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8',
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
        ]);

        return redirect()->route('user.index');
    }

    // Menghapus data user
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
