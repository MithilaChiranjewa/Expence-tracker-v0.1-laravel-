@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold">All Expenses</h2>
        <a href="{{ route('expenses.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">+ Add</a>
    </div>

    <div class="bg-white shadow rounded p-4 mb-4">
        <p class="text-lg font-medium">Total Spent: <span class="text-red-600 font-bold">Rs. {{ number_format($total, 2) }}</span></p>
    </div>

    <div class="bg-white shadow rounded overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-2 text-left">Date</th>
                    <th class="p-2 text-left">Category</th>
                    <th class="p-2 text-left">Amount</th>
                    <th class="p-2 text-left">Notes</th>
                    <th class="p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($expenses as $expense)
                    <tr class="border-t">
                        <td class="p-2">{{ $expense->date }}</td>
                        <td class="p-2">{{ $expense->category }}</td>
                        <td class="p-2 text-red-500 font-semibold">Rs. {{ number_format($expense->amount, 2) }}</td>
                        <td class="p-2">{{ $expense->notes }}</td>
                        <td class="p-2 flex space-x-2 justify-center">
                            <a href="{{ route('expenses.edit', $expense->id) }}" class="text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500 hover:underline" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="p-2 text-center text-gray-500" colspan="5">No expenses found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
