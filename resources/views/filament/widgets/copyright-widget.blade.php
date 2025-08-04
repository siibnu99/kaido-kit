<x-filament-widgets::widget>
    <x-filament::section>
        <div
            class="flex items-center justify-between p-2 bg-gradient-to-r from-blue-50 to-white rounded-xl shadow-sm border">
            <div class="flex items-center space-x-3">
                <x-heroicon-s-shield-check class="w-6 h-6 text-blue-600 animate-pulse" />
                <p class="text-sm text-gray-600">
                    &copy; {{ now()->year }}
                    <span class="font-semibold text-gray-800 hover:text-blue-600 transition">
                        PT Nutech Jaya Abadi
                    </span>
                </p>
            </div>
            <a href="https://execreative.id" target="_blank" rel="noopener noreferrer"
                class="text-sm text-blue-600 font-medium hover:underline hover:text-blue-800 transition">
                execreative.id
            </a>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
