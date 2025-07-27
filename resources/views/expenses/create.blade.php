@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-semibold mb-4">Add Expense</h2>

    <form action="{{ route('expenses.store') }}" method="POST" class="space-y-4 bg-white p-4 rounded shadow">
        @csrf

        <div>
            <label class="block mb-1 font-medium">Category</label>
            <input type="text" name="category" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block mb-1 font-medium">Amount</label>
            <input type="number" name="amount" step="0.01" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block mb-1 font-medium">Date</label>
            <input type="date" name="date" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block mb-1 font-medium">Notes</label>
            <textarea name="notes" rows="3" class="w-full border-gray-300 rounded px-3 py-2"></textarea>
        </div>

        <div class="flex justify-between items-center">
            <a href="{{ route('expenses.index') }}" class="text-gray-500 hover:underline">← Back</a>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Save</button>
        </div>
    </form>
@endsection
