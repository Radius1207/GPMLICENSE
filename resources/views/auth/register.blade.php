<x-guest-layout>
    <!-- Lấy từ Modal Auth trong gpmlicense.html -->
    <div class="bg-white w-full max-w-md p-8 rounded-2xl shadow-2xl relative">
        <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Tạo Tài Khoản</h3>

        <!-- Hiển thị lỗi -->
        <x-input-error :messages="$errors->all()" class="mb-4 p-4 bg-red-100 text-red-700 rounded-md" />

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <!-- Email -->
            <div>
                <label for="signup-email" class="block text-sm font-medium text-gray-600 mb-2">Email</label>
                <input type="email" id="signup-email" name="email" :value="old('email')" required
                       class="w-full px-4 py-3 bg-gray-100 border border-gray-300 rounded-md text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Mật khẩu -->
            <div>
                <label for="signup-password" class="block text-sm font-medium text-gray-600 mb-2">Mật khẩu</label>
                <input type="password" id="signup-password" name="password" required
                       class="w-full px-4 py-3 bg-gray-100 border border-gray-300 rounded-md text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Xác nhận Mật khẩu -->
            <div>
                <label for="signup-password-confirm" class="block text-sm font-medium text-gray-600 mb-2">Xác nhận Mật khẩu</label>
                <input type="password" id="signup-password-confirm" name="password_confirmation" required
                       class="w-full px-4 py-3 bg-gray-100 border border-gray-300 rounded-md text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit" id="signup-submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-md text-base font-medium">Đăng Ký</button>
        </form>
        <p class="mt-6 text-center text-sm text-gray-500">
            Đã có tài khoản? 
            <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:underline">Đăng Nhập</a>
        </p>
    </div>
</x-guest-layout>