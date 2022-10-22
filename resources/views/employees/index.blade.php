<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <x-link href="{{ route('employees.create') }}" class="mb-4">
                        {{ __('Add new employee') }}
                    </x-link>
                </div>
                <div class="bg-white border-b border-gray-200">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left">
                                    {{ __('Name') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left">
                                    {{ __('Phone') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left">
                                    {{ __('Email') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left">
                                    {{ __('Id number') }}
                                </th>
                                <th scope="col" class="px-6 py-3 text-left">
                                    {{ __('Last attendance') }}
                                </th>
                                <th scope="col" class="px-6 py-3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($employees as $employee)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $employee->name }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $employee->phone }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $employee->email }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $employee->id_number }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $employee->lastAttendance?->time_start }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <x-link class="m-2" href="{{ route('employees.edit', $employee) }}">
                                            {{ __('Edit') }}
                                        </x-link>
                                        <x-link class="m-2"
                                            href="{{ route('employees.attendance.index', $employee) }}">
                                            {{ __('Attendance') }}
                                        </x-link>
                                        <x-link class="m-2" href="{{ route('employees.show', $employee) }}">
                                            {{ __('Show') }}
                                        </x-link>
                                        <form method="POST" action="{{ route('employees.destroy', $employee) }}"
                                            class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <x-button type="submit" onclick="return confirm('Are you sure?')">
                                                {{ __('Delete') }}
                                            </x-button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr class="bg-white border-b">
                                    <td colspan="3" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ __('No employees found') }}
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="p-6 mt-5">
                        {{ $employees->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
