<?php

return [
    'logo' => 'images/brand/logo-divija.jpeg',

    // Profil usaha: teks statis, tidak disimpan di database.
    'profile' => [
        'name' => 'Divija',
        'tagline' => 'Homemade for you',
        'intro' => 'Divija menghadirkan susu kedelai, sari kacang hijau almond, dan jelly milk yang diolah sendiri dari bahan pilihan. Tanpa pengawet, menggunakan gula asli, dan dikemas higienis dalam botol.',
        'story' => [
            'Divija adalah usaha minuman botol rumahan yang berkomitmen menyajikan minuman bergizi dan menyegarkan. Setiap botol diolah sendiri dari bahan pilihan, tanpa pengawet, dan menggunakan gula asli.',
            'Kami melayani pemesanan melalui WhatsApp dan Instagram, sehingga Anda dapat memesan dengan mudah kapan saja.',
        ],
        'whatsapp' => '6289525773195',
        'whatsapp_display' => '0895-2577-3195',
        'instagram' => 'divija.collection',
        'address' => null,
        'opening_hours' => null,
        'maps_embed' => null,
    ],

    'nav' => [
        ['label' => 'Beranda', 'route' => 'home', 'active' => 'home'],
        ['label' => 'Menu', 'route' => 'products.index', 'active' => 'products.*'],
        ['label' => 'Tentang Kami', 'route' => 'about', 'active' => 'about'],
        ['label' => 'Galeri', 'route' => 'gallery', 'active' => 'gallery'],
        ['label' => 'Cara Pemesanan', 'route' => 'contact', 'active' => 'contact'],
    ],

    'ui' => [
        'nav_label' => 'Navigasi utama',
        'logo_alt' => 'Logo Divija, kembali ke beranda',
        'order_short' => 'Pesan',
        'order_whatsapp' => 'Pesan melalui WhatsApp',
        'chat_whatsapp' => 'Hubungi via WhatsApp',
        'order_message' => 'Halo Divija, saya ingin memesan produk Anda.',
        'order_message_product' => 'Halo Divija, saya ingin memesan :product.',
        'order_band_title' => 'Siap memesan?',
        'order_band_text' => 'Pemesanan dilayani melalui WhatsApp di nomor',
        'footer_rights' => 'Seluruh hak cipta dilindungi.',
        'whatsapp' => 'WhatsApp',
        'instagram' => 'Instagram',
        'size_unit' => 'ml',
        'flavor_prefix' => 'Pilihan rasa',
        'flavor_and' => ' dan ',
        'starting_from' => 'mulai dari',
        'photo_alt_prefix' => 'Produk',
    ],

    'pages' => [
        'home' => [
            'headline' => 'Minuman botol rumahan berkualitas, dibuat segar untuk Anda',
            'cta_menu' => 'Lihat Menu',
            'menu_anchor' => 'menu',
            'menu_title' => 'Menu dan Harga',
            'menu_link' => 'Lihat detail produk',
            'values_title' => 'Komitmen Kualitas Kami',
            'gallery_title' => 'Galeri Produk',
            'gallery_link' => 'Lihat seluruh galeri',
        ],
        'products' => [
            'title' => 'Menu Minuman',
            'lead' => 'Seluruh produk diolah sendiri dan dikemas dalam botol. Tersedia dalam beberapa ukuran sesuai kebutuhan Anda.',
        ],
        'product' => [
            'back' => 'Kembali ke menu',
            'flavors' => 'Pilihan rasa',
            'sizes' => 'Ukuran dan harga',
            'ingredients' => 'Komposisi',
            'storage' => 'Penyimpanan',
            'others' => 'Produk lainnya',
            'carousel_label' => 'Galeri foto produk',
            'previous' => 'Foto sebelumnya',
            'next' => 'Foto berikutnya',
            'go_to' => 'Lihat foto ke-',
            'photo_alt' => 'Botol',
        ],
        'about' => [
            'title' => 'Tentang',
            'products_title' => 'Produk Kami',
            'values_title' => 'Komitmen Kualitas Kami',
        ],
        'gallery' => [
            'title' => 'Galeri',
            'lead' => 'Dokumentasi produk dan daftar menu resmi',
            'poster_title' => 'Poster Menu',
            'products_title' => 'Foto Produk',
            'empty' => 'Galeri sedang dalam proses pembaruan.',
        ],
        'contact' => [
            'title' => 'Cara Pemesanan',
            'lead' => 'Pemesanan dilakukan melalui WhatsApp. Situs ini bersifat informatif dan tidak menerima transaksi langsung.',
            'card_title' => 'Hubungi',
            'hours' => 'Jam layanan',
            'location' => 'Lokasi',
        ],
    ],
];
