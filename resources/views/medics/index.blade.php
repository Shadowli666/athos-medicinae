<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="flex w-full">
            <flux:heading size="xl" class="text-center">Medics</flux:heading>
            <flux:button variant="primary" href="{{ route('medic.create') }}" class="ml-auto">Add Medic</flux:button>
        </div>
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-heading size="xl" class="text-center">20</x-heading>
            <x-subheading class="text-center">Active Medics</x-subheading>
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <table class="table-auto">
            <thead>
                <tr class="border-b-1 border-solid p-2">
                    <th class="p-5">Name</th>
                    <th class="p-5">Last Name</th>
                    <th class="p-5">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($medics as $medic)
                    <tr class="border-b-1 border-solid p-2">
                        <td class="p-3">{{ $medic->name }}</td>
                        <td class="p-3">{{ $medic->last_name }}</td>
                        <td class="flex gap-2 p-3">
                            <a href="{{ route('medic.edit', $medic->id) }}" title="Edit">
                                <flux:icon.pencil-square variant="solid" class="dark:text-yellow-400 text-amber-500"/>
                            </a>
                            <form action="{{ route('medic.destroy', $medic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <flux:icon.trash variant="solid" class="dark:text-red-500 text-red-800"/>
                                </button>
                            </form>
                        </td>   
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $medics->links() }}
    </div>
</x-layouts.app>