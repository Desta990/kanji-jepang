<x-guest-layout>
    <div class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Terima kasih telah mendaftar! Sebelum memulai, mohon verifikasi alamat email Anda dengan mengklik tautan yang baru saja kami kirimkan melalui email. Jika Anda tidak menerima email tersebut, kami dengan senang hati akan mengirimkan email verifikasi lainnya.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ __('Tautan verifikasi baru telah dikirim ke alamat email yang Anda gunakan saat pendaftaran.') }}
            </div>
        @endif

        <div class="mt-6 space-y-4">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div class="flex justify-center">
                    <x-primary-button>
                        {{ __('Kirim Ulang Email Verifikasi') }}
                    </x-primary-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div class="flex justify-center">
                    <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                        {{ __('Keluar') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
