<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgressUpdate;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProgressController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        if ($user->role === 'owner') {
            // Owner can see all progress
            $progressUpdates = ProgressUpdate::with('user')->latest()->get();
        } else {
            // Customer can only see their own progress
            $progressUpdates = ProgressUpdate::where('user_id', $user->id)->latest()->get();
        }

        return view('progress.index', compact('progressUpdates'));
    }

    public function create()
    {
        // Only owner can create progress updates
        if (Auth::user()->role !== 'owner') {
            abort(403, 'Unauthorized');
        }

        $customers = User::where('role', 'customer')->get();
        return view('progress.create', compact('customers'));
    }

    public function store(Request $request)
    {
        // Only owner can create progress updates
        if (Auth::user()->role !== 'owner') {
            abort(403, 'Unauthorized');
        }

        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'id_project' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tanggal_update' => 'required|date',
            'status' => 'nullable|string|in:in_progress,completed,on_hold',
        ]);

        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('progress', 'public');
        }

        ProgressUpdate::create($validated);

        return redirect()->route('progress.index')->with('success', 'Progress update berhasil ditambahkan!');
    }

    public function show(ProgressUpdate $progress)
    {
        $user = Auth::user();
        
        // Check authorization
        if ($user->role !== 'owner' && $progress->user_id !== $user->id) {
            abort(403, 'Unauthorized');
        }

        return view('progress.show', compact('progress'));
    }

    public function edit(ProgressUpdate $progress)
    {
        // Only owner can edit progress
        if (Auth::user()->role !== 'owner') {
            abort(403, 'Unauthorized');
        }

        $customers = User::where('role', 'customer')->get();
        return view('progress.edit', compact('progress', 'customers'));
    }

    public function update(Request $request, ProgressUpdate $progress)
    {
        // Only owner can update progress
        if (Auth::user()->role !== 'owner') {
            abort(403, 'Unauthorized');
        }

        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'id_project' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tanggal_update' => 'required|date',
            'status' => 'nullable|string|in:in_progress,completed,on_hold',
        ]);

        if ($request->hasFile('foto')) {
            // Delete old image if exists
            if ($progress->foto) {
                Storage::disk('public')->delete($progress->foto);
            }
            $validated['foto'] = $request->file('foto')->store('progress', 'public');
        }

        $progress->update($validated);

        return redirect()->route('progress.index')->with('success', 'Progress update berhasil diupdate!');
    }

    public function destroy(ProgressUpdate $progress)
    {
        // Only owner can delete progress
        if (Auth::user()->role !== 'owner') {
            abort(403, 'Unauthorized');
        }

        // Delete image if exists
        if ($progress->foto) {
            Storage::disk('public')->delete($progress->foto);
        }

        $progress->delete();

        return redirect()->route('progress.index')->with('success', 'Progress update berhasil dihapus!');
    }
}
