<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Kemen Dikdasmen</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-blue-100">
    <div class="min-h-screen flex items-center justify-center px-4 py-12">
        <div class="max-w-md w-full">
            <!-- Logo dan Header -->
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <img src="/images/KGTK.png" alt="Kemen Dikdasmen" class="h-16">
                </div>
                <h2 class="text-3xl font-bold text-gray-900">Selamat Datang</h2>
                <p class="mt-2 text-sm text-gray-600">Silakan login untuk melanjutkan</p>
            </div>

            <!-- Form Login -->
            <div class="bg-white rounded-lg shadow-xl p-8" x-data="loginForm()">
                <form @submit.prevent="submitForm" method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <!-- Email/Username -->
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email atau Username
                        </label>
                        <input 
                            type="text" 
                            id="email" 
                            name="email"
                            x-model="form.email"
                            required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                            placeholder="Masukkan email atau username"
                        >
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-6" x-data="{ showPassword: false }">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            Password
                        </label>
                        <div class="relative">
                            <input 
                                :type="showPassword ? 'text' : 'password'" 
                                id="password" 
                                name="password"
                                x-model="form.password"
                                required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                placeholder="Masukkan password"
                            >
                            <button 
                                type="button"
                                @click="showPassword = !showPassword"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 hover:text-gray-700"
                            >
                                <svg x-show="!showPassword" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                <svg x-show="showPassword" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: none;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                                </svg>
                            </button>
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center mb-6">
                        <input 
                            type="checkbox" 
                            id="remember" 
                            name="remember"
                            class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                        >
                        <label for="remember" class="ml-2 text-sm text-gray-700">
                            Ingat saya
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit"
                        :disabled="loading"
                        :class="loading ? 'opacity-70 cursor-not-allowed' : 'hover:bg-blue-700'"
                        class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold transition duration-200 transform hover:scale-[1.02] active:scale-[0.98]"
                    >
                        <span x-show="!loading">Masuk</span>
                        <span x-show="loading" class="flex items-center justify-center">
                            <svg class="animate-spin h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Memproses...
                        </span>
                    </button>
                </form>
            </div>

            <!-- Footer -->
            <div class="mt-8 text-center">
                <p class="text-sm text-gray-600">
                    © 2026 Kementerian Pendidikan Dasar dan Menengah
                </p>
            </div>
        </div>
    </div>

    <script>
        function loginForm() {
            return {
                form: {
                    email: '',
                    password: ''
                },
                loading: false,
                submitForm() {
                    this.loading = true;
                    // Form akan di-submit secara normal ke Laravel
                    this.$el.closest('form').submit();
                }
            }
        }
    </script>
</body>
</html>