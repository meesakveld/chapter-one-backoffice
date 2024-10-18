<header class="flex flex-col gap-4 sm:flex-row justify-between items-center p-4 max-w-[1680px] m-auto">
    <a href="/"><img src="/assets/logo.png" alt="Logo Chaptor One"></a>

    <nav class="flex gap-4">
        <a href="/" class="hover:text-c-blue transition-colors duration-150 <?= $title === 'Dashboard' ? 'font-bold text-c-blue' : '' ?>">
            Home
        </a>
        
        <a href="/books" class="hover:text-c-blue transition-colors duration-150 <?= $title === 'Books' || $title === 'Authors' || $title === "Publishers" || $title === "Categories" ? 'font-bold text-c-blue' : '' ?>">
            Books
        </a>
        
        <a href="/users" class="hover:text-c-blue transition-colors duration-150 <?= $title === 'Users' ? 'font-bold text-c-blue' : '' ?>">
            Users
        </a>
        
        <a href="/orders" class="hover:text-c-blue transition-colors duration-150">
            Orders
        </a>
    </nav>
</header> 