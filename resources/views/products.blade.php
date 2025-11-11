<x-app-layout>
    <x-slot name="header">
        {{ __('Sản Phẩm') }}
    </x-slot>

    <div id="view-products" class="view-content">
        <div class="flex flex-wrap lg:flex-nowrap justify-center items-stretch gap-8">
            <div class="w-full lg:w-1/3 bg-gray-50 rounded-xl shadow-lg p-8 flex flex-col border">
                <div class="flex-grow">
                    <h3 class="text-2xl font-bold text-gray-800">Gói Thuê</h3>
                    <p class="mt-2 text-gray-500">Linh hoạt theo tháng</p>
                    <div class="mt-6"><span class="text-5xl font-extrabold text-gray-900">55.000</span><span class="text-lg font-medium text-gray-600">VNĐ / 30 ngày</span></div>
                    <ul class="mt-8 space-y-3 text-gray-600">
                        <li class="flex items-center"><svg class="flex-shrink-0 w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Hỗ trợ nhanh chóng</li>
                        <li class="flex items-center"><svg class="flex-shrink-0 w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Chi phí thấp, linh hoạt</li>
                    </ul>
                </div>
                <div class="mt-8">
                    <button class="buy-btn w-full bg-blue-50 text-blue-600 hover:bg-blue-100 py-3 rounded-md font-bold" data-package-name="Gói Thuê 30 Ngày" data-price="55.000 VNĐ">Thuê Ngay</button>
                    <div class="mt-4 text-center">
                        <button class="toggle-rental-packs text-sm text-gray-500 hover:text-gray-800">Xem thêm gói dài hạn <svg class="w-4 h-4 inline-block transform transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" /></svg></button>
                        <div class="rental-packs hidden mt-4 space-y-2">
                            <button class="buy-btn w-full bg-gray-100 hover:bg-gray-200 text-gray-700 py-2 px-4 rounded-md text-sm font-medium" data-package-name="Gói Thuê 90 Ngày" data-price="150.000 VNĐ">Gói 90 Ngày - 150.000 VNĐ</button>
                            <button class="buy-btn w-full bg-gray-100 hover:bg-gray-200 text-gray-700 py-2 px-4 rounded-md text-sm font-medium" data-package-name="Gói Thuê 180 Ngày" data-price="270.000 VNĐ">Gói 180 Ngày - 270.000 VNĐ</button>
                            <button class="buy-btn w-full bg-gray-100 hover:bg-gray-200 text-gray-700 py-2 px-4 rounded-md text-sm font-medium" data-package-name="Gói Thuê 365 Ngày" data-price="480.000 VNĐ">Gói 365 Ngày - 480.000 VNĐ</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/3 bg-blue-600 rounded-xl shadow-2xl p-8 flex flex-col ring-4 ring-blue-300 transform scale-105 text-white relative">
                <div class="absolute top-0 right-0 -mt-3 mr-3"><span class="bg-yellow-300 text-gray-900 text-xs font-bold px-3 py-1 rounded-full uppercase">Phổ Biến</span></div>
                <div class="flex-grow">
                    <h3 class="text-2xl font-bold">Key Vĩnh Viễn</h3>
                    <p class="mt-2 text-blue-100">Mua một lần, dùng mãi mãi</p>
                    <div class="mt-6"><span class="text-5xl font-extrabold">1.300.000</span><span class="text-lg font-medium text-blue-50">VNĐ</span></div>
                    <ul class="mt-8 space-y-3 text-blue-100">
                        <li class="flex items-center"><svg class="flex-shrink-0 w-5 h-5 text-white mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Sử dụng vĩnh viễn</li>
                        <li class="flex items-center"><svg class="flex-shrink-0 w-5 h-5 text-white mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Hỗ trợ cập nhật</li>
                        <li class="flex items-center"><svg class="flex-shrink-0 w-5 h-5 text-white mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Giải pháp tiết kiệm nhất</li>
                    </ul>
                </div>
                <div class="mt-8">
                    <button class="buy-btn w-full bg-white hover:bg-gray-100 text-blue-600 py-3 rounded-md font-bold shadow-lg" data-package-name="Key Vĩnh Viễn" data-price="1.300.000 VNĐ">Mua Ngay</button>
                </div>
            </div>
            <div class="w-full lg:w-1/3 bg-gray-50 rounded-xl shadow-lg p-8 flex flex-col border">
                <div class="flex-grow">
                    <h3 class="text-2xl font-bold text-gray-800">Gói Sỉ 5 Key</h3>
                    <p class="mt-2 text-gray-500">Dành cho đội nhóm, đại lý</p>
                    <div class="mt-6"><span class="text-5xl font-extrabold text-gray-900">1.200.000</span><span class="text-lg font-medium text-gray-600">VNĐ / key</span></div>
                     <ul class="mt-8 space-y-3 text-gray-600">
                        <li class="flex items-center"><svg class="flex-shrink-0 w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Mua tối thiểu 5 key</li>
                        <li class="flex items-center"><svg class="flex-shrink-0 w-5 h-5 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Key vĩnh viễn, đầy đủ tính năng</li>
                    </ul>
                </div>
                <div class="mt-8">
                    <button class="buy-btn w-full bg-blue-50 text-blue-600 hover:bg-blue-100 py-3 rounded-md font-bold" data-package-name="Gói Sỉ 5 Key" data-price="6.000.000 VNĐ">Mua Gói Sỉ</button>
                </div>
            </div>
        </div>
    </div>


    <div id="payment-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 modal-backdrop modal-transition modal-hidden">
        <div class="bg-white w-full max-w-md p-8 rounded-2xl shadow-2xl relative">
            <button id="close-payment-modal" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg></button>
            
            <form id="payment-form" method="POST" action="{{ route('orders.store') }}">
                @csrf <input type="hidden" id="form_package_name" name="packageName">
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

            <div id="payment-waiting" class="hidden text-center text-gray-700">
                ...
            </div>
            <div id="payment-success" class="hidden text-center text-gray-700">
                ...
            </div>
        </div>
    </div>


    <div id="message-modal" class="fixed bottom-5 right-5 z-[100] modal-transition modal-hidden">
        <div id="message-content" class="p-4 rounded-lg shadow-lg text-white max-w-sm"></div>
    </div>


    @push('scripts')
    <script>
        // Các DOM element của Modal
        const paymentModal = document.getElementById('payment-modal');
        const closePaymentModalBtn = document.getElementById('close-payment-modal');
        const buyBtns = document.querySelectorAll('.buy-btn');

        // Các DOM element của Form
        const paymentForm = document.getElementById('payment-form');
        const formPackageName = document.getElementById('form_package_name');
        const formPackagePrice = document.getElementById('form_package_price');
        const formPaymentCode = document.getElementById('form_payment_code');

        // Các DOM element hiển thị
        const modalPackageName = document.getElementById('modal_package_name');
        const modalPackagePrice = document.getElementById('modal_package_price');
        const modalPaymentCode = document.getElementById('modal_payment_code');

        // Nút sao chép
        const copyBtn = document.getElementById('copy-payment-code');
        const copyMsg = document.getElementById('copy-success-msg');
        
        // Nút Gói dài hạn
        const toggleRentalBtn = document.querySelector('.toggle-rental-packs');

        // Hàm tiện ích
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

        // SỬA: Hàm tạo mã ngẫu nhiên (10 chữ và số)
        function generateRandomString(length) {
            let result = '';
            // Dùng chữ IN HOA và SỐ (dễ nhìn khi chuyển khoản)
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            const charactersLength = characters.length;
            for (let i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }
            return result;
        }

        // 1. Mở modal khi bấm nút "Mua Ngay"
        buyBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const packageName = btn.dataset.packageName;
                const price = btn.dataset.price;
                
                // SỬA: Dùng hàm tạo mã mới
                const paymentCode = generateRandomString(10); // 10 ký tự chữ và số

                // Gán dữ liệu cho Form (để submit)
                formPackageName.value = packageName;
                formPackagePrice.value = price;
                formPaymentCode.value = paymentCode;

                // Gán dữ liệu cho Modal (để hiển thị)
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
        
        // 3. Xử lý nút sao chép
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
        
        // 4. Xử lý toggle cho gói thuê
        if (toggleRentalBtn) {
            toggleRentalBtn.addEventListener('click', (e) => {
                // Sửa logic: tìm element cha gần nhất
                const toggleButton = e.target.closest('.toggle-rental-packs');
                if (toggleButton) {
                    const packsContainer = toggleButton.nextElementSibling;
                    const arrow = toggleButton.querySelector('svg');
                    if (packsContainer) packsContainer.classList.toggle('hidden');
                    if (arrow) arrow.classList.toggle('rotate-180');
                }
            });
        }

        // 5. Xử lý Submit Form (Đã Thanh Toán)
        // Lưu ý: Chúng ta không dùng fetchApi nữa.
        // Chúng ta để form tự submit theo cách truyền thống.
        // Controller (OrderController@store) sẽ xử lý và chuyển hướng.

    </script>
    @endpush

</x-app-layout>