{{-- Basic Usage --}}
<x-card>
    <p>This is the card component. </p>
</x-card>

{{-- With title and subtitle --}}
<x-card title="User Profile" subtitle="Manage your account settings and preferences">

    <p> Your profile content goes here.</p>
</x-card>

{{-- With Footer --}}
<x-card title="Payment details" class="max-w-2xl">
    <p>Payment form content</p>
    <x-slot:footer>
        <div class="flex justify-end space-x-3">
            <button class="px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">
                Cancel
            </button>
            <button class="px-4 py-2 text-sm text-white bg-blue-600 hover:bg-blue-700 rounded-md">
                Save
            </button>
        </div>
    </x-slot:footer>
</x-card>

{{-- With Custom Classes --}}
