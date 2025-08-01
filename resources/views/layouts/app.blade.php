<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Order App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#F59E0B',
                        secondary: '#F3F4F6',
                        dark: '#1F2937',
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-[#FAFAFA] font-sans">
    @yield('pizza')
   

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');
        const menuBackdrop = document.getElementById('menu-backdrop');

        const cartToggle = document.getElementById('cart-toggle');
        const orderSummary = document.getElementById('order-summary');
        const cartBackdrop = document.getElementById('cart-backdrop');

        function toggleMenu() {
            sidebar.classList.toggle('-translate-x-full');
            menuBackdrop.classList.toggle('hidden');
        }

        function toggleCart() {
            orderSummary.classList.toggle('translate-x-full');
            cartBackdrop.classList.toggle('hidden');
        }

        menuToggle.addEventListener('click', toggleMenu);
        menuBackdrop.addEventListener('click', toggleMenu);

        cartToggle.addEventListener('click', toggleCart);
        cartBackdrop.addEventListener('click', toggleCart);
    </script>
</body>
</html>

