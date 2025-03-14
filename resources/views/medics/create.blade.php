<x-layouts.app>
    <div class="flex">
        <div class="mt-5 mx-8 p-10">
            <flux:heading size=xl>Add Medic</flux:heading>
            <flux:subheading>Include a medic to the system</flux:subheading>
        </div>
        <div class="flex w-full gap-3">
            <form action="{{ route('medic.store') }}" method="POST">
                @csrf
                    <flux:input label="Name:" name="name"></flux:input>
                <div class="mt-5">
                    <flux:input label="Last Name:" name="last_name"></flux:input>
                </div>

                <div class='flex gap-3 mt-5'>
                    <flux:input label="Email:" name="email"></flux:input>
                    <flux:input label="Phone:" name="phone"></flux:input>
                </div>
                {{-- Id --}}
                <div class="flex gap-3 mt-5 flex-wrap w-full">
                    <flux:input.group>
                        <flux:select label="ID Type" class="w-full" name="id_type">
                            <flux:select.option value="V" selected>V</flux:select.option>
                            <flux:select.option value="J">J</flux:select.option>
                            <flux:select.option value="G">G</flux:select.option>
                        </flux:select>
                        <flux:input label='ID Number' placeholder="12345678" name="ci" />
                    </flux:input.group>
                </div>
                <div class="flex gap-3 mt-5">
                    <flux:button variant="primary" type="submit">Save</flux:button>
                    <flux:button type="reset">Clean</flux:button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>