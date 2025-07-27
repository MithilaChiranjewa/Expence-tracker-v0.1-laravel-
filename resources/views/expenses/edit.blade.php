@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-semibold mb-4">Edit Expense</h2>

    <form action="{{ route('expenses.update', $expense->id) }}" method="POST" class="space-y-4 bg-white p-4 rounded shadow">
        @csrf
        @method('PUT')

        <div>
            <label class="block mb-1 font-medium">Category</label>
            <input type="text" name="category" value="{{ $expense->category }}" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block mb-1 font-medium">Amount</label>
            <input type="number" name="amount" step="0.01" value="{{ $expense->amount }}" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block mb-1 font-medium">Date</label>
            <input type="date" name="date" value="{{ $expense->date }}" class="w-full border-gray-300 rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block mb-1 font-medium">Notes</label>
            <textarea name="notes" rows="3" class="w-full border-gray-300 rounded px-3 py-2">{{ $expense->notes }}</textarea>
        </div>

        <div class="flex justify-between items-center">
            <a href="{{ route('expenses.index') }}" class="text-gray-500 hover:underline">← Back</a>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update</button>
        </div>
    </form>
@endsection
