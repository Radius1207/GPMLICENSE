<!DOCTYPE html>
<html lang="vi" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPM License - Giải Pháp License GPMLogin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        /* Thêm style cho FAQ nếu cần */
        .faq-content {
            transition: max-height 0.5s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- PHẦN 1: GIAO DIỆN KHI CHƯA ĐĂNG NHẬP (LANDING PAGE) -->
    <div id="landing-page">
        <!-- Header -->
        <header class="bg-gray-900/80 backdrop-blur-md sticky top-0 z-50 border-b border-gray-700">
            <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-20">
                    <div class="flex-shrink-0 flex items-center">
                        <svg class="w-10 h-10 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                        </svg>
                        <span class="ml-3 text-2xl font-bold text-white">GPM License</span>
                    </div>
                    <div class="hidden md:flex md:items-center md:space-x-8">
                        <a href="#features" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-base font-medium transition duration-200">Tính Năng</a>
                        <a href="#faq" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-base font-medium transition duration-200">Hỗ Trợ</a>
                    </div>
                    <div class="hidden md:flex items-center space-x-4" id="auth-container-landing">
                        <!-- SỬA: Dùng route() của Laravel -->
                        <a href="{{ route('login') }}" class="text-gray-300 hover:text-white px-4 py-2 rounded-md text-base font-medium transition duration-200">Đăng Nhập</a>
                        <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-base font-medium transition duration-200">Đăng Ký</a>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Hero Section -->
        <section class="relative pt-24 pb-32 sm:pt-32 sm:pb-40 overflow-hidden bg-gray-900 text-white">
             <div aria-hidden="true" class="absolute inset-0 z-0 opacity-30"><div class="absolute inset-0 max-w-7xl mx-auto"><div class="absolute inset-x-0 top-0 h-[800px] w-full blur-3xl" style="background: radial-gradient(100% 50% at 50% 0%, rgba(59, 130, 246, 0.3) 0%, rgba(17, 24, 39, 0) 100%);"></div></div></div>
             <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight">Giải Pháp License GPMlogin<span class="block text-blue-500 mt-2 sm:mt-4">Vĩnh Viễn & Linh Hoạt</span></h1>
                <p class="mt-6 text-lg sm:text-xl text-gray-300 max-w-2xl mx-auto">Cung cấp giải pháp cấp License GPM vĩnh viễn hoặc thuê theo thời gian. Hỗ trợ nhanh chóng, kích hoạt tức thì, ổn định 24/7.</p>
                <div class="mt-10 flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="{{ route('register') }}" class="w-full sm:w-auto bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-md text-lg font-medium transition duration-200 btn-glow">Bắt Đầu Ngay</a>
                    <a href="#features" class="w-full sm:w-auto bg-transparent border-2 border-gray-600 hover:bg-gray-800 hover:border-gray-500 text-white px-8 py-3 rounded-md text-lg font-medium transition duration-200">Tìm Hiểu Thêm</a>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <!-- SỬA: Đã chèn nội dung HTML đầy đủ -->
        <section id="features" class="py-24 bg-gray-800 text-white">
             <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl sm:text-4xl font-extrabold">Tại Sao Chọn Chúng Tôi?</h2>
                    <p class="mt-4 text-lg text-gray-400">Chúng tôi không chỉ bán license. Chúng tôi cung cấp một giải pháp ổn định, lâu dài và được hỗ trợ tận tình.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gray-900 p-8 rounded-xl shadow-lg transform hover:scale-105 transition-transform duration-300 border border-gray-700 hover:border-blue-500">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-blue-500 text-white mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" /></svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Quản Lý Tập Trung</h3>
                        <p class="text-gray-300">Tất cả license, đơn hàng của bạn được quản lý tại một nơi duy nhất. Dễ dàng theo dõi, gia hạn và kiểm soát.</p>
                    </div>
                    <div class="bg-gray-900 p-8 rounded-xl shadow-lg transform hover:scale-105 transition-transform duration-300 border border-gray-700 hover:border-blue-500">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-blue-500 text-white mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.745 3.745 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" /></svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Ổn Định & An Toàn</h3>
                        <p class="text-gray-300">Đảm bảo license hoạt động ổn định, không bị thu hồi. Thông tin khách hàng được bảo mật tuyệt đối.</p>
                    </div>
                    <div class="bg-gray-900 p-8 rounded-xl shadow-lg transform hover:scale-105 transition-transform duration-300 border border-gray-700 hover:border-blue-500">
                        <div class="flex items-center justify-center h-12 w-12 rounded-full bg-blue-500 text-white mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" /></svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Hỗ Trợ 24/7</h3>
                        <p class="text-gray-300">Đội ngũ hỗ trợ luôn túc trực qua Zalo & Telegram để giải đáp mọi thắc mắc và xử lý sự cố của bạn.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <!-- SỬA: Đã chèn nội dung HTML đầy đủ (bao gồm id="faq-container-landing") -->
        <section id="faq" class="py-24 bg-gray-900 text-white">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl sm:text-4xl font-extrabold">Câu Hỏi Thường Gặp</h2>
                </div>
                <div class="space-y-4" id="faq-container-landing"> <!-- ID GÂY LỖI ĐÃ Ở ĐÂY -->
                    <!-- GPMLogin là gì? -->
                    <div>
                        <button class="faq-toggle w-full flex justify-between items-center text-left bg-gray-800 px-6 py-4 rounded-lg shadow-md hover:bg-gray-700 transition duration-200 focus:outline-none">
                            <span class="text-lg font-medium">GPMLogin (GPM) là gì?</span>
                            <svg class="w-6 h-6 text-gray-400 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" /></svg>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden" style="transition: max-height 0.5s ease-in-out;">
                            <p class="bg-gray-800 px-6 pb-4 text-gray-300 -mt-1 rounded-b-lg">
                                GPMLogin (hay GPM) là một phần mềm trình duyệt antidetect (chống phát hiện). Nó cho phép người dùng tạo và quản lý nhiều hồ sơ trình duyệt (profile) riêng biệt, mỗi hồ sơ có một "dấu vân tay" (fingerprint) duy nhất. Điều này rất hữu ích cho các công việc như quảng cáo, MMO (Make Money Online), quản lý nhiều tài khoản mạng xã hội, v.v., mà không bị các nền tảng phát hiện là cùng một người dùng.
                            </p>
                        </div>
                    </div>
                    <!-- License vĩnh viễn là gì? -->
                    <div>
                        <button class="faq-toggle w-full flex justify-between items-center text-left bg-gray-800 px-6 py-4 rounded-lg shadow-md hover:bg-gray-700 transition duration-200 focus:outline-none">
                            <span class="text-lg font-medium">License GPM vĩnh viễn là gì?</span>
                            <svg class="w-6 h-6 text-gray-400 transform transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" /></svg>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden"><p class="bg-gray-800 px-6 pb-4 text-gray-300 -mt-1 rounded-b-lg">Đây là license GPMLogin (GPM) được kích hoạt một lần và sử dụng vĩnh viễn, không cần gia hạn hàng tháng. Bạn sẽ nhận được cập nhật đầy đủ từ nhà phát hành.</p></div>
                    </div>
                </div>

                <!-- Thẻ Hỗ Trợ -->
                <div class="mt-16 bg-gray-800 border border-blue-500 rounded-xl shadow-lg p-8 text-center">
                    <div class="flex justify-center items-center mb-4">
                        <svg class="w-12 h-12 text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456Z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3">Bạn Cần Hỗ Trợ Ngay?</h3>
                    <p class="text-gray-300 max-w-xl mx-auto mb-6">Đội ngũ của chúng tôi luôn sẵn sàng 24/7 để giải đáp mọi thắc mắc của bạn qua Zalo hoặc Telegram.</p>
                    <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                        <a href="https://zalo.me/0976394430" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center w-full sm:w-auto bg-blue-100 hover:bg-blue-200 text-blue-800 font-bold px-6 py-3 rounded-lg transition duration-200">
                            <!-- Zalo Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" viewBox="0 0 48 48" fill="currentColor">
                                <path d="M24,2A22,22,0,1,0,46,24,22,22,0,0,0,24,2Zm8.2,27.5a1.2,1.2,0,0,1-.8.3,1.6,1.6,0,0,1-1.1-.5,6.3,6.3,0,0,1-2.1-1.8,11.6,11.6,0,0,0-1.8-2.1,1.1,1.1,0,0,0-.8-.3,1,1,0,0,0-.8.4l-1.1,1.1a1.2,1.2,0,0,1-.8.4,4.2,4.2,0,0,1-2-.5,10.1,10.1,0,0,1-3-2.1,11,11,0,0,1-2.2-3,4.6,4.6,0,0,1-.5-2.2,1.3,1.3,0,0,1,.4-1l1.1-1.1a1,1,0,0,0,.4-.8,1.1,1.1,0,0,0-.3-.8,10.8,10.8,0,0,0-2.1-1.8A6.3,6.3,0,0,1,15,13.8a1.6,1.6,0,0,1-.5-1.1A1.2,1.2,0,0,1,14.8,12a8,8,0,0,1,2.8-2.6,11.4,11.4,0,0,1,4.1-1.2,13.5,13.5,0,0,1,1.1,0,3.3,3.3,0,0,1,2.5,1.2,3.8,3.8,0,0,1,1,2.4,1.8,1.8,0,0,1-.1,1,2.7,2.7,0,0,1-.5,1,3.4,3.4,0,0,1-.8.8l-.9.9a.9.9,0,0,0-.3.7.8.8,0,0,0,.2.6,10.1,10.1,0,0,0,2,2.3,9.4,9.4,0,0,0,2.3,2,.8.8,0,0,0,.6.2,1,1,0,0,0,.7-.3l.9-.9c.2-.2.5-.4.8-.5a2.7,2.7,0,0,1,1-.1,1.8,1.8,0,0,1,1,.1,3.8,3.8,0,0,1,2.4,1,3.3,3.3,0,0,1,1.2,2.5,13.5,13.5,0,0,1,0,1.1,11.4,11.4,0,0,1-1.2,4.1A8,8,0,0,1,32.2,29.5Z"></path>
                            </svg>
                            Chat qua Zalo
                        </a>
                        <a href="https://t.me/Radius127" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center w-full sm:w-auto bg-sky-100 hover:bg-sky-200 text-sky-800 font-bold px-6 py-3 rounded-lg transition duration-200">
                            <!-- Telegram Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15.65-.54 2.22-.79 3.13-.21.75-.42 1-.68 1.03-.5.1-1.02-.31-1.58-.6-1.12-.58-1.77-.9-2.04-1.4-.3-.55.2-1 .44-.82.21.16.48.4.7.6s.3.24.45.1.28-.21.42-.35.31-.31.36-.7.05-.86-.14-1.25-.4-.68-.4-.68s-.89 1.03-.92 1.06c-.03.03-.4.28-.9.6s-.66.38-.87.38c-.2 0-.68-.15-1.02-.27-.4-.13-.82-.2-1.1-.23-.3-.03-.66 0-.87-.04-.2-.04-.44-.07-.44-.2 0-.13.1-.23.27-.3 1.1-.48 2.3-1 3.15-1.78.4-.38.7-.72.93-1.03.22-.3.4-.6.54-1 .1-.26.07-.52-.06-.7s-.38-.3-.6-.3h-.1c-.27 0-1.5.54-4.22 1.95C2.6 10.1 2.4 10.2 2.1 10c-.3-.15-.3-.3-.3-.4 0-.1.1-.2.3-.3.1-.1 2.3-1.07 3.4-1.5 2.8-1.1 3.5-1.3 4.3-1.3.5 0 1 .1 1.4.3.4.2.6.5.7.9.1.4 0 .9-.05 1.2z"></path></svg>
                            Chat qua Telegram
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- Footer -->
        <!-- SỬA: Đã chèn nội dung HTML đầy đủ -->
        <footer class="bg-gray-900 border-t border-gray-700">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 text-center text-gray-400">
                <p>&copy; 2025 GPM License. Mọi quyền được bảo lưu.</p>
                <p class="text-gray-500 text-sm mt-2">Website cung cấp giải pháp, không liên quan trực tiếp đến nhà phát hành GPMLogin.</p>
            </div>
        </footer>
    </div>
    
    <script>
        // Script cho FAQ Toggle
        // SỬA: Thêm kiểm tra null để tránh lỗi
        const faqContainer = document.getElementById('faq-container-landing');
        if (faqContainer) {
            faqContainer.addEventListener('click', (e) => {
                const toggleBtn = e.target.closest('.faq-toggle');
                if (toggleBtn) {
                    const content = toggleBtn.nextElementSibling;
                    const arrow = toggleBtn.querySelector('svg');
                    
                    if (content.style.maxHeight) {
                        content.style.maxHeight = null;
                        arrow.style.transform = 'rotate(0deg)';
                    } else {
                        // Đóng tất cả FAQ khác
                        document.querySelectorAll('#faq-container-landing .faq-content').forEach(c => c.style.maxHeight = null);
                        document.querySelectorAll('#faq-container-landing .faq-toggle svg').forEach(a => a.style.transform = 'rotate(0deg)');
                        
                        content.style.maxHeight = content.scrollHeight + "px";
                        arrow.style.transform = 'rotate(180deg)';
                    }
                }
            });
        }
    </script>
</body>
</html>