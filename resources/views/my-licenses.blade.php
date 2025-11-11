<x-app-layout>
    <x-slot name="header">
        {{ __('License Của Tôi') }}
    </x-slot>

    <div id="view-my-licenses">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6 border-b">
                <h3 class="text-xl font-bold text-gray-800">License Của Tôi</h3>
            </div>

            <div class="divide-y divide-gray-200">
                
                @if ($licenses->isNotEmpty())
                    @foreach ($licenses as $license)
                        @php
                            // LOGIC TÍNH HẠN SỬ DỤNG VÀ GIÁ GIA HẠN
                            // (Đây là giải pháp tạm thời, lý tưởng nhất là lưu giá và ngày hết hạn trong CSDL)
                            $purchaseDate = \Carbon\Carbon::parse($license->purchaseDate ?? $license->created_at);
                            $expiryText = 'Vĩnh viễn';
                            $canRenew = false;
                            $price = '0 VNĐ';

                            if (str_contains($license->packageName, '30 Ngày')) {
                                $expiryText = $purchaseDate->addDays(30)->format('d/m/Y');
                                $canRenew = true;
                                $price = '55.000 VNĐ';
                            } elseif (str_contains($license->packageName, '90 Ngày')) {
                                $expiryText = $purchaseDate->addDays(90)->format('d/m/Y');
                                $canRenew = true;
                                $price = '150.000 VNĐ';
                            } elseif (str_contains($license->packageName, '180 Ngày')) {
                                $expiryText = $purchaseDate->addDays(180)->format('d/m/Y');
                                $canRenew = true;
                                $price = '270.000 VNĐ';
                            } elseif (str_contains($license->packageName, '365 Ngày')) {
                                $expiryText = $purchaseDate->addDays(365)->format('d/m/Y');
                                $canRenew = true;
                                $price = '480.000 VNĐ';
                            }
                        @endphp

                        <div class="p-6 flex flex-col md:flex-row justify-between items-start md:items-center">
                            
                            <div class="flex-grow">
                                <p class="text-base font-bold text-gray-800">{{ $license->packageName }}</p>
                                
                                <div class="mt-2">
                                    <label class="text-xs font-medium text-gray-500">License Key</label>
                                    <div class="flex items-center gap-2 mt-1">
                                        <code class="px-3 py-1.5 text-sm text-blue-700 bg-blue-50 rounded-md break-all license-key-text">{{ $license->keyString }}</code>
                                        
                                        <button class="copy-license-btn p-1.5 text-gray-400 hover:text-gray-700 rounded-md bg-gray-100 hover:bg-gray-200" title="Sao chép key">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375V17.25" />
                                            </svg>
                                        </button>
                                    </div>
                                    <span class="copy-success-msg text-green-600 text-xs mt-1 h-4 block"></span>
                                </div>
                            </div>
                            
                            <div class="mt-4 md:mt-0 md:text-right flex-shrink-0 md:ml-6">
                                <p class="text-sm text-gray-700">
                                    Hạn sử dụng: <strong class="text-gray-900">{{ $expiryText }}</strong>
                                </p>
                                @if ($canRenew)
                                    <button class="buy-btn mt-2 w-full md:w-auto bg-blue-50 text-blue-600 hover:bg-blue-100 px-4 py-2 rounded-md font-bold text-sm" 
                                            data-package-name="Gia hạn: {{ $license->packageName }}" 
                                            data-price="{{ $price }}">
                                        Gia Hạn
                                    </button>
                                @endif
                            </div>

                        </div>
                    @endforeach
                @else
                    <div class="p-6 text-center text-gray-500">Bạn chưa có license nào.</div>
                @endif
                
            </div>
        </div>
    </div>


    <div id="payment-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 modal-backdrop modal-transition modal-hidden">
        <div class="bg-white w-full max-w-md p-8 rounded-2xl shadow-2xl relative">
            <button id="close-payment-modal" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg></button>
            
            <form id="payment-form" method="POST" action="{{ route('orders.store') }}">
                @csrf
                <input type="hidden" id="form_package_name" name="packageName">
                <input type="hidden" id="form_package_price" name="price">
                <input type="hidden" id="form_payment_code" name="paymentCode">
                
                <div id="payment-content">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Thông Tin Thanh Toán</h3>
                    <div class="bg-gray-100 p-4 rounded-lg mb-6"><p class="text-gray-500">Bạn đang thanh toán cho gói:</p><h4 id="modal_package_name" class="text-xl font-bold text-gray-900"></h4></div>
                    <div class="flex flex-col items-center gap-6">
                        <div class="w-full max-w-sm">
                            <p class="text-sm text-gray-600 mb-4 text-center">Vui lòng chuyển khoản <strong id="modal_package_price" class="text-gray-900"></strong> hoặc quét mã QR.</p>
                            
                            <div class="bg-white p-4 rounded-lg flex justify-center border">
                                <img src="{{ asset('images/qr_thanh_toan.png') }}" alt="Mã QR Thanh Toán" class="w-64 h-64 object-cover" onerror="this.alt='Lỗi tải ảnh QR'; this.src='https://placehold.co/256x256/ffffff/333333?text=QR+Code';">
                            </div>
                        </div>
                        <div class="w-full max-w-sm">
                            <div class="text-gray-700 bg-gray-100 p-4 rounded-md text-sm">
                                <p class="mb-2"><strong>Ngân hàng:</strong><span class="float-right">TECHCOMBANK</span></p>
                                <p class="mb-2"><strong>STK:</strong><span class="float-right">8686 1314 8888</span></p>
                                <p class="mb-2"><strong>Chủ TK:</strong><span class="float-right">TRAN QUOC VIET</span></p>
                            </div>
                            <div class="mt-4 bg-gray-50 p-4 rounded-md border border-dashed border-yellow-500">
                                <p class="text-sm text-gray-500 text-center mb-2">Nội dung chuyển khoản (Bắt buộc):</p>
                                <div class="flex items-center justify-center space-x-3">
                                    <strong id="modal_payment_code" class="text-2xl font-bold text-yellow-600 tracking-wider"></strong>
                                    <button type="button" id="copy-payment-code" class="text-gray-400 hover:text-gray-700" title="Sao chép mã"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375V17.25" /></svg></button>
                                </div>
                                <span id="copy-success-msg" class="text-green-600 text-xs text-center block mt-1 h-4"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <button type="submit" id="confirm-payment-btn" class="w-full bg-green-600 hover:bg-green-700 text-white px-5 py-3 rounded-md text-base font-medium">Tôi Đã Thanh Toán</button>
                    <p id="payment-error" class="text-red-500 text-sm mt-3 text-center hidden"></p>
                </div>
            </form>
        </div>
    </div>


    @push('scripts')
    <script>
        // --- BẮT ĐẦU PHẦN SAO CHÉP TỪ products.blade.php ---
        const paymentModal = document.getElementById('payment-modal');
        const closePaymentModalBtn = document.getElementById('close-payment-modal');
        // SỬA: Lấy TẤT CẢ các nút .buy-btn (bao gồm cả nút "Gia Hạn" mới)
        const buyBtns = document.querySelectorAll('.buy-btn'); 

        const paymentForm = document.getElementById('payment-form');
        const formPackageName = document.getElementById('form_package_name');
        const formPackagePrice = document.getElementById('form_package_price');
        const formPaymentCode = document.getElementById('form_payment_code');

        const modalPackageName = document.getElementById('modal_package_name');
        const modalPackagePrice = document.getElementById('modal_package_price');
        const modalPaymentCode = document.getElementById('modal_payment_code');

        const copyBtn = document.getElementById('copy-payment-code');
        const copyMsg = document.getElementById('copy-success-msg');
        
        // Nút Gói dài hạn (Có thể không tồn tại trên trang này, nên cần kiểm tra)
        const toggleRentalBtn = document.querySelector('.toggle-rental-packs');

        function openModal(modal) {
            if (modal) {
                modal.classList.remove('modal-hidden');
                modal.classList.add('modal-visible');
            }
        }

        function closeModal(modal) {
            if (modal) {
                modal.classList.add('modal-hidden');
                modal.classList.remove('modal-visible');
            }
        }

        function generateRandomString(length) {
            let result = '';
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            const charactersLength = characters.length;
            for (let i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }
            return result;
        }

        // 1. Mở modal khi bấm nút "Mua Ngay" hoặc "Gia Hạn"
        buyBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const packageName = btn.dataset.packageName;
                const price = btn.dataset.price;
                const paymentCode = generateRandomString(10);

                formPackageName.value = packageName;
                formPackagePrice.value = price;
                formPaymentCode.value = paymentCode;

                modalPackageName.textContent = packageName;
                modalPackagePrice.textContent = price;
                modalPaymentCode.textContent = paymentCode;

                openModal(paymentModal);
            });
        });

        // 2. Đóng modal
        if (closePaymentModalBtn) {
            closePaymentModalBtn.addEventListener('click', () => {
                closeModal(paymentModal);
            });
        }
        
        // 3. Xử lý nút sao chép (Mã thanh toán)
        if (copyBtn) {
            copyBtn.addEventListener('click', () => {
                const code = modalPaymentCode.textContent;
                navigator.clipboard.writeText(code).then(() => {
                    copyMsg.textContent = 'Đã sao chép!';
                    setTimeout(() => copyMsg.textContent = '', 2000);
                }).catch(err => {
                    console.error('Không thể sao chép: ', err);
                });
            });
        }
        
        // 4. Xử lý toggle cho gói thuê (Kiểm tra
        if (toggleRentalBtn) {
            toggleRentalBtn.addEventListener('click', (e) => {
                const toggleButton = e.target.closest('.toggle-rental-packs');
                if (toggleButton) {
                    const packsContainer = toggleButton.nextElementSibling;
                    const arrow = toggleButton.querySelector('svg');
                    if (packsContainer) packsContainer.classList.toggle('hidden');
                    if (arrow) arrow.classList.toggle('rotate-180');
                }
            });
        }
        // --- KẾT THÚC PHẦN SAO CHÉP ---


        // --- BẮT ĐẦU PHẦN MỚI: Logic cho nút copy license key ---
        document.getElementById('view-my-licenses').addEventListener('click', function(e) {
            const copyLicenseBtn = e.target.closest('.copy-license-btn');
            
            if (copyLicenseBtn) {
                // Tìm các element liên quan
                const keyTextElement = copyLicenseBtn.previousElementSibling; // Lấy thẻ <code>
                const msgElement = copyLicenseBtn.closest('.mt-2').querySelector('.copy-success-msg');
                
                if (keyTextElement && keyTextElement.textContent) {
                    const keyText = keyTextElement.textContent;
                    
                    navigator.clipboard.writeText(keyText).then(() => {
                        if (msgElement) msgElement.textContent = 'Đã sao chép key!';
                        setTimeout(() => { if (msgElement) msgElement.textContent = ''; }, 2500);
                    }).catch(err => {
                        console.error('Không thể sao chép key: ', err);
                        if (msgElement) msgElement.textContent = 'Lỗi!';
                    });
                }
            }
        });

    </script>
    @endpush

</x-app-layout>