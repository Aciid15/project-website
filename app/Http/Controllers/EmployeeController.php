<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::ordered()->get();
        return view('admin/employees/index', compact('employees'));
    }

    public function create()
    {
        return view('admin/employees/create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'position'  => 'nullable|string|max:255',
            'nip'       => 'nullable|string|max:255',
            'unit'      => 'nullable|string|max:255',
            'email'     => 'nullable|email|max:255',
            'phone'     => 'nullable|string|max:255',
            'bio'       => 'nullable|string',
            'photo'     => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'order'     => 'nullable|integer|min:0',
        ]);

        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')->store('employees', 'public');
        }

        $validated['is_active'] = $request->has('is_active') ? 1 : 0;
        $validated['order'] = $validated['order'] ?? 0;

        Employee::create($validated);

        return redirect()->route('admin.employees.index')->with('success', 'Karyawan berhasil ditambahkan!');
    }

    public function edit(Employee $employee)
    {
        return view('admin/employees/edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'name'      => 'required|string|max:255',
            'position'  => 'nullable|string|max:255',
            'nip'       => 'nullable|string|max:255',
            'unit'      => 'nullable|string|max:255',
            'email'     => 'nullable|email|max:255',
            'phone'     => 'nullable|string|max:255',
            'bio'       => 'nullable|string',
            'photo'     => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'order'     => 'nullable|integer|min:0',
        ]);

        if ($request->hasFile('photo')) {
            if ($employee->photo && Storage::disk('public')->exists($employee->photo)) {
                Storage::disk('public')->delete($employee->photo);
            }
            $validated['photo'] = $request->file('photo')->store('employees', 'public');
        }

        $validated['is_active'] = $request->has('is_active') ? 1 : 0;
        $validated['order'] = $validated['order'] ?? 0;

        $employee->update($validated);

        return redirect()->route('admin.employees.index')->with('success', 'Karyawan berhasil diperbarui!');
    }

    public function destroy(Employee $employee)
    {
        if ($employee->photo && Storage::disk('public')->exists($employee->photo)) {
            Storage::disk('public')->delete($employee->photo);
        }
        $employee->delete();

        return redirect()->route('admin.employees.index')->with('success', 'Karyawan berhasil dihapus!');
    }

    public function toggle(Employee $employee)
    {
        $employee->update(['is_active' => !$employee->is_active]);

        return redirect()->route('admin.employees.index')->with('success', 'Status karyawan berhasil diubah!');
    }
}
